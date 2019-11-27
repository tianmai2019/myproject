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
<body>
<div class="container">
    <div class="row justify-content-center" style="margin-top: 40%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h1>清水筹</h1></div>
                <div class="card-body">
                    <form method="POST" action="{{route('mobile.yonghu.login')}}">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">用户名：</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">密码：</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-10 ">
                                <button type="submit" class="btn btn-primary">
                                    登陆
                                </button>
                            </div>
                            <div >
                                <a href="/mobile/yonghu/regist">注册</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if (count($errors) > 0)
    <div class="alert alert-warning" role="alert">
        {{$allError=''}}
        @foreach ($errors->all() as $error)
            "{{$allError .=$error}}"
        @endforeach
    </div>
@endif
</body>
</html>
