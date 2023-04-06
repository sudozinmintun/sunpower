<header id="header" class="header header-layout-type-header-3rows header-nav-left">
    <div class="header-top" style="background-image: linear-gradient(to right, #cc9900, #ffdf00, #eead0e);">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                    <ul class="element contact-info">
                        <li class="contact-phone">
                            <i class="fa fa-phone font-icon sm-display-block"></i>
                            Tel: 09 269 101 211
                        </li>
                        <li class="contact-email">
                            <i class="fa fa-envelope font-icon sm-display-block"></i>
                            info@sunpowerdragon-mm.com
                        </li>
                    </ul>
                </div>
                <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                    <div class="element pt-0 pb-0">
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                            <li>
                                <a href="{{ route('en') }}">
                                    <img src="{{ asset('data/eng.png') }}" style="width: 50px;">
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('jp') }}">
                                    <img src="{{ asset('data/jp.png') }}" style="width: 50px;">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="element pt-0 pt-lg-10 pb-0">
                        <a href="{{ route('about.index') }}" class="btn btn-theme-colored2 btn-sm">
                            @if (session('key') == 'jp')
                                会社情報
                            @else
                                Profile
                            @endif
                        </a>

                        <a href="{{ route('contact.index') }}" class="btn btn-theme-colored2 btn-sm">
                            @if (session('key') == 'jp')
                                お問い合わせ
                            @else
                                Inquiry
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto align-self-center header-mid-left text-center text-xl-start">
                    <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
                        <img class="logo-default logo-1x" src="{{ asset('assets/images/logo-wide.png') }}"
                            alt="Logo">
                        <img class="logo-default logo-2x retina" src="{{ asset('assets/images/logo-wide%402x.png') }}"
                            alt="Logo">
                    </a>
                </div>
                <div class="col-xl-auto align-self-center ms-xl-auto header-mid-right text-center text-xl-end">
                    <div class="header-mid-column3-container">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb">
                                        <a href="tel:(123)456-78-90">
                                            <i class="flaticon-contact-044-call-1 font-icon  sm-display-block"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="title">Call us at</h5>
                                        <div class="subtitle"><a href="tel:(123)456-78-90">(+959) 445652455</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb">
                                        <a href="mailto:info@example.com">
                                            <i class="flaticon-contact-043-email-1 font-icon  sm-display-block"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="title">Email us</h5>
                                        <div class="subtitle">
                                            <a href="mailto:info@example.com">
                                                info@heiwamm.com
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-auto element text-center text-md-start">
                                <div class="contact-info-box big-icon">
                                    <div class="left-thumb">
                                        <a href="#">
                                            <i class="flaticon-contact-025-world font-icon  sm-display-block"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="title">
                                            Location
                                        </h5>
                                        <div class="subtitle">
                                            North Dagon Tsp, Yangon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav tm-enable-navbar-hide-on-scroll">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto align-self-center">
                            <nav id="top-primary-nav" class="menuzord theme-color2" data-effect="fade"
                                data-animation="none" data-align="right">
                                <ul id="main-nav" class="menuzord-menu">


                                    <li class="menu-item">
                                        <a href="{{ route('home') }}">
                                            @if (session('key') == 'jp')
                                                ミャンマ—
                                            @else
                                                Myanmar
                                            @endif
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('education.index') }}">
                                            @if (session('key') == 'jp')
                                                教育
                                            @else
                                                Education
                                            @endif
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">
                                            Trainee
                                        </a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="{{ route('home') }}">
                                                    @if (session('key') == 'jp')
                                                        技能実習生
                                                    @else
                                                        Technical Intern Trainee
                                                    @endif
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('home') }}">
                                                    @if (session('key') == 'jp')
                                                        特定技能実習生
                                                    @else
                                                        Specified Skilled Trainee
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('gallery.index') }}">
                                            @if (session('key') == 'jp')
                                                Gallery
                                            @else
                                                Gallery
                                            @endif
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('news.index') }}">
                                            @if (session('key') == 'jp')
                                                新着情報
                                            @else
                                                Update Information
                                            @endif
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('home') }}">
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
                        <div
                            class="col-sm-auto ms-auto align-self-center element text-center text-md-start d-none d-xl-block border-left-3px">
                            <ul class="styled-icons icon-gray icon-theme-colored1 icon-md icon-circled clearfix pl-30">
                                <li>
                                    <a class="social-link" href="https://www.facebook.com/GATrainingSchool/"
                                        target="_blank" style="background-color: #268BF1;">
                                        <i class="fab fa-facebook text-white"></i>
                                    </a>
                                </li>

                                <li>
                                    <a class="social-link" href="#" style="background-color: #3396E8;">
                                        <i class="fab fa-twitter text-white"></i>
                                    </a>
                                </li>

                                <li>
                                    <a class="social-link" href="#" style="background-color: #E93F33;">
                                        <i class="fab fa-youtube text-white"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row d-block d-xl-none">
                    <div class="col-12">
                        <nav id="top-primary-nav-clone"
                            class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                            data-effect="slide" data-animation="none" data-align="right">
                            <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
