<?php
/**
 * @copyright (C)2016-2099 Hnaoyun Inc.
 * @author XingMeng
 * @email hnxsh@foxmail.com
 * @date 2017年04月07日
 *  区域模型类
 */
namespace app\admin\model\system;

use core\basic\Model;

class AreaModel extends Model
{

    // 获取区域列表
    public function getList()
    {
        $result = parent::table('ay_area')->order('pcode,acode')
            ->page()
            ->select();
        $tree = get_tree($result, 0, 'acode', 'pcode');
        return $tree;
    }

    // 获取区域选择列表
    public function getSelect()
    {
        $result = parent::table('ay_area')->field('pcode,acode,name')
            ->order('pcode,acode')
            ->select();
        $tree = get_tree($result, 0, 'acode', 'pcode');
        return $tree;
    }

    // 检查区域
    public function checkArea($where)
    {
        return parent::table('ay_area')->field('id')
            ->where($where)
            ->find();
    }

    // 获取区域详情
    public function getArea($acode)
    {
        return parent::table('ay_area')->where("acode='$acode'")->find();
    }

    // 获取最后一个code
    public function getLastCode()
    {
        return parent::table('ay_area')->order('id DESC')->value('acode');
    }

    // 添加区域
    public function addArea(array $data)
    {
        if ($data['is_default']) {
            $this->unsetDefault($data['acode']);
        }
        return parent::table('ay_area')->autoTime()->insert($data);
    }

    // 删除区域
    public function delArea($acode)
    {
        $areas = $this->getAreaCascade($acode);
        if (! $areas) {
            return false;
        }

        foreach ($areas as $area) {
            if (! empty($area['is_default'])) {
                return false;
            }
        }

        $acodes = array();
        foreach ($areas as $area) {
            $acodes[] = $area['acode'];
        }

        $this->delAreaRelatedData($acodes);
        return parent::table('ay_area')->delete($acodes, 'acode');
    }

    private function getAreaCascade($acode)
    {
        $list = parent::table('ay_area')->select();
        if (! $list) {
            return array();
        }

        $map = array();
        foreach ($list as $item) {
            $row = is_object($item) ? (array) $item : $item;
            $map[$row['acode']] = $row;
        }

        if (! isset($map[$acode])) {
            return array();
        }

        $result = array();
        $queue = array($acode);
        while ($queue) {
            $current = array_shift($queue);
            if (! isset($map[$current]) || isset($result[$current])) {
                continue;
            }
            $result[$current] = $map[$current];
            foreach ($map as $row) {
                if ($row['pcode'] == $current && ! isset($result[$row['acode']])) {
                    $queue[] = $row['acode'];
                }
            }
        }
        return array_values($result);
    }

    private function delAreaRelatedData(array $acodes)
    {
        if (! $acodes) {
            return;
        }

        foreach ($acodes as $acode) {
            $this->delContentExtByAcode($acode);
        }

        $tables = array(
            'ay_company',
            'ay_content',
            'ay_content_sort',
            'ay_link',
            'ay_message',
            'ay_role_area',
            'ay_site',
            'ay_slide',
            'ay_tags'
        );

        foreach ($tables as $table) {
            parent::table($table)->delete($acodes, 'acode');
        }
    }

    private function delContentExtByAcode($acode)
    {
        $ids = parent::table('ay_content')->where("acode='$acode'")->column('id');
        if (! $ids) {
            return;
        }

        $tables = array('ay_content_ext');
        $modelTables = parent::table('ay_model')->column('tname');
        if ($modelTables) {
            foreach ($modelTables as $table) {
                $tables[] = $this->normalizeExtTableName($table);
            }
        }

        foreach (array_unique($tables) as $table) {
            if (preg_match('/^ay_content_[a-zA-Z0-9_]+$/', $table)) {
                parent::table($table)->delete($ids, 'contentid');
            }
        }
    }

    private function normalizeExtTableName($tname)
    {
        $tname = trim((string) $tname);
        if ($tname === '') {
            return 'ay_content_ext';
        }
        if (! preg_match('/^[a-zA-Z0-9_]+$/', $tname)) {
            return 'ay_content_ext';
        }
        if (strpos($tname, 'ay_content_') !== 0) {
            $tname = 'ay_content_' . $tname;
        }
        return $tname;
    }

    // 修改区域资料
    public function modArea($acode, $data)
    {
        $result = parent::table('ay_area')->autoTime()
            ->where("acode='$acode'")
            ->update($data);
        if ($data['is_default']) {
            $this->unsetDefault($data['acode']);
        }
        if ($result && array_key_exists('acode', $data) && $acode != $data['acode']) {
            $this->modSubArea($acode, $data['acode']);
        }
        return $result;
    }

    // 当父编号改变时，修改子栏目的父编码
    private function modSubArea($pcode, $pcodeNew)
    {
        return parent::table('ay_area')->where("pcode='$pcode'")
            ->autoTime()
            ->update("pcode='$pcodeNew'");
    }

    // 去除$acode以外的默认区域
    private function unsetDefault($acode)
    {
        parent::table('ay_area')->where("acode<>'$acode'")->update('is_default=0');
    }
}
