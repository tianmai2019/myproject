<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/home', 'HomeController@index')->name('home');


//后台路由部分（不需要权限判断）
Route::group(['prefix' => 'admin'],function (){
    //后台登陆页面
    Route::get('public/login','Admin\PublicController@login')->name('login');
    //后台登陆处理页面
    Route::post('public/check','Admin\PublicController@check');
    //退出地址
    Route::get('public/logout','Admin\PublicController@logout');
});

//后台路由部分（需要权限判断）
// Route::group(['prefix' => 'admin','middleware' => 'auth:admin'],function(){
Route::group(['prefix' => 'admin'],function(){
    //后台首页路由
    Route::get('index/index','Admin\IndexController@index');
    Route::get('index/welcome','Admin\IndexController@welcome');

});

//移动端页面（不需要判断session）
Route::group(['prefix' => 'mobile'],function(){
    //前台登陆页面路由
    Route::get('yonghu/loginshow','Mobile\YonghuController@loginshow')->name('mobile.yonghu.loginshow');
    Route::post('yonghu/login','Mobile\YonghuController@login')->name('mobile.yonghu.login');

    //前台注册页面
    Route::get('yonghu/registshow','Mobile\YonghuController@registshow')->name('mobile.yonghu.registshow');
    Route::post('yonghu/regist','Mobile\YonghuController@regist')->name('mobile.yonghu.regist');
});

//移动端页面(需要判断session)
Route::group(['prefix' => 'mobile'],function(){
    //前台首页
    Route::get('yonghu/index','Mobile\YonghuController@index')->name('mobile.yonghu.index');
    //团队信息
    Route::get('team/index','Mobile\TeamController@index')->name('mobile.team.index');
    //众筹页面
    Route::get('crowdfunding/index','Mobile\CrowdfundingController@index')->name('mobile.crowdfunding.index');
    //还款页面
    Route::get('crowdfunding/repayment','Mobile\CrowdfundingController@repayment')->name('mobile.crowdfunding.repayment');
    //用户中心
    Route::get('yonghu/center','Mobile\YonghuController@center')->name('mobile.yonghu.center');
});