<?php

namespace App\Mobile;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;

class Yonghu extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    //定义当前表
    protected $table = 'yonghu';

    use Authenticatable;

}
