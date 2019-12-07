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
            margin: auto 2vw 3vw 2vw;
            border: 1px solid;
            border-color: #3C64D3;
            border-radius: 2vw;
            display: flex;
            align-items: center;
        }
        .juzhong div{
            margin-top: 2vw;
            margin-bottom: 2vw;
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
                    <p>还款金额</p>
                    <p>￥3600</p>
                </a>
            </div>
        </div>
        <div class="weui-flex__item">
            <div class="placeholder plan1">
                <a href="#">
                    <p>剩余金额</p>
                    <p>￥96400</p>
                </a>
            </div>
        </div>
        <div class="weui-flex__item">
            <div class="placeholder plan1">
                <a href="#">
                    <p>众筹总金额</p>
                    <p>￥13200</p>
                </a>
            </div>
        </div>
    </div>
    <h4 style="color: #3C64D3;margin: 5vw auto 5vw 3vw">计划：</h4>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center;">车贷</div>
        <div class="weui-flex__item">
            <a href="javascript:;" class="weui-btn weui-btn_primary">详情</a>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/300000</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center;">房贷</div>
        <div class="weui-flex__item">
            <a href="javascript:;" class="weui-btn weui-btn_primary">详情</a>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/1000000</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center;">借贷</div>
        <div class="weui-flex__item">
            <a href="javascript:;" class="weui-btn weui-btn_primary">详情</a>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/0</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center;">信用卡</div>
        <div class="weui-flex__item">
            <a href="javascript:;" class="weui-btn weui-btn_primary">详情</a>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/26000</div>
    </div>
    <div class="weui-flex juzhong">
        <div class="placeholder" style="width: 20vw;text-align: center;">其它</div>
        <div class="weui-flex__item">
            <a href="javascript:;" class="weui-btn weui-btn_primary">详情</a>
        </div>
        <div class="placeholder" style="width: 25vw;padding-left: 3vw">0/0</div>
    </div>

@endsection