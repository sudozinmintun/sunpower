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
                                                <span class="text-theme-colored1">
                                                    Education
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
                                    GA Japanese & Kaigo Training Center
                                    は、ミャンマーで最も興味深く効果的な日本語レッスンをお届けすることをお約束します。そして、言語だけを知っていてJLPTに合格すれば十分だと思う場合は、それを再考してもらいます.言葉だけでなく、日本の文化なども学べたら素敵ですよね?

                                    <br>
                                    私たちのレッスンは、日本語能力試験（JLPTとして知られ、多くの日本人学習者が達成を目指している）に合格することを学ぶだけでなく、言語の総合的なマスターになるように設計されています.
                                    JLPT に合格するということは、多くの JLPT N1 保持者でさえ不足している 2
                                    つの重要なスキルである、読み書きは十分にできるが、流暢に話すことはできないことを意味します。
                                    <br>

                                    GA 日本語 &
                                    研修センターでは、日本語を流暢に話し、読み、書き、聞くことができるようになります。日本語学校を超えて、社会、芸術、歴史などの日本の文化を紹介し、実用的なアプリケーションを紹介するので、日本で働くのに十分な知識を得ることができます.
                                @else
                                    GA Japanese & Kaigo Training Center promises to deliver the most interesting and
                                    effective Japanese lessons in Myanmar. And if you think you it is sufficient to know
                                    only the language and pass JLPT, we will have you reconsider that. Wouldn’t it be
                                    wonderful if, besides the language, you can also learn about the Japanese culture and
                                    beyond? <br>

                                    Our lessons are designed in a way that you not only learn to pass the Japanese Language
                                    Proficiency Test, better known as JLPT and which many Japanese learners aim to
                                    accomplish, but also be an all-rounded master of the language. The passing of JLPT means
                                    that you can read and listen well, but not write and speak fluently, two important
                                    skills which even many JLPT N1 holders lack. <br>

                                    GA Japanese & Kaigo Training Center ensures that you can speak, read, write and listen
                                    to Japanese fluently. Beyond a Japanese language school, the lessons will introduce you
                                    to the culture of Japan including the society, arts and history, introduce practical
                                    applications, so that you know enough to even work in Japan.
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-section pt-10 pb-10 " data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}">
        <div class="position-relative">
            <div class="container-fulid">
                <div class="section-content">
                    <div class="row">

                        <div class="col-sm-12 col-lg-12 col-xl-4 order-1 order-xl-0">
                            <div class="about-style-current-theme">
                                <div class="tm-sc-animated-layer-images">
                                    <div class="layer-image-wrapper">
                                        <div class="layer-image">
                                            <img class="w-100" src="{{ asset('data/tm1.jpg') }}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-12 col-xl-8 order-0 order-xl-1">
                            <div class="about-style-current-theme">
                                <div class="tm-sc-about-content about-content">
                                    <div class="tm-sc-section-title section-title mb-0">
                                        <div class="title-wrapper mb-0">
                                            <p class="subtitle line-bottom">
                                                GA Japanese & Kaigo Training Center
                                            </p>
                                            <h2 class="title">
                                                Unique Teaching Method
                                            </h2>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="paragraph">
                                                        <p style="text-align: justify; font-size: 16px;">
                                                            @if (session('key') == 'jp')
                                                                GA日本語・外国人研修センター独自の指導法は、他の3つよりも話すことを重視しています。このユニークな教授法は、進歩を制限する伝統的な教授法を使用するミャンマーの他の多くの日本語学校では利用できません。
                                                                <br>

                                                                その上、GA 日本語 & 外国語トレーニング
                                                                センターは、高品質で有用な現代語の教科書を日本で定期的に調達し、最高の教材をまとめて、学生が言語をより速く、高いレベルの習熟度で習得できるようにします。
                                                                <br>
                                                                何よりも、GA Japanese & Kaigo Training Center
                                                                が約束するのは、楽しくフレンドリーな環境で日本語を学ぶことです。学習は、幸せでプロセスを楽しんでいるときに最も速く行われるからです。時間が経つにつれて、日本語を流暢に話し、読み、書き、聞く自信がつきます。
                                                            @else
                                                                GA Japanese & Kaigo Training Center Unique Teaching Method
                                                                emphasises on the speaking component more so than the other
                                                                three. This unique teaching style is not available in many
                                                                other
                                                                Japanese language schools in Myanmar, which use traditional
                                                                ways
                                                                of teaching that limit progress. <br><br>


                                                                On top of that, GA Japanese & Kaigo Training Center
                                                                regularly
                                                                sources high-quality and useful modern language textbooks in
                                                                Japan, bringing together the best of teaching materials so
                                                                as to
                                                                propel students to master the language faster and with a
                                                                high
                                                                level of proficiency. <br><br>

                                                                Above all, what GA Japanese & Kaigo Training Center promises
                                                                is
                                                                for you to learn Japanese in a fun and friendly environment
                                                                because learning takes place the fastest when one is happy
                                                                and
                                                                enjoys the process. Over time, you will build up the
                                                                confidence
                                                                to speak, read, write and listen to Japanese fluently.
                                                            @endif
                                                        </p>
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
            </div>
        </div>
    </section>


    <section>
        <div class="container pb-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="tm-owl-carousel-4col" data-dots="true" data-nav="true">
                        <div class="item">
                            <img src="{{ asset('data/e1.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>
                        <div class="item">
                            <img src="{{ asset('data/e2.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="{{ asset('data/e3.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="{{ asset('data/e4.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="{{ asset('data/e5.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="{{ asset('data/e6.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="{{ asset('data/e7.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="{{ asset('data/e8.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>

                        <div class="item">
                            <img src="{{ asset('data/e9.jpeg') }}" alt="images"
                                style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section>
        <div class="container" data-tm-padding-bottom="250px">
            <div class="row">
                <div class="col-lg-6 col-xl-5 m-lg-auto">
                    <div class="whychose-thumb">
                        <img class="img-fullwidth" src="{{ asset('assets/images/photos/3.png') }}" alt="WhyChoseImage">
                    </div>
                </div>
                <div class="col-xl-7 pl-50">
                    <h2 class="title line-bottom mb-20 mt-0">Why <span class="text-theme-color-red">Choose Us</span> ?
                    </h2>
                    <p class="mb-50">The Cweren Law Firm is a recognized leader in landlord tenant representation
                        throughout Texas.The largests professional property management companies the region.The largest
                        professional property management companies is a recognized leader in landlord tenant representation
                        throughout Texas</p>
                    <div class="row">
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="icon-box text-center">
                                <a href="#"
                                    class="icon bg-theme-colored3 icon-circled icon-border-effect effect-circle icon-md">
                                    <i class="fas fa-bell text-white"></i>
                                </a>
                                <h5 class="icon-box-title mt-15 mb-0 letter-space-1 text-uppercase">Responsive</h5>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="icon-box text-center">
                                <a href="#"
                                    class="icon bg-theme-colored2 icon-circled icon-border-effect effect-circle icon-md">
                                    <i class="fas fa-pencil-alt text-white"></i>
                                </a>
                                <h5 class="icon-box-title mt-15 mb-0 letter-space-1 text-uppercase">Validation</h5>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="icon-box text-center">
                                <a href="#"
                                    class="icon bg-theme-colored4 icon-circled icon-border-effect effect-circle icon-md">
                                    <i class="fas fa-certificate text-white"></i>
                                </a>
                                <h5 class="icon-box-title mt-15 mb-0 letter-space-1 text-uppercase">Certification</h5>
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
