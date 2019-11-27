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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">用户注册</div>
                @if (count($errors) > 0)
                    <div class="alert alert-warning" role="alert">
                        <?php
                            $allError = '';
                            foreach ($errors->all() as $error){
                                $allError .= $error.'<br/>';
                            }
                            echo $allError;
                        ?>
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{route('yonghu.create')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <label class="col-sm-4 col-form-label text-md-right">用户名：</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                            </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right">密码：</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" value="{{ old('password')}}" required>
                            </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right">确认密码：</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="repassword" value="{{ old('repassword')}}" required>
                            </div>
                            <label class="col-sm-4 col-form-label text-md-right">欠款总额：</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="debtnum" value="{{ old('debtnum') }}" required>
                            </div>
                            <label class="col-sm-4 col-form-label text-md-right">手机号：</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>
                            </div>
                            <label class="col-sm-4 col-form-label text-md-right">手机号1：</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile" value="{{ old('mobile_b') }}" required>
                            </div>
                            <label class="col-sm-4 col-form-label text-md-right">推荐编号：</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pusher" value="{{ old('pusher') }}" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-10 ">
                                <button type="submit" class="btn btn-primary">
                                    注册
                                </button>
                            </div>
                            <div >
                                <a href="javascript:history.back(-1)">返回</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
