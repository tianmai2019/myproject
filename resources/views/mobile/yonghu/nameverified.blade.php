@extends('yonghubase')
@section('content')
    <style>
        .identityz{
            width: 80vw;
            height:45vw;
            margin: 5vw auto 10vw 5vw;
            background-size: 100% 100%;
            background-image: url("/uploads/img/zm.jpg");
        }
        .identityf{
            width: 80vw;
            height:45vw;
            margin: auto auto 10vw 5vw;
            background-size: 100% 100%;
            background-image: url("/uploads/img/fm.jpg");
        }
    </style>
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
    <form method="POST" action="{{route('mobile.yonghu.infoupdate')}}">
        {{csrf_field()}}
        <div class="weui-cells weui-cells_form" style="padding-left: 5vw">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label" style="color: #3C64D3">姓名：</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="realname" value=""/>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label" style="color: #3C64D3">身份证号：</label></div>
                <div class="weui-cell__bd">
                    <input class="weui-input" type="text" name="identitycard" value=""/>
                </div>
            </div>

            <div class="weui-uploader__input-box identityz" id="identitypegfront">
                <input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple/>
            </div>
            <div class="weui-uploader__input-box identityf" id="identitypegverso">
                <input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple/>
            </div>

            <div style="text-align: center;">
                <button type="submit"
                        style="width: 70vw;height:10vw; background-color: #3C64D3;color: white;
                        border: 0px solid;border-radius: 2vw">
                    修改
                </button>
            </div>
        </div>
    </form>


    <script type="text/javascript">
        $(function(){
            var tmpl = '<li class="weui-uploader__file" style="background-image:url(#url#)"></li>',
                $gallery = $("#gallery"), $galleryImg = $("#galleryImg"),
                $uploaderInput = $("#uploaderInput"),
                $uploaderFiles = $("#uploaderFiles");

            $uploaderInput.on("change", function(e){
                var src, url = window.URL || window.webkitURL || window.mozURL, files = e.target.files;
                for (var i = 0, len = files.length; i < len; ++i) {
                    var file = files[i];
                    if (url) {
                        src = url.createObjectURL(file);
                    } else {
                        src = e.target.result;
                    }
                    $uploaderFiles.append($(tmpl.replace('#url#', src)));
                }
            });
            $uploaderFiles.on("click", "li", function(){
                $galleryImg.attr("style", this.getAttribute("style"));
                $gallery.fadeIn(100);
            });
            $gallery.on("click", function(){
                $gallery.fadeOut(100);
            });
        });
    </script>
@endsection