@extends('yonghubase')

@section('content')
    <div class="d-flex justify-content-around" style="margin-top: 5vw;height: 18vw;">
        <div class="rounded" style="background-color: #3C64D3;width: 30vw">
            <a class="w-100 h-100 d-flex align-items-center justify-content-center"
               href="{{Route('mobile.crowdfunding.index')}}">
                <h5 style="color: white">众筹计划</h5>
            </a>
        </div>
        <div class="rounded" style="background-color: #3C64D3;width: 30vw">
            <a class="w-100 h-100 d-flex align-items-center justify-content-center"
               href="{{Route('mobile.crowdfunding.repayment')}}">
                <h5 style="color: white">还款计划</h5>
            </a>
        </div>
    </div>

    <div class="row" style="margin-top: 10vw;height: 15vw">
        <div class="col" style="width: 33vw">
            <div class="d-flex align-items-center justify-content-start">
                <h5><b>还款金额</b></h5>
            </div>
            <div class="d-flex align-items-center justify-content-start">
                <h5>￥3600</h5>
            </div>
        </div>
        <div class="col" style="width: 33vw">
            <div class="d-flex align-items-center justify-content-center">
                <h5><b>剩余金额</b></h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h5>￥96400</h5>
            </div>
        </div>
        <div class="col" style="width: 33vw">
            <div class="d-flex align-items-center justify-content-end">
                <h5><b>众筹总金额</b></h5>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                <h5>￥13200</h5>
            </div>
        </div>
    </div>
    <h4 class="rounded" style="margin-top: 5vw"><b>计划：</b></h4>
    <div class="rounded border border-dark" style="margin-top: 5vw;margin-bottom: 35px;padding: 5vw">
        <div class="row d-flex justify-content-between">
            <div class="col">车贷</div>
            <div class="col btn btn-success">
                <a href="#" style="color: white">详情</a>
            </div>
            <div class="col text-right">0/300000</div>
        </div>
        <div class="row d-flex justify-content-between" style="margin-top:5vw">
            <div class="col">房贷</div>
            <div class="col btn btn-success">
                <a href="#" style="color: white">详情</a>
            </div>
            <div class="col text-right">0/1000000</div>
        </div>
        <div class="row d-flex justify-content-between" style="margin-top:5vw">
            <div class="col">借款</div>
            <div class="col btn btn-success">
                <a href="#" style="color: white">详情</a>
            </div>
            <div class="col text-right">0/0</div>
        </div>
        <div class="row d-flex justify-content-between" style="margin-top:5vw">
            <div class="col">信用卡</div>
            <div class="col btn btn-success">
                <a href="#" style="color: white">详情</a>
            </div>
            <div class="col text-right">0/26000</div>
        </div>
        <div class="row d-flex justify-content-between" style="margin-top:5vw">
            <div class="col">其它</div>
            <div class="col btn btn-success">
                <a href="#" style="color: white">详情</a>
            </div>
            <div class="col text-right">0/0</div>
        </div>
    </div>

@endsection