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

    <div class="d-flex justify-content-around" style="margin-top: 5vw;height: 15vw">
        <div class="d-flex flex-column rounded" style="background-color: #3C64D3;width: 15vw">
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">+</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">房贷</h5>
            </div>
        </div>
        <div class="d-flex flex-column rounded" style="background-color: #3C64D3;width: 15vw">
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">+</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">车贷</h5>
            </div>
        </div>
        <div class="d-flex flex-column rounded" style="background-color: #3C64D3;width: 15vw">
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">+</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">借款</h5>
            </div>
        </div>
        <div class="d-flex flex-column rounded" style="background-color: #3C64D3;width: 15vw">
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">+</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">信用卡</h5>
            </div>
        </div>
        <div class="d-flex flex-column rounded" style="background-color: #3C64D3;width: 15vw">
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">+</h5>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <h5 style="color: white">其它</h5>
            </div>
        </div>
    </div>
    <h4 class="rounded" style="color: #3C64D3;margin-top: 10vw">计划：</h4>
    <div class="rounded border border-dark" style="margin-bottom: 35px;padding: 5px">
        <div class="row" style="background: url('/uploads/img/progressk.jpg') no-repeat;background-size:90% 100%;margin-top: 5vw">
            <div class="col">V1</div>
            <div class="col text-right">0/600</div>
        </div>
        <div class="row" style="background: url('/uploads/img/progressm.jpg') no-repeat;background-size:90% 100%;margin-top: 5vw">
            <div class="col">V2</div>
            <div class="col text-right">0/1800</div>
        </div>
        <div class="row" style="background: url('/uploads/img/progressm.jpg') no-repeat;background-size:90% 100%;margin-top: 5vw">
            <div class="col">V3</div>
            <div class="col text-right">0/5400</div>
        </div>
        <div class="row" style="background: url('/uploads/img/progressm.jpg') no-repeat;background-size:90% 100%;margin-top: 5vw">
            <div class="col">V4</div>
            <div class="col text-right">0/16200</div>
        </div>
        <div class="row" style="background: url('/uploads/img/progressm.jpg') no-repeat;background-size:90% 100%;margin-top: 5vw">
            <div class="col">V5</div>
            <div class="col text-right">0/48600</div>
        </div>
        <div class="row" style="background: url('/uploads/img/progressm.jpg') no-repeat;background-size:90% 100%;margin-top: 5vw">
            <div class="col">V6</div>
            <div class="col text-right">0/145800</div>
        </div>
        <div class="row" style="background: url('/uploads/img/progressm.jpg') no-repeat;background-size:90% 100%;margin-top: 5vw">
            <div class="col">V7</div>
            <div class="col text-right">0/437400</div>
        </div>
        <div class="row" style="background: url('/uploads/img/progressm.jpg') no-repeat;background-size:90% 100%;margin-top: 5vw">
            <div class="col">V8</div>
            <div class="col text-right">0/1312200</div>
        </div>
    </div>

@endsection