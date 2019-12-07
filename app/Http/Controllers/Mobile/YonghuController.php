<?php

namespace App\Http\Controllers\Mobile;

use App\Mobile\Realname;
use App\Mobile\Yonghu;
use App\Rules\Hadexistence;
use App\Rules\SupserRule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class YonghuController extends Controller
{
    //用户登陆
    public function loginshow()
    {
        return view('mobile.yonghu.login');
    }
    public function login(Request $request)
    {
        //开始自动验证
        $this->validate($request, [
            'username' => 'required|min:2|max:20',
            'password' => 'required|min:6'
        ]);
        $data = $request->only(['username', 'password']);
        //判断是否登陆成功
        $yonghudata = Yonghu::query()->where('username',$data['username'])
            ->where('password',md5($data['password']))
            ->first();
        if (!empty($yonghudata)) {
            $yonghudata = $yonghudata->toArray();
            //重启一次session
            $request->session()->start();
            //将数据写入session
            $request->session()->replace($yonghudata);
            return redirect(route('mobile.yonghu.index'));
        } else {
            return redirect(route('mobile.yonghu.loginshow'))->withErrors([
                'loginError' => '用户名或密码错误。'
            ]);
        }
    }

    //用户注册
    public function registshow()
    {
        return view('mobile.yonghu.registshow');
    }
    public function regist(Request $request)
    {
        //开始自动验证
        $data = $this->validate($request, [
            'username' => 'required|min:3|max:20|unique:yonghu,username',
            'password' => 'required|min:6|max:50',
            'repassword' => 'required|same:password',
            'debtnum' => 'required|integer|min:0|max:1312200',
            'mobile' => 'required|size:11',
            'mobile_b' => 'sometimes|required|size:11',
            'pusher' => ['required', new SupserRule()],
        ], [], [
            'repassword' => '确认密码',
            'mobile_b' => '手机号1',
            'debtnum' => '负债总额'
        ]);
        //验证通过，将数据添加数据库
        //1、判断对应的负债等级
        if ($data['debtnum'] > 0) $data['debtnumlevel'] = 1;
        if ($data['debtnum'] > 600) $data['debtnumlevel'] = 2;
        if ($data['debtnum'] > 1800) $data['debtnumlevel'] = 3;
        if ($data['debtnum'] > 5400) $data['debtnumlevel'] = 4;
        if ($data['debtnum'] > 16200) $data['debtnumlevel'] = 5;
        if ($data['debtnum'] > 48600) $data['debtnumlevel'] = 6;
        if ($data['debtnum'] > 145800) $data['debtnumlevel'] = 7;
        if ($data['debtnum'] > 437400) $data['debtnumlevel'] = 8;
    }

    //首页展示
    public function index(){
        session()->put('tabbarno',1);
        return view('mobile.yonghu.index');
    }
    //用户中心
    public function center(){
        session()->put('tabbarno',3);
        return view('mobile.yonghu.center');
    }
    //用户信息
    public function info(){
        $message = "";
        return view('mobile.yonghu.info',compact('message'));
    }
    public function infoupdate(Request $request){
        $validata = $request->validate([
            'level' => 'required|integer',
            'username' => ['required','min:3','max:20',Rule::unique('yonghu')->ignore(session()->get('id'))],
            'mobile' => ['required','size:11',Rule::unique('yonghu')->ignore(session()->get('id'))],
            'mobile_b' => ['sometimes','required','size:11',Rule::unique('yonghu')->ignore(session()->get('id'))],
        ],[],[
            'mobile_b' => '手机号1'
        ]);
        //修改用户数据
        $flag = Yonghu::query()->where('id',session()->get('id'))->update($validata);
        if (0<$flag){
            //修改session
            session()->put('username',$validata['username']);
            session()->put('mobile',$validata['mobile']);
            session()->put('mobile_b',$validata['mobile_b']);
            return back()->with('message','修改成功')->withInput();
        }else{
            return back()->with('message','修改失败')->withInput();
        }
    }

    //用户认证
    public function nameverifiedpage(){
        return view('mobile.yonghu.nameverified');
    }
}
