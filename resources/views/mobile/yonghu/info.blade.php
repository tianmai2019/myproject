@extends('yonghubase')
@section('content')
    @if (count($errors) > 0)
        <?php
        $allError = '';
        foreach ($errors->all() as $error) {
            $allError .= $error . '\n';
        }
        ?>
        <script>
            alert("{{ $allError}}");
        </script>
    @endif
    @if (session('message'))
        <script>
            alert("{{ session('message') }}");
        </script>
    @endif
    <div class="weui-cells__title" style="text-align: center;font-size: 1.5em;color: #3C64D3;margin-top: 10vw">个人资料</div>
    <form method="POST" action="{{route('mobile.yonghu.infoupdate')}}">
        {{csrf_field()}}
        <div class="weui-cells weui-cells_form" style="padding-left: 5vw">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">级别：</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="number" name="level" value="{{session()->get('level')}}" readonly/>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">手机号：</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="number" name="mobile" value="{{session()->get('mobile')}}"/>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">手机号1：</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="number" name="mobile_b" value="{{session()->get('mobile_b')}}"/>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label">用户名：</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="username" value="{{session()->get('username')}}"/>
                </div>
            </div>
            <div style="text-align: center;margin-top: 10vw">
                <button type="submit"
                        style="width: 70vw;height:10vw; background-color: #3C64D3;color: white;
                        border: 0px solid;border-radius: 2vw">
                    修改
                </button>
            </div>
        </div>
    </form>
@endsection