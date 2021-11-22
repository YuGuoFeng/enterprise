<?php

namespace app\common\model;

use think\Model;


class ProjectList extends Model
{

    

    

    // 表名
    protected $name = 'project_list';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = false;

    // 追加属性
    protected $append = [

    ];
    

    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['weigh' => $row[$pk]]);
        });
    }

    







    public function projecttype()
    {
        return $this->belongsTo('ProjectType', 'second_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }

    public function firstId()
    {
        return $this->belongsTo('ProjectType', 'first_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}
