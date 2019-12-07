@extends('yonghubase')

@section('content')
    <style>
        .swiper-container {
            width: 100%;
            height: 60vw;
        }
        .swiper-slide {
            width: 100%;
            height: 60vw;
        }
        .swiper-slide img{
            width: 100%;
            height: 60vw;
        }
    </style>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/uploads/banner.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/uploads/banner1.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/uploads/banner2.jpg">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div style="margin-top: 5vw">
        <h4 style="color: #3C64D3;margin-left: 5vw">智能产品</h4>
        <img style="margin-top: 5vw;width: 100%;height: 35vw" src="/uploads/ad.jpg">
    </div>

    <div style="margin-top: 5vw">
        <h4 style="color: #3C64D3;margin-left: 5vw;margin-bottom: 5vw">债务知识</h4>
        <div class="card-body rounded"
             style="background-color: #3C64D3;color: white;padding: 5vw">
            1、债务知识债务知识债务知识债务知识<br>
            2、债务知识债务知识债务知识<br>
            3、债务知识债务知识债务知识<br>
            4、债务知识债务知识债务知识<br>
            5、债务知识债务知识债务知识<br>
            6、债务知识债务知识债务知识<br>
            7、债务知识债务知识债务知识<br>
        </div>
    </div>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
@endsection