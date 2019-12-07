@extends('yonghubase')

@section('content')
    <style>
        .plan{
            background-color: #3C64D3;
            border-radius: 3vw;
            margin: 10vw 10vw 5vw 10vw;
            height: 16vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .plan1{
            background-color: #3C64D3;
            border-radius: 2vw;
            margin: 2vw;
            height: 16vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .plan1 p{
            text-align: center;
            color: white;
        }
        .juzhong{
            margin-bottom: 3vw;
            display: flex;
            align-items: center;
        }
    </style>
    <div class="weui-flex">
        <div class="weui-flex__item">
            <div class="placeholder plan">
                <a href="{{Route('mobile.crowdfunding.index')}}">
                    <h3 style="color: white">众筹计划</h3>
                </a>
            </div>
        </div>
        <div class="weui-flex__item">
            <div class="placeholder plan">
                <a href="{{Route('mobile.crowdfunding.repayment')}}">
                    <h3 style="color: white">还款计划</h3>
                </a>
            </div>
        </div>
    </div>
    <div class="weui-flex">
        <div class="weui-flex__item">
            <div class="placeholder plan1">
                <a href="#">
                    <p>+</p>
                    <p>房贷</p>
                </a>
            </div>
        </div>
        <div class="weui-flex__item">
            <div class="placeholder plan1">
                <a href="#">
                    <p>+</p>
                    <p>房贷</p>
                </a>
            </div>
        </div>
        <div class="weui-flex__item">
            <div class="placeholder plan1">
                <a href="#">
                    <p>+</p>
                    <p>房贷</p>
                </a>
            </div>
        </div>
        <div class="weui-flex__item">
            <div class="placeholder plan1">
                <a href="#">
                    <p>+</p>
                    <p>房贷</p>
                </a>
            </div>
        </div>
        <div class="weui-flex__item">
            <div class="placeholder plan1">
                <a href="#">
                    <p>+</p>
                    <p>房贷</p>
                </a>
            </div>
        </div>
    </div>
    <h4 style="color: #3C64D3;margin: 5vw auto 5vw 3vw">计划：</h4>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center">V1</div>
        <div class="weui-flex__item">
            <div class="weui-progress" style="">
                <div class="weui-progress__bar" style="height: 3vw">
                    <div class="weui-progress__inner-bar js_progress"
                         style="width: 10%;height: 3vw;background-color: #3C64D3"></div>
                </div>
            </div>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/600</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center">V2</div>
        <div class="weui-flex__item">
            <div class="weui-progress" style="">
                <div class="weui-progress__bar" style="height: 3vw">
                    <div class="weui-progress__inner-bar js_progress"
                         style="width: 0%;height: 3vw;background-color: #3C64D3"></div>
                </div>
            </div>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/1800</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center">V3</div>
        <div class="weui-flex__item">
            <div class="weui-progress" style="">
                <div class="weui-progress__bar" style="height: 3vw">
                    <div class="weui-progress__inner-bar js_progress"
                         style="width: 0%;height: 3vw;background-color: #3C64D3"></div>
                </div>
            </div>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/5400</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center">V4</div>
        <div class="weui-flex__item">
            <div class="weui-progress" style="">
                <div class="weui-progress__bar" style="height: 3vw">
                    <div class="weui-progress__inner-bar js_progress"
                         style="width: 0%;height: 3vw;background-color: #3C64D3"></div>
                </div>
            </div>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/16200</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center">V5</div>
        <div class="weui-flex__item">
            <div class="weui-progress" style="">
                <div class="weui-progress__bar" style="height: 3vw">
                    <div class="weui-progress__inner-bar js_progress"
                         style="width: 0%;height: 3vw;background-color: #3C64D3"></div>
                </div>
            </div>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/48600</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center">V6</div>
        <div class="weui-flex__item">
            <div class="weui-progress" style="">
                <div class="weui-progress__bar" style="height: 3vw">
                    <div class="weui-progress__inner-bar js_progress"
                         style="width: 0%;height: 3vw;background-color: #3C64D3"></div>
                </div>
            </div>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/145800</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center">V7</div>
        <div class="weui-flex__item">
            <div class="weui-progress" style="">
                <div class="weui-progress__bar" style="height: 3vw">
                    <div class="weui-progress__inner-bar js_progress"
                         style="width: 0%;height: 3vw;background-color: #3C64D3"></div>
                </div>
            </div>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/437400</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center">V8</div>
        <div class="weui-flex__item">
            <div class="weui-progress" style="">
                <div class="weui-progress__bar" style="height: 3vw">
                    <div class="weui-progress__inner-bar js_progress"
                         style="width: 0%;height: 3vw;background-color: #3C64D3"></div>
                </div>
            </div>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/1312200</div>
    </div>

@endsection