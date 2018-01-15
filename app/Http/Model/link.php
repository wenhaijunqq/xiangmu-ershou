<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    //修改模型限定的表名
    public $table = 'Link';
    // 修改默认的主键名称
    public $primaryKey = 'id';
    // 设置默认的时间字段
    public $timestamps = false;
}
