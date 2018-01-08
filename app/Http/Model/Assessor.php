<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Assessor extends Model
{
    //修改模型限定的表名
    public $table = 'Assessor';
    // 修改默认的主键名称
    public $primaryKey = 'id';
    // 设置默认的时间字段
    public $timestamps = false;
}
