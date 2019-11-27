@extends('yonghubase')

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top: 3vw">
        <!-- 轮播图片 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="figure-img img-fluid rounded" src="/uploads/banner.jpg">
            </div>
            <div class="carousel-item">
                <img class="figure-img img-fluid rounded" src="/uploads/banner1.jpg">
            </div>
            <div class="carousel-item">
                <img class="figure-img img-fluid rounded" src="/uploads/banner2.jpg">
            </div>
        </div>
        <!-- 左右切换按钮 -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="" style="margin-top: 5vw">
        <h4 style="color: #3C64D3">智能产品</h4>
        <img class=" figure-img img-fluid rounded" src="/uploads/ad.jpg">
    </div>

    <h4 style="color: #3C64D3">债务知识</h4>
    <div class="card" style="margin-bottom: 35px">
        <div class="card-body rounded" style="background-color: #3C64D3;color: white">
            1、债务知识债务知识债务知识债务知识<br>
            2、债务知识债务知识债务知识<br>
            3、债务知识债务知识债务知识<br>
            4、债务知识债务知识债务知识<br>
        </div>
    </div>

@endsection