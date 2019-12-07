<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/2.1.3/weui.css">
    <link rel="stylesheet" href="https://res.wx.qq.com/open/libs/weui/2.1.3/weui.min.css">

    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
    <style>
        html, body {
            position: relative;
            height: 100%;
        }
        .daohang{
            background-color: #3C64D3;
        }
        .daohang a p{
            color: white;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="page" style="height: 100%;">
        <div class="page__bd" style="height: 100%;">
            <div class="weui-tab">
                <div class="weui-tab__panel">

                    <h1 style="font-size: 4em;font-weight: bold;color: #3C64D3;text-align: center">清水筹</h1>
                    @yield('content')

                </div>
                <div class="weui-tabbar daohang">
                    <a href="{{Route('mobile.yonghu.index')}}" class="weui-tabbar__item
                        @if(session('tabbarno')==1)
                            weui-bar__item_on
                        @endif">
                        <p class="weui-tabbar__label" >首页</p>
                    </a>
                    <a href="{{Route('mobile.crowdfunding.index')}}" class="weui-tabbar__item
                        @if(session('tabbarno')==2)
                            weui-bar__item_on
                        @endif">
                        <p class="weui-tabbar__label">众筹</p>
                    </a>
                    <a href="{{Route('mobile.yonghu.center')}}" class="weui-tabbar__item
                        @if(session('tabbarno')==3)
                            weui-bar__item_on
                        @endif">
                        <p class="weui-tabbar__label">我的</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@yield('script')
</body>
</html>
