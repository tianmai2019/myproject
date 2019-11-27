<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    //显示团队页面
    public function index(){
        //获取用户数据

        return view('mobile.team.index');
    }
}
