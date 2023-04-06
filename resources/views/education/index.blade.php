@extends('layouts.main')
@section('title', '- Education')
@section('content')

    <section class="service-section bg-transparent mb-0">
        <div class="container" style="padding-top: 10px; padding-bottom: 5px">
            <div class="section-content">
                <div class="row">

                    <div class="col-md-12 col-lg-12 py-5 d-flex justify-content-center">
                        <div class="tm-sc-section-title section-title text-center">
                            <img src="{{ asset('data/galogo.jpeg') }}" alt=""
                                style="width: 18%; height: auto; background-size: center; object-fit: cover;">
                            <div class="title-wrapper">
                                <h2 class="title">GA
                                    <span class="text-theme-colored3">Japanese & Kaigo</span>
                                    Training Center
                                </h2>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="tm-sc-service service-item-current-style2">
                            <div class="service-thumb">
                                <img class="img-fullwidth" src="{{ asset('data/jp1.jpeg') }}" alt="1.jpg"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="service-content bg-theme-colored3" style="height: 350px;">
                                <h4 class="title text-white">
                                    @if (session('key') == 'jp')
                                        教育
                                    @else
                                        Why study Japanese Language?
                                    @endif
                                </h4>
                                <p class="text-white" style="font-size: 16px; text-align: justify">
                                    @if (session('key') == 'jp')
                                        日本語は単なる言語ではなく、文化です。日本の人々は、言葉を知っていないと理解できない独特の考え方や生活様式を持っています。外国人が日本独特の風習や伝統、生活様式を学ぶための様々な日本語コースを提供しています。
                                    @else
                                        Japanese is not just a language -- it is a culture. The people in Japan have a
                                        unique
                                        way of thinking and living that you can only understand if you know their language.
                                        We
                                        offer various Japanese courses to help foreigners learn about Japan’s unique
                                        customs,
                                        traditions and way of life.
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="tm-sc-service service-item-current-style2">
                            <div class="service-thumb">
                                <img class="img-fullwidth" src="{{ asset('data/jp2.jpeg') }}" alt="2.jpg"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="service-content bg-theme-colored2" style="height: 350px;">
                                <h4 class="title text-white">
                                    @if (session('key') == 'jp')
                                        日本での生活
                                    @else
                                        Life in Japan
                                    @endif
                                </h4>
                                <p class="text-white" style="font-size: 16px; text-align: justify">
                                    @if (session('key') == 'jp')
                                        海に囲まれた日本は、四季を楽しむことができます。 <br>
                                        日本人は勤勉で規律を重んじることで知られています。ゲストを最優先におもてなしする「おもてなし」は日本人の本能であり、留学生は常に温かく迎えられます。
                                    @else
                                        Surrounded by the sea, Japan enjoys all four seasons. Japanese people are known to
                                        be hardworking and to attach importance to discipline.
                                        "Omotenashi" hospitality, the mentality of caring for guests by giving them the
                                        highest priority, is second nature to Japanese people, and thus international
                                        students are always welcomed warmly.
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="tm-sc-service service-item-current-style2">
                            <div class="service-thumb">
                                <img class="img-fullwidth" src="{{ asset('data/jp3.jpeg') }}" alt="3.jpg"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="service-content bg-theme-colored4" style="height: 350px;">
                                <h4 class="title text-white">
                                    @if (session('key') == 'jp')
                                        日本での仕事とキャリア
                                    @else
                                        Job & career in Japan
                                    @endif
                                </h4>
                                <p class="text-white">
                                    @if (session('key') == 'jp')
                                        「国籍問わず優秀な人材を採用したい」「
                                        外国語を話し、外国の状況を理解できる人材」、「私たちは
                                        多様なバックグラウンドを持つ人材を積極的に採用したいと考えています。」
                                        これらの声明に沿って事業を行う企業の増加、および
                                        留学生の採用が増えています。
                                    @else
                                        "We would like to hire talented personnel regardless of nationality," "We need
                                        personnel who can speak foreign languages and understand foreign situations," "We
                                        would like to actively hire personnel with diverse backgrounds." In Japan, there are
                                        a growing number of companies that operate in line with these statements, and the
                                        hiring of international students is increasing.
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="bg-lightest layer-overlay section-typo-light" data-tm-bg-img="{{ asset('data/edu_bg.jpeg') }}">
        <div class="container py-3">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <div class="about-text-content mb-md-30">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-xl-8">
                                    <div class="tm-sc-section-title section-title text-center">
                                        <div class="title-wrapper">
                                            <h2 class="title" style="font-size: 40px;">
                                                Educational
                                                <span class="text-theme-colored1">
                                                    System
                                                </span>
                                            </h2>
                                            <p
                                                style="background-image: linear-gradient(to right, #cc9900, #ffdf00, #eead0e); color: black; font-size: 20px; border-radius: 25px; border: 2px solid #B1812C;">
                                                Japanese Language & Training Centre
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <p style="text-align: justify; font-size: 17px; font-wiehgt: 400px; color: black">
                                @if (session('key') == 'jp')
                                    GA日本語研修センターは、ミャンマーの勤勉で優秀な人材を通じて日本との交流を深め、国際社会に貢献していきます。 <br>
                                    ミャンマーの才能と志を持つ若い男女の夢と希望を叶えるため、「あなたの夢を全力でサポートします」を基本理念に、優秀で元気な人材をミャンマーで募集しています。 GA
                                    Japanese & Kaigo Training Center
                                    は、皆様のご要望にお応えすることで、日本とミャンマーに優しい国際的なビジネス環境を推進できることを誇りに思っています。 <br>
                                    これもひとえに日本、ミャンマー双方の企業、監理団体をはじめとする関係者の皆様のご支援の賜物であり、心より感謝申し上げます。
                                @else
                                    GA Japanese & Kaigo Training Center will contribute to the international community by
                                    deepening exchanges with Japan through Myanmar's diligent and excellent human resources.
                                    <br>
                                    In order to fulfill the dreams and aspirations of Myanmar's talented and ambitious young
                                    men and women, based on the basic philosophy of "I will do my best to support your
                                    dreams", we are recruiting excellent and energetic human resources in Myanmar. We are
                                    proud that the GA Japanese & Kaigo Training Center can promote the Japan-Myanmar
                                    friendly international business environment by responding to your requests. <br>
                                    This is all thanks to the support of the parties concerned, including companies and
                                    supervising organizations in both Japan and Myanmar, and I am sincerely grateful.
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection
@section('script')
@endsection
