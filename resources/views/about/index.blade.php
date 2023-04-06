@extends('layouts.main')
@section('title', '- About Us')
@section('content')
    @include('layouts.about_slider')

    {{-- <section>
        <div class="container pt-0 pb-0">
            <div class="section-content">
                <div class="row equal-height-inner mt-sm-0" data-margin-top="-150px">
                    <div
                        class="col-sm-4 col-md-4 pr-0 pr-sm-0 pl-sm-15 pr-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                        <div class="sm-height-auto">
                            <div class="bg-theme-colored text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40">
                                <div class="media-body">
                                    <h3 class="heading text-white mt-0">
                                        Why study in Japan?
                                    </h3>
                                    <p class="text-white">Lorem ipsum dolor sit , elit.Acque quidem eaque, totam magni
                                        cumque.</p>
                                    <a href="#" class="btn btn-md btn-sm btn-default mt-10 no-border">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-sm-4 col-md-4 pl-0 pr-0 pr-sm-0 pl-sm-0 pr-xs-15 pl-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                        <div class="sm-height-auto">
                            <div class="bg-theme-colored2 text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40">
                                <div class="media-body">
                                    <h3 class="heading text-white mt-0">Schloarship</h3>
                                    <p class="text-white">Lorem ipsum dolor sit , elit.Acque quidem eaque, totam magni
                                        cumque.</p>
                                    <a href="#" class="btn btn-md btn-sm btn-default mt-10 no-border">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-sm-4 col-md-4 pl-0 pr-sm-15 pl-sm-0 pl-xs-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                        <div class="sm-height-auto">
                            <div class="bg-theme-colored3 text-center sm-text-center mb-sm-10 p-30 pt-40 pb-40">
                                <div class="media-body">
                                    <h3 class="heading text-white mt-0">Online Training</h3>
                                    <p class="text-white">Lorem ipsum dolor sit , elit.Acque quidem eaque, totam magni
                                        cumque.</p>
                                    <a href="#" class="btn btn-md btn-sm btn-default mt-10 no-border">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="blog">
        <div class="container pb-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        @if (session('key') == 'jp')
                            <h2 class="mt-0 line-height-1 text-center text-uppercase">
                                <span class="text-theme-colored3">
                                    当社について
                                </span>
                            </h2>
                        @else
                            <h2 class="mt-0 line-height-1 text-center text-uppercase">
                                About Of
                                <span class="text-theme-colored3">Our Company</span>
                            </h2>
                        @endif

                        <p>
                            @if (session('key') == 'jp')
                                GA日本語研修センターは、ミャンマーの勤勉で優秀な人材を通じて日本との交流を深め、国際社会に貢献していきます。
                            @else
                                GA Japanese & Kaigo Training Center will contribute to the international community by
                                deepening exchanges with Japan through Myanmar's diligent and excellent human resources.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <style>
                        table,
                        th,
                        td {
                            border: 1px solid white;
                            border-collapse: collapse;
                        }

                        .thcss {
                            background-color: #D29F2A;
                            width: 17%;
                            color: white;
                            text-align: center;
                            font-size: 16px;
                            font-weight: 700px;
                            line-height: 26px;
                            padding: 20px;
                        }

                        .tdcss {
                            background-color: #5d533c;
                            width: 50%;
                            color: white;
                            text-align: left;
                            font-size: 16px;
                            font-weight: 700px;
                            line-height: 26px;
                            padding: 20px;
                        }
                    </style>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <table class=" animated fadeinup fadeInUp animation" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <th class="thcss">
                                        @if (session('key') == 'jp')
                                            会社名
                                        @else
                                            Company Name
                                        @endif
                                    </th>
                                    <td class="tdcss">
                                        GA Japanese & Kaigo Training Center
                                    </td>
                                </tr>

                                <tr>
                                    <th class="thcss">
                                        @if (session('key') == 'jp')
                                            設立日
                                        @else
                                            Date of establishment
                                        @endif
                                    </th>
                                    <td class="tdcss">
                                        September 20, 2019
                                    </td>
                                </tr>

                                <tr>
                                    <th class="thcss">
                                        @if (session('key') == 'jp')
                                            本社
                                        @else
                                            Head Office
                                        @endif
                                    </th>
                                    <td class="tdcss">
                                        No.981, GA (29 Ward), Pyi Htaung Su Main Road, North Dagon Township, Yangon,
                                        Myanmar.
                                    </td>
                                </tr>

                                <tr>
                                    <th class="thcss">
                                        @if (session('key') == 'jp')
                                            代表者
                                        @else
                                            Representative Director
                                        @endif
                                    </th>
                                    <td class="tdcss">
                                        Mr. Mg Mg
                                    </td>
                                </tr>
                                <tr>
                                    <th class="thcss">
                                        @if (session('key') == 'jp')
                                            電話番号
                                        @else
                                            Telephone Number
                                        @endif
                                    </th>
                                    <td class="tdcss">
                                        09 269 101 211
                                    </td>
                                </tr>
                                <tr>
                                    <th class="thcss">
                                        @if (session('key') == 'jp')
                                            ライセンス
                                        @else
                                            License
                                        @endif
                                    </th>
                                    <td class="tdcss">
                                        Licence No. **/**** （ミャンマー国政府公認送出ライセンス）
                                    </td>
                                </tr>

                                <tr>
                                    <th class="thcss">
                                        @if (session('key') == 'jp')
                                            フェイスブック
                                        @else
                                            Facebook
                                        @endif
                                    </th>
                                    <td class="tdcss">
                                        <a href="https://www.facebook.com/GATrainingSchool" class="text-white">
                                            https://www.facebook.com/GATrainingSchool
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="thcss">
                                        @if (session('key') == 'jp')
                                            メールアドレス
                                        @else
                                            Mail Address
                                        @endif
                                    </th>
                                    <td class="tdcss">
                                        <a href="mailto:info@sunpowerdragon-mm.com" class="text-white">
                                            info@sunpowerdragon-mm.com
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-lighter">
        <div class="container pb-70 pb-sm-60">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if (session('key') == 'jp')
                            <h2 class="text-center line-height-1 mt-0">
                                <span class="text-theme-colored3">当社の声明 </span>
                            </h2>
                        @else
                            <h2 class="text-center line-height-1 mt-0">
                                Our <span class="text-theme-colored3">Company </span>Statement
                            </h2>
                        @endif

                        <p class="text-center">
                            @if (session('key') == 'jp')
                                日本語学習、人材育成のためのミャンマー日本研修センター。
                            @else
                                Japan Training Center in Myanmar for Japanese learning, development human resources.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row equal-height">
                    <div class="col-sm-4 col-md-4">
                        <div class="icon-box bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40"
                            style="height: 280px; background-image: linear-gradient(to right, #D4A231 , #e4dcca);">
                            <a href="javascript:void(0)" class="icon icon-circled icon-md flip mb-20">
                                <img src="{{ asset('data/focus.png') }}" alt="">
                            </a>
                            <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">
                                @if (session('key') == 'jp')
                                    私たちのビジョン
                                @else
                                    Our Vision
                                @endif
                            </h3>
                            <p style="text-align: justify; color: black; font-weight: bold;">
                                @if (session('key') == 'jp')
                                    優秀な社員に海外での就業機会を提供し、生活の質を向上させる
                                @else
                                    To improve the quality of skillful employees lives by giving them overseas job
                                    opportunities.
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="icon-box bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40"
                            style="height: 280px; background-image: linear-gradient(to right, #498F09 , #9FD13F);">
                            <a href="javascript:void(0)" class="icon icon-circled icon-md flip mb-20">
                                <img src="{{ asset('data/goal.png') }}" alt="">
                            </a>
                            <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">
                                @if (session('key') == 'jp')
                                    我々の使命
                                @else
                                    Our Mission
                                @endif
                            </h3>
                            <p style="text-align: justify; color: black; font-weight: bold;">
                                @if (session('key') == 'jp')
                                    クライアントと提携することで、優れた企業と優れた従業員を結びつけ、両方の機会を開拓すること。
                                @else
                                    To connect great companies with great employees and opening up opportunities for both by
                                    partnering up with our clients.
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="icon-box bg-white text-center clearfix m-0 pr-20 pl-20 pt-30 pb-20 mb-40"
                            style="height: 285px; background-image: linear-gradient(to right, #512989, #9F585B);"">
                            <a href="javascript:void(0)" class="icon icon-circled icon-md flip mb-20">
                                <img src="{{ asset('data/motivation.png') }}" alt="">
                            </a>
                            <h3 class="icon-box-title mt-5 mb-15 letter-space-1 line-height-1">
                                @if (session('key') == 'jp')
                                    私たちの価値
                                @else
                                    Our Value
                                @endif
                            </h3>
                            <p style="text-align: justify; color: black; font-weight: bold;">
                                @if (session('key') == 'jp')
                                    私たちは知識を追求し、お客様により大きな価値を提供します。そのため、私たちは生涯学習の実践に取り組み、謙虚であり続け、あらゆる面でサービスを継続的に改善しています。
                                @else
                                    We pursue knowledge to deliver greater value for our clients. As such, we engage in
                                    lifelong learning practices to stay humble and continuously improve our services on all
                                    fronts.
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container pb-sm-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1">
                            Faculty
                            <span class="text-theme-colored3">Members</span>
                        </h2>
                        <p>
                            @if (session('key') == 'jp')
                                アジア全体でプロセスの合理化を開始するには、今すぐ私たちのいずれかに連絡してください。
                            @else
                                Get in touch with one of us today to start streamlining your processes across Asia.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content text-center">
                <div class="row">

                    <div class="col-sm-6 col-md-3 mb-sm-30">
                        <div class="team-block bg-light pt-10 pb-15">
                            <div class="team-thumb">
                                <img class="img-fullwidth" src="{{ asset('assets/images/team/2.png') }}" alt="">
                            </div>
                            <div class="info">
                                <div class="pt-10 pb-10 bg-theme-colored">
                                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                                </div>
                                <ul class="styled-icons icon-theme-colored3 icon-circled icon-dark icon-sm mt-15 mb-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 mb-sm-30">
                        <div class="team-block bg-light pt-10 pb-15">
                            <div class="team-thumb">
                                <img class="img-fullwidth" src="{{ asset('assets/images/team/1.png') }}" alt="">
                            </div>
                            <div class="info">
                                <div class="pt-10 pb-10 bg-theme-colored2">
                                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                                </div>
                                <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-15 mb-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 mb-sm-30">
                        <div class="team-block bg-light pt-10 pb-15">
                            <div class="team-thumb">
                                <img class="img-fullwidth" src="{{ asset('assets/images/team/3.png') }}" alt="">
                            </div>
                            <div class="info">
                                <div class="pt-10 pb-10 bg-theme-colored3">
                                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                                </div>
                                <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-15 mb-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-sm-30">
                        <div class="team-block bg-light pt-10 pb-15">
                            <div class="team-thumb">
                                <img class="img-fullwidth" src="{{ asset('assets/images/team/4.png') }}" alt="">
                            </div>
                            <div class="info">
                                <div class="pt-10 pb-10 bg-theme-colored">
                                    <h4 class="mt-0 mb-0 text-white">Jone doe</h4>
                                    <h6 class="mt-0 mb-0 text-white">Manager</h6>
                                </div>
                                <ul class="styled-icons icon-theme-colored2 icon-circled icon-dark icon-sm mt-15 mb-0">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
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
