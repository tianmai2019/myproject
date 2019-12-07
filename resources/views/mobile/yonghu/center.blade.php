@extends('yonghubase')

@section('content')
    <style>
        .centerlist{
        }
        .centerlist a{
            border-radius: 1vw;
            background-color: #3C64D3;
            margin: 2vw;
            height: 2vw;
            color: white;
            text-align: center;
        }
        .centerhead{
            background-color: #3C64D3;
            height: 25vw;
            margin-top: 3vw;
        }
        .avatar{
            height: 100%;
            width: 25vw;
        }
        .yonghuinfo{
            color: white;
            margin: 3vw auto auto 10vw;
        }
    </style>
    <div class="weui-flex centerhead">
        <div class="placeholder avatar">
            <img src="/uploads/img/touxiang.jpg" style="margin:10%;height: 80%;width: 80%;border-radius: 50%">
        </div>
        <div class="weui-flex__item">
            <div class="placeholder yonghuinfo" >
                <div><p>用户名：username</p></div>
                <div><p>编号：12312</p></div>
                <div><p>级别：V1</p></div>
            </div>
        </div>
    </div>
    <div class="weui-cells centerlist">
        <a class="weui-cell weui-cell_access" href="{{Route('mobile.yonghu.info')}}">
            <div class="weui-cell__bd"><p>个人资料</p></div><div>&gt;</div>
        </a>
        <a class="weui-cell weui-cell_access" href="{{Route('mobile.yonghu.nameverifiedpage')}}">
            <div class="weui-cell__bd"><p>实名认证</p></div><div>&gt;</div>
        </a>
        <a class="weui-cell weui-cell_access" href="{{Route('mobile.yonghu.nameverifiedpage')}}">
            <div class="weui-cell__bd"><p>收款方式</p></div><div>&gt;</div>
        </a>
        <a class="weui-cell weui-cell_access" href="{{Route('mobile.yonghu.nameverifiedpage')}}">
            <div class="weui-cell__bd"><p>升级审核</p></div><div>&gt;</div>
        </a>
        <a class="weui-cell weui-cell_access" href="{{Route('mobile.yonghu.nameverifiedpage')}}">
            <div class="weui-cell__bd"><p>我的团队</p></div><div>&gt;</div>
        </a>
        <a class="weui-cell weui-cell_access" href="{{Route('mobile.yonghu.nameverifiedpage')}}">
            <div class="weui-cell__bd"><p>联系我们</p></div><div>&gt;</div>
        </a>
        <a class="weui-cell weui-cell_access" href="{{Route('mobile.yonghu.nameverifiedpage')}}">
            <div class="weui-cell__bd"><p>协议</p></div><div>&gt;</div>
        </a>
    </div>
@endsection