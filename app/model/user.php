<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //修改模型限定的表名
    public $table = 'user';
    // 修改默认的主键名称
    public $primaryKey = 'id';
    // 设置默认的时间字段
    public $timestamps = false;
}
