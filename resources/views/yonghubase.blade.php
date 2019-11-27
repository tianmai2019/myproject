<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
<div class="container">
    <div class="text-center" style="margin-top: 5vw"><img src="/uploads/title.png" style="width: 50vw"></div>

    @yield('content')

    <div class="row text-center fixed-bottom" style="background-color: #3C64D3;">
        <div class="col d-flex align-items-center justify-content-center" style="height: 30px">
            <div class="">
                <a href="{{route('mobile.yonghu.index')}}" style="color: white;">首页</a>
            </div>
        </div>
        <div class="col d-flex align-items-center justify-content-center" style="height: 30px">
            <div class="">
                <a href="{{route('mobile.crowdfunding.index')}}" style="color: white;">众筹</a>
            </div>
        </div>
        <div class="col d-flex align-items-center justify-content-center" style="height: 30px">
            <div class="">
                <a href="{{route('mobile.yonghu.center')}}" style="color: white;">我的</a>
            </div>
        </div>
    </div>
</div>

@yield('script')
</body>
</html>
