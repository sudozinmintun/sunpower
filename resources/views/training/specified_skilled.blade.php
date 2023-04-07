@extends('layouts.main')
@section('title', '-Specified Skilled Trainee')
@section('content')

    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="{{ asset('data/gallery.JPG') }}">
        <div class="container pt-90 pb-90">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">
                            @if (session('key') == 'jp')
                                特定技能実習生
                            @else
                                Specified Skilled Trainee
                            @endif
                        </h2>
                        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section data-tm-bg-color="#f5f5f5">
        <div class="container pt-30 pb-30">
            <div class="row">
                <div class="col-md-8">
                    <p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_shop_boxed_wrapper" data-alias="shop-home" data-source="gallery"
                        style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                        <rs-module id="rev_slider_shop_boxed" style="display:none;" data-version="6.0.8">
                            <rs-slides>
                                <rs-slide data-key="rs-15" data-title="Slide 2" data-thumb="{{ asset('data/a9.webp') }}"
                                    data-anim="ei:d;eo:d;s:d;r:0;t:slotslide-horizontal;sl:d;">
                                    <img src="{{ asset('data/a9.webp') }}" title="1tp5" width="1920" height="1080"
                                        data-bg="p:center bottom;" data-parallax="off" class="rev-slidebg" data-no-retina>
                                    <rs-layer id="slider-3-slide-15-layer-14" data-type="text" class="text-theme-colored1"
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:50px,50px,40px,2px;yo:200px,224px,175px,305px;"
                                        data-text="w:normal;s:26,20,18,17;l:34,36,30,30;fw:600;a:left,left,left,center;"
                                        data-dim="w:auto,auto,auto,264px;h:42px,42px,38px,auto;" data-frame_0="y:bottom;"
                                        data-frame_1="st:1260;sp:1000;sR:1260;"
                                        data-frame_999="x:-50,-38,-28,-17;o:0;st:w;sp:1500;sR:6740;" style="z-index:14;">
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-19" data-type="text" data-color="#333333"
                                        data-rsp_ch="on" data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:246px,270px,210px,345px;"
                                        data-text="w:normal;s:78,52,48,42;l:91,64,56,48;fw:700;a:left,left,left,center;"
                                        data-dim="w:652px,auto,auto,auto;h:189px,151px,126px,112px;"
                                        data-frame_0="y:bottom;" data-frame_1="st:1700;sp:1000;sR:1700;"
                                        data-frame_999="o:0;st:w;sp:1500;sR:6300;" style="z-index:13;">
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-20" class="rev-btn bg-theme-colored1"
                                        data-type="button" data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:500px,454px,405px,525px;"
                                        data-text="w:normal;s:20,15,14,14;f:left,none,none,none;c:both,none,none,none;l:40,30,22,16;fw:500;a:left,left,left,center;"
                                        data-flcr="f:left,none,none,none;c:both,none,none,none;"
                                        data-dim="minh:0px,none,none,none;"
                                        data-padding="t:10,8,10,12;r:60,46,46,46;b:10,8,10,12;l:60,46,46,46;"
                                        data-border="bor:5px,5px,5px,5px;" data-frame_0="y:bottom;"
                                        data-frame_1="st:2500;sp:1000;sR:2500;" data-frame_999="o:0;st:w;sp:1500;sR:5500;"
                                        data-frame_hover="bgc:#007aff;bor:5px,5px,5px,5px;bri:120%;" style="z-index:15;">
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-22" data-type="shape" data-rsp_ch="on"
                                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;" data-dim="w:100%;h:100%;"
                                        data-basealign="slide" data-frame_0="x:-100%;" data-frame_0_mask="u:t;"
                                        data-frame_1="sp:2000;" data-frame_1_mask="u:t;"
                                        data-frame_999="x:-100%;o:0;st:w;sp:2000;" data-frame_999_mask="u:t;"
                                        style="z-index:7;background-color:rgba(255,255,255,0.3);">
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-31" class="rs-pxl-2" data-type="image"
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:755px,577px,417px,-2px;yo:105px,184px,125px,95px;"
                                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                        data-dim="w:588px,414px,368px,205px;h:442px,314px,268px,155px;"
                                        data-frame_0="y:top;" data-frame_1="st:1350;sp:1000;sR:1350;"
                                        data-frame_999="y:top;o:0;st:w;sp:2000;sR:6650;" style="z-index:8;"><img
                                            src="" alt="drill1" data-no-retina>
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-32" data-type="text" data-color="#8e8e8e"
                                        data-rsp_ch="on" data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:445px,418px,340px,455px;"
                                        data-text="w:normal;s:20,18,16,15;l:43,32,24,24;fw:600;a:left,left,left,center;"
                                        data-dim="w:auto,auto,221px,auto;h:auto,auto,auto,35px;" data-frame_0="y:bottom;"
                                        data-frame_1="st:2120;sp:1000;sR:2120;"
                                        data-frame_999="x:-50,-38,-28,-17;o:0;st:w;sp:1500;sR:5880;" style="z-index:12;">
                                    </rs-layer>
                                </rs-slide>


                                <rs-slide data-key="rs-15" data-title="Slide 2" data-thumb="{{ asset('data/a10.jpg') }}"
                                    data-anim="ei:d;eo:d;s:d;r:0;t:slotslide-horizontal;sl:d;">
                                    <img src="{{ asset('data/a10.jpg') }}" title="1tp5" width="1920" height="1080"
                                        data-bg="p:center bottom;" data-parallax="off" class="rev-slidebg"
                                        data-no-retina>
                                    <rs-layer id="slider-3-slide-15-layer-14" data-type="text"
                                        class="text-theme-colored1" data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:50px,50px,40px,2px;yo:200px,224px,175px,305px;"
                                        data-text="w:normal;s:26,20,18,17;l:34,36,30,30;fw:600;a:left,left,left,center;"
                                        data-dim="w:auto,auto,auto,264px;h:42px,42px,38px,auto;" data-frame_0="y:bottom;"
                                        data-frame_1="st:1260;sp:1000;sR:1260;"
                                        data-frame_999="x:-50,-38,-28,-17;o:0;st:w;sp:1500;sR:6740;" style="z-index:14;">
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-19" data-type="text" data-color="#333333"
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:246px,270px,210px,345px;"
                                        data-text="w:normal;s:78,52,48,42;l:91,64,56,48;fw:700;a:left,left,left,center;"
                                        data-dim="w:652px,auto,auto,auto;h:189px,151px,126px,112px;"
                                        data-frame_0="y:bottom;" data-frame_1="st:1700;sp:1000;sR:1700;"
                                        data-frame_999="o:0;st:w;sp:1500;sR:6300;" style="z-index:13;">
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-20" class="rev-btn bg-theme-colored1"
                                        data-type="button" data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:500px,454px,405px,525px;"
                                        data-text="w:normal;s:20,15,14,14;f:left,none,none,none;c:both,none,none,none;l:40,30,22,16;fw:500;a:left,left,left,center;"
                                        data-flcr="f:left,none,none,none;c:both,none,none,none;"
                                        data-dim="minh:0px,none,none,none;"
                                        data-padding="t:10,8,10,12;r:60,46,46,46;b:10,8,10,12;l:60,46,46,46;"
                                        data-border="bor:5px,5px,5px,5px;" data-frame_0="y:bottom;"
                                        data-frame_1="st:2500;sp:1000;sR:2500;" data-frame_999="o:0;st:w;sp:1500;sR:5500;"
                                        data-frame_hover="bgc:#007aff;bor:5px,5px,5px,5px;bri:120%;" style="z-index:15;">
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-22" data-type="shape" data-rsp_ch="on"
                                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;" data-dim="w:100%;h:100%;"
                                        data-basealign="slide" data-frame_0="x:-100%;" data-frame_0_mask="u:t;"
                                        data-frame_1="sp:2000;" data-frame_1_mask="u:t;"
                                        data-frame_999="x:-100%;o:0;st:w;sp:2000;" data-frame_999_mask="u:t;"
                                        style="z-index:7;background-color:rgba(255,255,255,0.3);">
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-31" class="rs-pxl-2" data-type="image"
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:755px,577px,417px,-2px;yo:105px,184px,125px,95px;"
                                        data-text="w:normal;s:20,15,11,6;l:0,19,14,8;"
                                        data-dim="w:588px,414px,368px,205px;h:442px,314px,268px,155px;"
                                        data-frame_0="y:top;" data-frame_1="st:1350;sp:1000;sR:1350;"
                                        data-frame_999="y:top;o:0;st:w;sp:2000;sR:6650;" style="z-index:8;"><img
                                            src="" alt="drill1" data-no-retina>
                                    </rs-layer>
                                    <rs-layer id="slider-3-slide-15-layer-32" data-type="text" data-color="#8e8e8e"
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:445px,418px,340px,455px;"
                                        data-text="w:normal;s:20,18,16,15;l:43,32,24,24;fw:600;a:left,left,left,center;"
                                        data-dim="w:auto,auto,221px,auto;h:auto,auto,auto,35px;" data-frame_0="y:bottom;"
                                        data-frame_1="st:2120;sp:1000;sR:2120;"
                                        data-frame_999="x:-50,-38,-28,-17;o:0;st:w;sp:1500;sR:5880;" style="z-index:12;">
                                    </rs-layer>
                                </rs-slide>

                            </rs-slides>
                            </rs-slides>
                            <rs-progress class="rs-bottom" style="height: 5px; background: rgba(199,199,199,0.5);">
                            </rs-progress>
                        </rs-module>
                    </rs-module-wrap>
                </div>

                <div class="col-md-4">
                    <div class="tm-sc tm-sc-info-banner-advanced text-left mb-30">
                        <div class="info-banner-inner">
                            <div class="banner-image-wrapper">
                                <img src="{{ asset('data/tr1.jpeg') }}" alt="Image"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                <div class="banner-overlay"></div>
                            </div>
                            <div class="info-banner-text-holder-wrapper">
                                <div class="info-banner-text-holder">
                                    <div class="info-banner-text-holder-inner">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm-sc tm-sc-info-banner-advanced text-left">
                        <div class="info-banner-inner">
                            <div class="banner-image-wrapper">
                                <img src="{{ asset('data/tr2.jpeg') }}" alt="Image"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                <div class="banner-overlay"></div>
                            </div>
                            <div class="info-banner-text-holder-wrapper">
                                <div class="info-banner-text-holder">
                                    <div class="info-banner-text-holder-inner">
                                        <h2 class="text-theme-colored1"></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
