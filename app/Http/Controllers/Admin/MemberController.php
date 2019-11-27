<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入模型
use App\Admin\Member;
//引入Input类型
use Input;
class MemberController extends Controller
{
    //列表方法
    public function index(){
    	//查询数据
    	$data = Member::get();
    	//展示视图
    	return view('admin.member.index',compact('data'));
    }

    //添加方法
    public function add(){
    	//判断请求方法
    	if(Input::method()  =="POST"){

    	}else{
    		//展示视图
    		return view('admin.member.add');
    	}
    }
}
