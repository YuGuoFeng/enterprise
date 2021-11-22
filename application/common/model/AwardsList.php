<?php

namespace app\common\model;

use think\Model;


class AwardsList extends Model
{

    

    

    // 表名
    protected $name = 'awards_list';
    
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

    







    public function awardstype()
    {
        return $this->belongsTo('AwardsType', 'first_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}