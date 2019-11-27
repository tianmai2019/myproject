@extends('yonghubase')

@section('content')
    <div class="d-flex justify-content-between border border-primary rounded"
         style="height: 30vw;margin-top: 5vw;background-color: #3C64D3">
        <div style="padding: 3vw;width: 30vw">
            <img class="rounded-circle" style="width: 100%;height: 100%" src="/uploads/img/touxiang.jpg">
        </div>
        <div class="d-flex flex-column justify-content-center"
             style="margin-top:2vw;margin-right: 15vw;color: white;">
            <div><h5>用户名：username</h5></div>
            <div><h5>编号：12312</h5></div>
            <div><h5>级别：V1</h5></div>
        </div>
    </div>
    <div class="border border-primary rounded" style="margin-top: 5vw;background-color: #3C64D3;">
        <a href="{{Route('mobile.yonghu.index')}}">
            <h6 class="text-center" style="margin-top: 2vw;margin-left: 5vw;color: white">个人资料></h6>
        </a>
    </div>
    <div class="border border-primary rounded" style="margin-top: 1vw;background-color: #3C64D3;color: white">
        <a href="{{Route('mobile.yonghu.index')}}">
            <h6 class="text-center" style="margin-top: 2vw;margin-left: 5vw;color: white">实名认证></h6>
        </a>
    </div>
    <div class="border border-primary rounded" style="margin-top: 1vw;background-color: #3C64D3;color: white">
        <a href="{{Route('mobile.yonghu.index')}}">
            <h6 class="text-center" style="margin-top: 2vw;margin-left: 5vw;color: white">收款方式></h6>
        </a>
    </div>
    <div class="border border-primary rounded" style="margin-top: 1vw;background-color: #3C64D3;color: white">
        <a href="{{Route('mobile.yonghu.index')}}">
            <h6 class="text-center" style="margin-top: 2vw;margin-left: 5vw;color: white">升级审核></h6>
        </a>
    </div>
    <div class="border border-primary rounded" style="margin-top: 1vw;background-color: #3C64D3;color: white">
        <a href="{{Route('mobile.yonghu.index')}}">
            <h6 class="text-center" style="margin-top: 2vw;margin-left: 5vw;color: white">我的团队></h6>
        </a>
    </div>
    <div class="border border-primary rounded" style="margin-top: 1vw;background-color: #3C64D3;color: white">
        <a href="{{Route('mobile.yonghu.index')}}">
            <h6 class="text-center" style="margin-top: 2vw;margin-left: 5vw;color: white">联系我们></h6>
        </a>
    </div>
    <div class="border border-primary rounded" style="margin-top: 1vw;background-color: #3C64D3;color: white">
        <a href="{{Route('mobile.yonghu.index')}}">
            <h6 class="text-center" style="margin-top: 2vw;margin-left: 5vw;color: white">协议></h6>
        </a>
    </div>

@endsection