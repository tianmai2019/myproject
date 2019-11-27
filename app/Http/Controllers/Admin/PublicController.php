<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PublicController extends Controller
{
    //登陆页面的展示
    public function login()
    {
        //展示视图
        return view('admin.public.login');
    }

    //验证数据
    public function check(Request $request){
        //开始自动验证
        $this->validate($request,[
            'username' => 'required|min:2|max:20',
            'password' => 'required|min:6'
        ]);
        //开始
    	$data = $request -> only(['username','password']);
    	//检查用户是否存在
        $admin = Admin::query()->where('username',$data['username'])->where('password',md5($data['password']))->first();
        if($admin){
            //写入session数据
            session()->put('username', $data['username']);
            session()->put('password',md5($data['password']));
            //跳转到后台首页
            return redirect('/admin/index/index');
        }else{
            //跳转到登陆首页
            return redirect('/admin/public/login') -> withErrors([
                'loginError' => '用户名或密码错误。'
            ]);
        }


    }
}
