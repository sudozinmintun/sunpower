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
        <div class="container"
            style="background-image: url({{ asset('data/edbg.webp') }}); padding-top: 0px; padding-bottom: 0px">
            <div class="row">
                <div class="col-lg-4  col-md-4 m-lg-auto">
                    <div class="whychose-thumb">
                        <img class="img-fullwidth" src="{{ asset('data/t1.jpeg') }}" alt="WhyChoseImage">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 pl-50">
                    <h2 class="title line-bottom mb-20 mt-0">
                        <span class="text-theme-color-red" style="font-size: 20px;">
                            @if (session('key') == 'jp')
                                1. ネイティブの日本語のように話せるように、シャドーイングの練習をします！
                            @else
                                1. We provide shadowing practice to enable students to speak like a native Japanese!
                            @endif
                        </span>
                    </h2>
                    <p class="mb-50" style="text-align: justify; font-size: 15px;">
                        @if (session('key') == 'jp')
                            シャドーイングの練習では、短い会話を聞いてから、聞いたことを正確に話すことでシャドーイングを行います。それは、日本語を含む言語を学ぶための非常に有用な方法であることが証明されています.
                            <br>

                            多くの語学学習者は、リスニング、特にスピーキングに苦労しています。彼らは言いたいことを思いつくことはできますが、その場で文章を作ることはできません。シャドーイングにより、あなたの心は日本語で直感的に反応することができます。シャドーイングを定期的に練習することで、単に知っているだけでなく、学んだことを実際の状況に適用できるようになるのに役立ちます。
                            <br>
                            GA日本語研修センターのレッスンでは、あなたのレベルに合わせたシャドーイングの練習を提供しています。

                            <br>
                            話すことに自信が持てるようになると、日本語での会話も楽しくなります。シャドーイングの利点は、リスニングとスピーキングに加えて、リーディング
                            スキルも向上することです。さらに、イントネーションや発音などの音声コンポーネントが頭に登録され、音声に反映されます。練習を続けることで、ネイティブの日本語のイントネーションと発音に近づきます。
                        @else
                            In shadowing practice, you listen to a short conversation and shadow after it by immediately
                            speaking exactly what you hear. It has proven to be a very useful method for learning languages,
                            including Japanese.
                            <br>
                            Many language learners struggle with listening and especially speaking. They are often able to
                            think
                            of what they want to say, but are not able to form a sentence on the spot. Shadowing enables
                            your
                            mind to respond intuitively in Japanese. Practicing shadowing regularly can help you to progress
                            from merely knowing to applying what you have learnt in practical situations.

                            <br>
                            In GA Japanese & Kaigo Training Center's lessons, we provide shadowing practice suitable for
                            your
                            level.

                            <br>
                            As you gain confidence in speaking the language, you will also start to enjoy conversations in
                            Japanese. What is more useful about shadowing is that, besides listening and speaking, your
                            reading
                            skills will also improve. In addition, speech components like intonation and pronunciation will
                            register in your mind and they will be reflected in your speech. By continuing to practice, you
                            will
                            get closer to the intonation and pronunciation of a native Japanese.
                        @endif
                    </p>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-8 col-md-8 pl-50">
                    <h2 class="title line-bottom mb-20 mt-0">
                        <span class="text-theme-color-red" style="font-size: 20px;">
                            @if (session('key') == 'jp')
                                2. ありそうなシチュエーションを中心に役立つ表現を教えます！
                            @else
                                2. We teach useful expressions focusing on situations that you are likely to be in!
                            @endif
                        </span>
                    </h2>
                    <p class="mb-50" style="text-align: justify; font-size: 15px;">
                        @if (session('key') == 'jp')
                            もちろん、構造化された注意深い方法で文法を学ぶことは重要です。しかし、それだけでは文法的に正しい日本語や教科書的な日本語で話すことができるようになるだけでは十分ではないと考えています。
                            GA日本語・外国人研修センターでは、教師が日常生活に関連した現実的な状況を提示します。
                        @else
                            It is of course important to learn grammar in a structured and careful way. However, we believe
                            that is not enough to help our students to merely speak in grammatically correct or textbook
                            Japanese. At GA Japanese & Kaigo Training Center, teachers will present them with realistic
                            situations related to daily life.
                            <br>
                            Since the situations are familiar to you, you can immediately use the grammar and expressions
                            you have learned to talk about topics about yourself, your family and friends.
                            <br>
                            By doing so, you will definitely gain confidence in speaking Japanese.
                        @endif
                    </p>
                </div>

                <div class="col-lg-4  col-md-4 m-lg-auto">
                    <div class="whychose-thumb">
                        <img class="img-fullwidth" src="{{ asset('data/t2.jpeg') }}" alt="WhyChoseImage">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-4  col-md-4 m-lg-auto">
                    <div class="whychose-thumb">
                        <img class="img-fullwidth" src="{{ asset('data/t3.jpeg') }}" alt="WhyChoseImage">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 pl-50">
                    <h2 class="title line-bottom mb-20 mt-0">
                        <span class="text-theme-color-red" style="font-size: 20px;">
                            @if (session('key') == 'jp')
                                3. 授業では生徒の話す時間を優先します！
                            @else
                                3. We prioritise student speaking time in class!
                            @endif
                        </span>
                    </h2>
                    <p class="mb-50" style="text-align: justify; font-size: 15px;">
                        @if (session('key') == 'jp')
                            多くの人が知らないことですが、言語をマスターする方法は、それを上手に話せるようになることです。話す能力は、少なくとも日本語に関しては、コミュニケーションの基礎です。日本語が上手に話せれば、聞く、読む、書くといったその他のコミュニケーション能力も、自然と日本人並みのレベルにまで達します。
                            <br>
                            このため、各生徒がクラスで話す時間を多く提供しています。
                            <br>
                            教える部分はシンプルでわかりやすく、残りの時間は学んだことを実践することに専念します
                        @else
                            Unknown to many, the way to master a language is to be able to speak it well. The skill of
                            speaking, at least for the Japanese language, is the basis of communication. If one can speak
                            Japanese well, the other communication skills, namely listening, reading and writing, will come
                            naturally to the level even comparable to that of a native Japanese.
                            <br>
                            For this reason, we provide each student a lot of time to speak in class.
                            <br>
                            The teaching portion is kept simple and easy to understand, and the remaining time is devoted to
                            practicing what you have learnt.
                        @endif
                    </p>
                </div>
            </div>

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

@endsection
@section('script')
@endsection
