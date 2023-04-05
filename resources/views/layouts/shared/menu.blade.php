<header id="header" class="header modern-header modern-header-theme-colored2">
    <div class="header-top  sm-text-center" style="background-color: #D29F2A;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget text-white">
                        <ul class="list-inline text-left flip sm-text-center">
                            <li>
                                <a class="text-white" href="#">
                                    Facebook
                                </a>
                            </li>

                            <li class="text-white">|</li>

                            <li>
                                <a class="text-white" href="#">
                                    Twitter
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <center>
                        <div class="widget text-white">
                            <ul class="list-inline xs-text-center text-white">
                                <li class="m-0 pl-10 pr-10">
                                    <a href="tel:09 269 101 211" class="text-white">
                                        <i class="fa fa-phone text-white"></i>
                                        09 269 101 211
                                    </a>
                                </li>
                                <li class="m-0 pl-10 pr-10">
                                    <a href="mailto:info@sunpowerdragon-mm.com" class="text-white">
                                        <i class="fa fa-envelope-o text-white mr-5"></i>
                                        info@sunpowerdragon-mm.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </center>
                </div>

                <div class="col-md-3">
                    <div class="widget text-white">
                        <ul class="list-inline xs-text-center text-white pull-right">
                            <li>
                                <a href="{{ route('en') }}" class="nav-link">
                                    <img src="{{ asset('data/eng.png') }}" style="width: 40px;">
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('jp') }}" class="nav-link">
                                    <img src="{{ asset('data/jp.png') }}" style="width: 40px;">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle p-0 bg-lightest xs-text-center pb-30">
        <div class="container pt-20 pb-20">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-3">
                    <a class="menuzord-brand pull-left flip sm-pull-center mb-15" href="index-mp-layout1.html">
                        <img src="https://allaccessmyanmar.com/wordpress/wp-content/themes/amm/assets/img/common/logo.png"
                            alt="">
                    </a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-9">
                    <ul class="list-inline pull-right flip sm-pull-none sm-text-center list-bordered">
                        <style>
                            .my-menu-btn {
                                height: 40px;
                                line-height: 40px;
                                padding: 0 20px;
                                border-radius: 5px 5px 5px 5px;
                            }
                        </style>
                        <li class="bg-theme-colored text-white my-menu-btn" style="background: #4e4633 !important;">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ route('about.index') }}" style="color: white;">
                                @if (session('key') == 'jp')
                                    会社情報
                                @else
                                    Profile
                                @endif
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        </li>

                        <li class="bg-theme-colored3 text-white my-menu-btn"
                            style="background-color: #D29F2A !important;">
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ route('contact.index') }}" style=" color: white;">
                                @if (session('key') == 'jp')
                                    お問い合わせ
                                @else
                                    Inquiry
                                @endif
                            </a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed" style="background-color: #D29F2A;">
            <div class="container">
                <nav id="menuzord" class="menuzord  no-bg">

                    <ul class="menuzord-menu">

                        <li class="" style="padding: 0px;">
                            <a href="{{ route('home') }}" style="font-weight: bold">
                                @if (session('key') == 'jp')
                                    ミャンマ—
                                @else
                                    Myanmar
                                @endif
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('home') }}" style="font-weight: bold">
                                @if (session('key') == 'jp')
                                    教育
                                @else
                                    Education
                                @endif
                            </a>
                        </li>


                        <li class="">
                            <a href="{{ route('home') }}" style="font-weight: bold">
                                @if (session('key') == 'jp')
                                    技能実習生
                                @else
                                    Technical Intern Trainee
                                @endif
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('home') }}" style="font-weight: bold">
                                @if (session('key') == 'jp')
                                    特定技能実習生
                                @else
                                    Specified Skilled Trainee
                                @endif
                            </a>
                        </li>


                        <li class="">
                            <a href="{{ route('gallery.index') }}" style="font-weight: bold">
                                @if (session('key') == 'jp')
                                    Gallery
                                @else
                                    Gallery
                                @endif
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('news.index') }}" style="font-weight: bold">
                                @if (session('key') == 'jp')
                                    新着情報
                                @else
                                    Update Information
                                @endif
                            </a>
                        </li>

                        <li class="">
                            <a href="{{ route('home') }}" style="font-weight: bold">
                                @if (session('key') == 'jp')
                                    視察と入国ビザ
                                @else
                                    Sightseen and Entry visa services
                                @endif
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
