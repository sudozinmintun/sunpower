@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <style>
        .btn-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
        }

        .btn-box .btn-call {
            background: #065327 !important;
            color: #fff;
            font-weight: 600;
            border-radius: 5px;
            padding: 5px 10px;
        }
    </style>

    @include('layouts.book')


    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="btn-box">
            <a class="btn btn-call" href="https://api.whatsapp.com/send/?phone=%2B918527270999&amp;text&amp;app_absent=0">
                <img src="https://superbattestation.com/images/whatsapp.gif" width="20" height="20" alt="whatsapp">
                Whatsapp us +959 269 101 211</a>
            <a href="tel:+959 269 101 211" class="btn btn-call" style="margin-left: 10px"><i class="fa fa-phone"
                    aria-hidden="true"></i>&nbsp;Click To Call: +959 269 101 211</a>
        </div>
    </div>


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
                                        data-rsp_ch="on"
                                        data-xy="x:l,l,l,c;xo:50px,50px,40px,0;yo:445px,418px,340px,455px;"
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
                                <img src="{{ asset('data/10.jpg') }}" alt="Image">
                                <div class="banner-overlay"></div>
                            </div>
                            <div class="info-banner-text-holder-wrapper">
                                <div class="info-banner-text-holder">
                                    <div class="info-banner-text-holder-inner">
                                        <h2 class="text-theme-colored1">
                                            <a href="{{ route('about.index') }}">
                                                Why Choose Us
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tm-sc tm-sc-info-banner-advanced text-left">
                        <div class="info-banner-inner">
                            <div class="banner-image-wrapper">
                                <img src="{{ asset('data/m3.png') }}" alt="Image">
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


    <section data-tm-bg-color="#f5f5f5">
        <div class="container pt-30 pb-30">
            <div class="row">

                <div class="col-md-3">
                    <div class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive mb-lg-30">
                        <div class="icon-box-wrapper">
                            <a class="icon">
                                <img src="{{ asset('assets/images/shop/shop-money-back-guarantee.png') }}" alt="Image">
                            </a>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">
                                    Application & Recruitment
                                </h5>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive mb-lg-30">
                        <div class="icon-box-wrapper">
                            <a class="icon">
                                <img src="{{ asset('assets/images/shop/shop-headphones.png') }}" alt="Image">
                            </a>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Support 24/7</h5>
                                <div class="content">
                                    <p>Call +959 269 101 211</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive mb-lg-30">
                        <div class="icon-box-wrapper">
                            <a class="icon">
                                <img src="{{ asset('assets/images/shop/shop-money-back-guarantee.png') }}" alt="Image">
                            </a>
                            <div class="icon-text">
                                <a href="{{ route('contact.index') }}">
                                    <h5 class="icon-box-title mt-0">
                                        Candidates Services
                                    </h5>
                                    <div class="content">
                                        <p>Let's join us.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="tm-sc-icon-box icon-box icon-left iconbox-centered-in-responsive mb-lg-30">
                        <div class="icon-box-wrapper">
                            <a class="icon">
                                <img src="{{ asset('assets/images/shop/shop-purchase.png') }}" alt="Image">
                            </a>
                            <div class="icon-text">
                                <a href="{{ route('news.index') }}">
                                    <h5 class="icon-box-title mt-0">
                                        Press Release
                                    </h5>
                                    <div class="content">
                                        <p>Fastest News Now.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Training -->
    <section data-tm-bg-img="{{ asset('data/bg3.jpg') }}">
        <div class="container">
            <div class="section-title text-center mb-30">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ABOUT<span class="text-theme-colored1">GA TRAINING</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="product-gallery-holder-1111"
                        class="isotope-layout grid-4 gutter-15 clearfix lightgallery-lightbox">
                        <div class="isotope-layout-inner">
                            <!-- Isotope Item Start -->
                            <div class="isotope-item cat1 cat3">
                                <div class="isotope-item-inner">
                                    <div class="product">
                                        <div class="product-header">
                                            <div class="thumb image-swap">
                                                <a href="">
                                                    <img src="{{ asset('data/10.jpg') }}"
                                                        class="product-main-image img-responsive img-fullwidth"
                                                        width="300" height="300" alt="product">
                                                </a>
                                                <a href="">
                                                    <img src="{{ asset('data/10.jpg') }}"
                                                        class="product-hover-image img-responsive img-fullwidth"
                                                        alt="product">
                                                </a>
                                            </div>
                                            <div class="product-button-holder">
                                                <ul class="shop-icons">
                                                    <li class="item">
                                                        <a href="{{ asset('data/10.jpg') }}" class="button btn-quickview"
                                                            title="Product quick view"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="product-details">
                                            <h5 class="product-title">
                                                <a href="javascript:void(0)" class="btn btn-plain-text-with-arrow btn-sm">
                                                    Why Choose Myanmar
                                                </a>
                                            </h5>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="isotope-item cat1 cat3">
                                <div class="isotope-item-inner">
                                    <div class="product">
                                        <div class="product-header">
                                            <div class="thumb image-swap">
                                                <img src="{{ asset('data/m4.jpg') }}"
                                                    class="product-main-image img-responsive img-fullwidth" width="300"
                                                    height="300" alt="product">
                                                <img src="{{ asset('data/m4.jpg') }}"
                                                    class="product-hover-image img-responsive img-fullwidth"
                                                    alt="product">
                                            </div>
                                            <div class="product-button-holder">
                                                <ul class="shop-icons">
                                                    <li class="item">
                                                        <a href="#" class="button btn-quickview"
                                                            title="Product quick view">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-details">
                                            <h5 class="product-title">
                                                <a target="_self" href="{{ route('education.index') }}"
                                                    class="btn btn-plain-text-with-arrow btn-sm">
                                                    Ga Education
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="isotope-item cat1 cat3">
                                <div class="isotope-item-inner">
                                    <div class="product">
                                        <div class="product-header">
                                            <div class="thumb image-swap">
                                                <a href=""><img src="{{ asset('data/m7.jpg') }}"
                                                        class="product-main-image img-responsive img-fullwidth"
                                                        width="300" height="300" alt="product"></a>
                                                <a href=""><img src="{{ asset('data/m7.jpg') }}"
                                                        class="product-hover-image img-responsive img-fullwidth"
                                                        alt="product"></a>
                                            </div>
                                            <div class="product-button-holder">
                                                <ul class="shop-icons">
                                                    <li class="item"><a href="#" class="button btn-quickview"
                                                            title="Product quick view"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-details">
                                            <h5 class="product-title">
                                                <a target="_self" href="{{ route('training.index') }}"
                                                    class="btn btn-plain-text-with-arrow btn-sm">
                                                    Technical Intern Trainee
                                                </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="isotope-item cat1 cat3">
                                <div class="isotope-item-inner">
                                    <div class="product">
                                        <div class="product-header">
                                            <div class="thumb image-swap">
                                                <a href=""><img src="{{ asset('data/m6.jpg') }}"
                                                        class="product-main-image img-responsive img-fullwidth"
                                                        width="300" height="300" alt="product"></a>
                                                <a href=""><img src="{{ asset('data/m6.jpg') }}"
                                                        class="product-hover-image img-responsive img-fullwidth"
                                                        alt="product"></a>
                                            </div>
                                            <div class="product-button-holder">
                                                <ul class="shop-icons">
                                                    <li class="item"><a href="#" class="button btn-quickview"
                                                            title="Product quick view"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-details">
                                            <h5 class="product-title">
                                                <a target="_self" href="{{ route('specified_skilled') }}"
                                                    class="btn btn-plain-text-with-arrow btn-sm">
                                                    Specified Skill
                                                </a>
                                            </h5>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="divider bg-img-cover bg-img-center layer-overlay overlay-theme-colored2-7"
        data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}">
        <div class="container pt-50 pb-50">
            <div class="row">
                <div class="col-sm-12 col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="funfact-item text-center mb-md-30">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-12">
                                    <h5 class="title">
                                        ဂျပန်နိုင်ငံလုပ်ငန်းခွင်တွင်းသို့ရောက်ရှိနေသောမြန်မာလူငယ်များ
                                    </h5>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <a href="{{ route('contact.index') }}"
                                        class="btn btn-xs btn-flat btn-theme-colored1 btn-outline-light">
                                        စာရင်းပေးသွင်းရန်
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-img-cover bg-img-center" data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}">
        <div class="container pb-md-120" data-tm-padding-bottom="205px">
            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <h2 class="title">Our <span class="text-theme-colored3">Features</span></h2>
                                <p>A variety of teaching methods of GA Training.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-sc-departments tm-sc-departments-tab">
                            <ul class="nav nav-tabs">
                                <li class="bg-theme-colored1 active"> <a href="#tab-music-tabs" class="active show"
                                        data-bs-toggle="tab">
                                        <i class="fab fa-renren"></i>
                                        <h3>01 </h3>
                                        <span>Our Native Teachers teach you real Japanese</span>
                                    </a>
                                </li>

                                <li class="bg-theme-colored2">
                                    <a href="#tab-painting-tabs" class="" data-bs-toggle="tab">
                                        <i class="fab fa-renren"></i>
                                        <h3>02 </h3>
                                        <span>Why Shadowing Technique is very Effctive</span>
                                    </a>
                                </li>
                                <li class="bg-theme-colored3">
                                    <a href="#tab-painting-tabs" class="" data-bs-toggle="tab">
                                        <i class="fab fa-renren"></i>
                                        <h3>03 </h3>

                                        <span>Teaching useful expressions focusing on situations..</span>
                                    </a>
                                </li>
                                <li class="bg-theme-colored4">
                                    <a href="#tab-sports-tabs" class="" data-bs-toggle="tab">
                                        <i class="fab fa-renren"></i>
                                        <h3>04 </h3>
                                        <span>Prioritise student speaking time in class</span>
                                    </a>
                                </li>
                                <li class="bg-theme-colored1">
                                    <a href="#tab-sports-tabs" class="" data-bs-toggle="tab">
                                        <i class="fab fa-renren"></i>
                                        <h3>05 </h3>
                                        <span>Join Now!</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active show" id="tab-music-tabs">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="tab-left-part mb-lg-40">
                                                <h3 class="title mb-20 text-theme-colored1">Our Native Teachers teach you
                                                    real Japanese</h3>
                                                <p class="lead">
                                                    GA Japanese Language School's Unique GA Teaching Method emphasises on
                                                    the speaking component more so than the other.
                                                </p>
                                                <p>
                                                    This unique teaching style is not available in many other Japanese
                                                    language schools in Myanmar, which use traditional ways of teaching that
                                                    limit progress.
                                                </p>
                                                <div class="row mb-20">
                                                    <div class="col-sm-6">
                                                        <div class="tm-sc-unordered-list list-style">
                                                            <ul class="list-unstyled text-black">
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Qualified Teacher</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Love & Care</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Conventional Style</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="tm-sc-unordered-list list-style">
                                                            <ul class="list-unstyled text-black">
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Strategi Location </li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Active Learning</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Transportation</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-contact d-flex flex-column flex-md-row">
                                                    <a class="btn btn-sm btn-dark btn-theme-colored1"
                                                        href="{{ route('education.index') }}">
                                                        View Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <img src="{{ asset('data/f4.webp') }}" alt=""
                                                class="w-100 mb-md-30">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-learn-tabs">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="tab-left-part mb-lg-40">
                                                <h3 class="title mb-20 text-theme-colored2">Why Shadowing Technique is very
                                                    Effctive</h3>
                                                <p class="lead">
                                                </p>
                                                In shadowing practice, you listen to a short conversation and shadow after
                                                it by immediately speaking exactly what you hear.
                                                <p>
                                                    It has proven to be a very useful method for learning languages,
                                                    including Japanese.
                                                </p>
                                                <div class="row mb-20">
                                                    <div class="col-sm-6">
                                                        <div class="tm-sc-unordered-list list-style">
                                                            <ul class="list-unstyled text-black">
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored2 me-2"></i>
                                                                    Qualified Teacher</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored2 me-2"></i>
                                                                    Love & Care</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored2 me-2"></i>
                                                                    Delicious Food</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="tm-sc-unordered-list list-style">
                                                            <ul class="list-unstyled text-black">
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored2 me-2"></i>
                                                                    Strategi Location </li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored2 me-2"></i>
                                                                    Active Learning</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored2 me-2"></i>
                                                                    Transportation</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-contact d-flex flex-column flex-md-row">
                                                    <a class="btn btn-sm btn-dark btn-theme-colored2"
                                                        href="{{ route('education.index') }}">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <img src="{{ asset('data/f1.webp') }}" alt=""
                                                class="w-100 mb-md-30">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-painting-tabs">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="tab-left-part mb-lg-40">
                                                <h3 class="title mb-20 text-theme-colored3">We teach useful expressions
                                                    focusing on situations that you are likely to be in</h3>
                                                <p class="lead">
                                                    It is of course important to learn grammar in a structured and careful
                                                    way.
                                                </p>
                                                <p>
                                                    However, we believe that is not enough to help our students to merely
                                                    speak in grammatically correct or textbook Japanese.
                                                </p>
                                                <div class="row mb-20">
                                                    <div class="col-sm-6">
                                                        <div class="tm-sc-unordered-list list-style">
                                                            <ul class="list-unstyled text-black">
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored3 me-2"></i>
                                                                    Qualified Teacher</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored3 me-2"></i>
                                                                    Love & Care</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored3 me-2"></i>
                                                                    Delicious Food</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="tm-sc-unordered-list list-style">
                                                            <ul class="list-unstyled text-black">
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored3 me-2"></i>
                                                                    Strategi Location </li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored3 me-2"></i>
                                                                    Active Learning</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored3 me-2"></i>
                                                                    Transportation</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-contact d-flex flex-column flex-md-row">
                                                    <a class="btn btn-sm btn-dark btn-theme-colored3"
                                                        href="{{ route('education.index') }}">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <img src="{{ asset('data/f2.webp') }}" alt=""
                                                class="w-100 mb-md-30">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-sports-tabs">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-7">
                                            <div class="tab-left-part mb-lg-40">
                                                <h3 class="title mb-20 text-theme-colored1">Prioritise student speaking
                                                    time in class</h3>
                                                <p class="lead">
                                                    Unknown to many, the way to master a language is to be able to speak it
                                                    well.
                                                </p>
                                                <p>
                                                    The skill of speaking, at least for the Japanese language, is the basis
                                                    of communication.
                                                </p>
                                                <div class="row mb-20">
                                                    <div class="col-sm-6">
                                                        <div class="tm-sc-unordered-list list-style">
                                                            <ul class="list-unstyled text-black">
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Qualified Teacher</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Love & Care</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Delicious Food</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="tm-sc-unordered-list list-style">
                                                            <ul class="list-unstyled text-black">
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Strategi Location </li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Active Learning</li>
                                                                <li><i
                                                                        class="icon fas fa-heart text-theme-colored1 me-2"></i>
                                                                    Transportation</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-contact d-flex flex-column flex-md-row">
                                                    <a class="btn btn-sm btn-dark btn-theme-colored1"
                                                        href="{{ route('education.index') }}">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <img src="{{ asset('data/f3.webp') }}" alt=""
                                                class="w-100 mb-md-30">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-floating-objects">
            <span class="z-index-1 bg-img-cover" data-tm-bg-img="{{ asset('images/bg/f2.png') }}" data-tm-width="100%"
                data-tm-height="143" data-tm-top="auto" data-tm-bottom="0" data-tm-left="0" data-tm-right="0"
                data-tm-opacity="-100px"></span>
        </div>
    </section>




    <section class="bg-img-cover bg-img-center">
        <div class="container pb-50">
            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <h2 class="title">
                                    Our
                                    <span class="text-theme-colored3">Courses</span>
                                </h2>
                                <p>
                                    @if (session('key') == 'jp')
                                        私たちのレッスンには、文法、語彙、会話、ライティングの学習が含まれます。すべてのレベルを完了すると、日本語のように話したり、読み書きしたりできるようになるだけでなく、また、JLPTとして知られている日本語能力試験を受けるための設備も整っています。
                                    @else
                                        Our lessons include learning of Grammar, Vocabulary, Conversation and Writing. Upon
                                        the
                                        completion of every level, not only can you start to speak, read and write like a
                                        Japanese; you will also be well-equipped to take the Japanese Language Proficiency
                                        Test,
                                        better known as JLPT.
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach ($course_schedules as $course_schedule)
                        <div class="col-md-6 col-lg-6">
                            <div class="course d-block d-xl-flex border-1px mb-30 row wow fadeInRight"
                                data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="col-xl-5">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ $course_schedule->photo ?? '' }}"
                                            alt=""
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="course-details clearfix pt-15 pb-20">
                                        <h4 class="mt-0 mb-0">
                                            <a class="text-theme-colored1" href="#">
                                                {{ $course_schedule->level ?? '' }}
                                            </a>
                                        </h4>
                                        <h6 class="mb-0">
                                            <span class="text-theme-colored1">
                                                Class Time:
                                            </span>
                                            {{ $course_schedule->course_time ?? '' }}
                                        </h6>
                                        <p class="mb-15">
                                            {{ $course_schedule->location ?? '' }}
                                        </p>
                                        <div class="course-details2-bottom">
                                            <ul>
                                                <li class="list-inline-item" style="font-size: 13px;">
                                                    Capacity <br>
                                                    {{ $course_schedule->capacity ?? '' }}
                                                </li>
                                                <li class="list-inline-item" style="font-size: 13px;">
                                                    Duration <br>
                                                    {{ $course_schedule->duration ?? '' }}
                                                </li>
                                                <li class="list-inline-item" style="font-size: 13px;">
                                                    Days<br>
                                                    {{ $course_schedule->course_day ?? '' }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study / Jobs Lists -->
    <section class="">
        <div class="container">
            <div class="tm-sc-section-title section-title text-center">
                <div class="title-wrapper">
                    <h2 class="title">Case <span class="text-theme-colored3">Study</span></h2>
                    <p>There are many variations of passages. But the majority have suffered alteration in
                        some form, by injected humour, or randomised words.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-3">
                    <div class="timeline__content"
                        style="background-color: #fff;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        color: #333;
                        display: block;
                        padding: 1.25rem;
                        height:350px;
                        background-color:#2f5597;">
                        <div class="thumb">
                            <img src="{{ asset('data/j1.jpg') }}" class="product-main-image img-responsive img-fullwidth"
                                width="400" height="400" alt="product">
                        </div>
                        <h5 style="color:white;">
                            Construction Worker
                        </h5>
                        <p style="color:white;">Location:Japan</p>
                    </div>
                </div>


                <div class="col-lg-3 col-md-3">
                    <div class="timeline__content"
                        style="background-color: #fff;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        color: #333;
                        display: block;
                        padding: 1.25rem;
                        height:350px;
                        background-color:#2f5597;">
                        <div class="thumb">
                            <img src="{{ asset('data/j2.jpg') }}" class="product-main-image img-responsive img-fullwidth"
                                width="400" height="400" alt="product" ;>
                        </div>
                        <h5 style="color:white;">
                            Manufacturing
                        </h5>
                        <p style="color:white;">
                            Location:Japan
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="timeline__content"
                        style="background-color: #fff;
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        color: #333;
                        display: block;
                        padding: 1.25rem;
                        height:350px;
                        background-color:#2f5597;">
                        <div class="thumb">
                            <img src="{{ asset('data/j4.jpg') }}" class="product-main-image img-responsive img-fullwidth"
                                width="400" height="400" alt="product" ;>
                        </div>
                        <h5 style="color:white;">
                            Kaigo
                        </h5>
                        <p style="color:white;">
                            Location:Japan
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="timeline__content"
                        style="background-color: #fff;
                      border: 1px solid #ccc;
                      border-radius: 10px;
                      color: #333;
                      display: block;
                      padding: 1.25rem;
                      height:350px;
                      background-color:#2f5597;">
                        <div class="thumb">
                            <img src="{{ asset('data/j5.jpg') }}" class="product-main-image img-responsive img-fullwidth"
                                width="400" height="400" alt="product" ;>
                        </div>
                        <h5 style="color:white;">
                            Agriculture
                        </h5>
                        <p style="color:white;">
                            Location:Japan
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section data-tm-bg-color="#f5f5f5">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="title-wrapper">
                        <h2 class="title">Our
                            <span class="text-theme-colored3">Gallery</span>
                        </h2>
                        <p>
                            @if (session('key') == 'jp')
                                ここでいくつかのアクティビティを確認しましょう。
                                <br>
                                イベント・活動・学生インタビュー
                            @else
                                WE'VE DONE LOTS OF WORK, LET’S CHECK SOME ACTIVITIES HERE.
                                <br>
                                EVENTS / ACTIVITIES / STUDENT INTERVIEW
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($galleries as $activitie)
                    @php
                        if (session('key') == 'jp') {
                            $title = $activitie->title_jp ?? '';
                        } else {
                            $title = $activitie->title_eng ?? '';
                        }
                    @endphp
                    <div class="col-md-12">
                        <div class="alert alert-dismissible alert-warning">
                            <strong>
                                @if (session('key') == 'jp')
                                    {!! $activitie->description_jp ?? '' !!}
                                @else
                                    {!! $activitie->description_eng ?? '' !!}
                                @endif
                            </strong>
                        </div>

                        <div id="product-gallery-holder-1111"
                            class="isotope-layout grid-4 gutter-15 clearfix lightgallery-lightbox">
                            <div class="isotope-layout-inner">
                                @php
                                    $values = explode(',', $activitie->gallery);
                                @endphp
                                @foreach ($values as $gallery)
                                    <div class="isotope-item cat1 cat3">
                                        <div class="isotope-item-inner">
                                            <div class="product">
                                                <div class="product-header">
                                                    <div class="thumb image-swap">
                                                        <img src="{{ $gallery }}"
                                                            class="product-main-image img-responsive img-fullwidth"
                                                            alt="product"
                                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">

                                                        <img src="{{ $gallery }}"
                                                            class="product-hover-image img-responsive img-fullwidth"
                                                            alt="product"
                                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                                    </div>
                                                    <div class="product-button-holder">
                                                        <ul class="shop-icons">
                                                            <li class="item">
                                                                <a href="{{ $gallery }}"
                                                                    class="button btn-quickview"
                                                                    title="Product quick view">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <p class="product-title">
                                                        {{ $title ?? '' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Section: Team -->
    <section class="bg-img-cover bg-img-center" data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}">
        <div class="container pb-50">
            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <h2 class="title">Our <span class="text-theme-colored3">Team Members</span></h2>
                                <p>There are many variations of passages. But the majority have suffered alteration in
                                    some form, by injected humour, or randomised words.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-sm-6 col-xl-3 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="team-member">
                                <div class="team-thumb">
                                    <img class="img-fullwidth" src="{{ $team->photo }}" alt=""
                                        style="width: 100%; height: 250px; background-size: center; object-fit: cover;">
                                </div>
                                <div class="team-details text-center bg-theme-colored1">
                                    <div class="member-biography">
                                        <h3 class="mt-0 text-white mb-0">
                                            {{ $team->name ?? '' }}
                                        </h3>
                                        <p class="mb-0 text-white">
                                            {{ $team->position ?? '' }}
                                        </p>
                                    </div>
                                    <ul class="styled-icons icon-dark icon-md icon-theme-colored4 icon-circled pt-3">
                                        <li>
                                            <a href="https://www.facebook.com/GATrainingSchool/photos">
                                                <i class="fab fa-facebook text-white"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter text-white">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-dribbble text-white">
                                                </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram text-white">
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <section class="our-blog bg-img-cover bg-img-center" data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}"
        style="margin-top: 5px;">
        <div class="container pb-90">
            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                @if (session('key') == 'jp')
                                    <h2 class="title">
                                        最新
                                        <span class="text-theme-colored3">
                                            ニュース
                                        </span>
                                    </h2>
                                @else
                                    <h2 class="title">
                                        Letest
                                        <span class="text-theme-colored3">
                                            News
                                        </span>
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="row">
                    @foreach ($news as $new)
                        <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <a href="{{ route('news.show', $new->id) }}">
                                <div class="blog-style1-current-theme">
                                    <article class="post">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                <img class="img-responsive img-fullwidth" src="{{ $new->photo }}"
                                                    alt=""
                                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <div class="header-wrapper d-flex">
                                                <h4 class="entry-title">
                                                    <a class="text-theme-colored4"
                                                        href="{{ route('news.show', $new->id) }}"
                                                        style="font-size: 20px;">
                                                        @if (session('key') == 'jp')
                                                            {{ $new->title_jp ?? '' }}
                                                        @else
                                                            {{ $new->title_eng ?? '' }}
                                                        @endif
                                                    </a>
                                                </h4>
                                            </div>

                                            <p class="mt-10">
                                                @if (session('key') == 'jp')
                                                    {!! Str::limit($new->description_jp ?? '', 200) !!}
                                                @else
                                                    {!! Str::limit($new->description_eng ?? '', 200) !!}
                                                @endif
                                            </p>
                                        </div>
                                        <div class="bg-theme-colored1 text-center p-10">
                                            <span class="text-white mr-15">
                                                <i class="fas fa-share-alt text-white" data-tm-margin-right="8px"></i>
                                                24 Share
                                            </span>

                                            <span class="text-white mr-15">
                                                <i class="fa fa-calendar text-white" data-tm-margin-right="8px"></i>
                                                {{ $new->upload_date ?? '' }}
                                            </span>

                                            <span class="text-white">
                                                <i class="far fa-eye text-white" data-tm-margin-right="8px"></i>
                                                {{ $new->view ?? 0 }}
                                                @if ($new->view == 1)
                                                    View
                                                @else
                                                    Views
                                                @endif
                                            </span>
                                        </div>
                                    </article>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
