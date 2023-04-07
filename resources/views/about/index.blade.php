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
                    <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
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
                            </div>
                        </div>
                       

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
                            background-color: #deb24e;
                            width: 17%;
                            color: white;
                            text-align: center;
                            font-size: 16px;
                            font-weight: 700px;
                            line-height: 26px;
                            padding: 20px;
                        }

                        .tdcss {
                            background-color: #c7af79;
                            width: 50%;
                            color: white;
                            text-align: left;
                            font-size: 16px;
                            font-weight: 700px;
                            line-height: 26px;
                            padding: 20px;
                            text-align: center;
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
                                    <td class="thcss">
                                        GA Japanese & Kaigo Training Center
                                    </td>
                                </tr>

                                <tr>
                                    <th class="tdcss">
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
                                    <td class="thcss">
                                        No.981, GA (29 Ward), Pyi Htaung Su Main Road, North Dagon Township, Yangon,
                                        Myanmar.
                                    </td>
                                </tr>

                                <tr>
                                    <th class="tdcss">
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
                                    <td class="thcss">
                                        09 269 101 211
                                    </td>
                                </tr>
                                <tr>
                                    <th class="tdcss">
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
                                    <td class="thcss">
                                        <a href="https://www.facebook.com/GATrainingSchool" class="text-white">
                                            https://www.facebook.com/GATrainingSchool
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="tdcss">
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

  
<style>
    .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 25px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
</style>
    <!-- Section: Pricing Table -->
<section class="pricing-table" data-tm-bg-color="#f7f7f7">
    <div class="container pb-90">
        <div class="section-title">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="tm-sc-section-title section-title text-center">
                        <div class="title-wrapper">
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
            </div>
        </div>
        <div class="section-content">
            <div class="row">
                
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="tm-sc-pricing-table p--0 mb-30" data-tm-border-radius="0">
                        <div class="pricing-table-inner-wrapper">
                            <div class="pricing-table-head  p-20" style="background-color: #D29F2A">
                                <div class="pricing-table-pricing">
                                    
                                    
                                        <a href="https://codepen.io/uiswarup/full/wvjZgar" target="_blank">
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-md-3 text-center">
                                                  <h6 class="animate-charcter" > 
                                                    @if (session('key') == 'jp')
                                                        私たちのビジョン
                                                    @else
                                                        Our Vision
                                                    @endif
                                                
                                                  </h6>
                                                 
                                                    
                                                </h3>

                                                </div>
                                              </div>
                                            </div>
                                              </a>
                                    
                                </div>
                            </div>
                            
                           <center>
                            <div class="pricing-table-thumb">
                                <img class="" src="{{ asset('data/focus.png') }}"
                                    alt="Image"  style="width:80px;height:80px;">
                            </div>
                           </center>
                            <div class="pricing-table-inner">
                                <div class="pricing-table-head pl-30 pt-30">
                                    
                                </div>
                                <div class="pricing-table-content pl-30 pt-0 mt--0">
                                    <ul>
                                        
                                            <li>
                                                <i class="far fa-heart mr-10 text-theme-colored2">

                                                </i>
                                            @if (session('key') == 'jp')
                                                優秀な社員に海外での就業機会を提供し、生活の質を向上させる
                                            @else
                                                To improve the quality of skillful employees lives by giving them overseas job
                                                opportunities.
                                            @endif
                                            To improve the quality of skillful employees lives by giving them overseas job opportunities.
                                          </li>
                                          
                                            
                                    </ul>
                                </div>
                                <div class="pricing-table-footer d-grid">
                                    <a href="#" target="_self" class="btn  btn-flat" style="background-color: #D29F2A">
                                        @if (session('key') == 'jp')
                                            私たちのビジョン
                                        @else
                                            Our Vision
                                         @endif 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="tm-sc-pricing-table p--0 mb-30" data-tm-border-radius="0">
                        <div class="pricing-table-inner-wrapper">
                            <div class="pricing-table-head  p-20" style="background-color: #498F09;">
                                <div class="pricing-table-pricing">
                                    
                                    
                                        <a href="https://codepen.io/uiswarup/full/wvjZgar" target="_blank">
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-md-3 text-center">
                                                  <h6 class="animate-charcter" > 
                                                   
                                                    @if (session('key') == 'jp')
                                                        我々の使命
                                                    @else
                                                        Our Mission
                                                    @endif
                                                </h6>
                                                 
                                                </div>
                                              </div>
                                            </div>
                                              </a>
                                    
                                </div>
                            </div>
                            
                           <center>
                            <div class="pricing-table-thumb">
                                <img class="" src="{{ asset('data/goal.png') }}"
                                    alt="Image"  style="width:80px;height:80px; ">
                            </div>
                           </center>
                            <div class="pricing-table-inner">
                                <div class="pricing-table-head pl-30 pt-30">
                                    
                                </div>
                                <div class="pricing-table-content pl-30 pt-0 mt--0">
                                    <ul>
                                        
                                            <li><i class="far fa-heart mr-10 text-theme-colored2"></i>
                                                @if (session('key') == 'jp')
                                                クライアントと提携することで、優れた企業と優れた従業員を結びつけ、両方の機会を開拓すること。
                                            @else
                                                To connect great companies with great employees and opening up opportunities for both by
                                                partnering up with our clients.
                                            @endif
                                            </li>
                                            
                                    </ul>
                                </div>
                                <br>
                                <div class="pricing-table-footer d-grid">
                                    <a href="#" target="_self" class="btn  btn-flat" style="background-color: #498F09;">
                                         
                                    @if (session('key') == 'jp')
                                        我々の使命
                                    @else
                                        Our Mission
                                    @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="tm-sc-pricing-table p--0 mb-30" data-tm-border-radius="0">
                        <div class="pricing-table-inner-wrapper">
                            <div class="pricing-table-head  p-20" style="background-color: #3ab7a4">
                                <div class="pricing-table-pricing">
                                    
                                    
                                        <a href="https://codepen.io/uiswarup/full/wvjZgar" target="_blank">
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-md-3 text-center">
                                                  <h6 class="animate-charcter" > 
                                                    
                                                    @if (session('key') == 'jp')
                                                         私たちの価値
                                                    @else
                                                            Our Values
                                                    @endif
                                                </h6>
                                                 
                                                </div>
                                              </div>
                                            </div>
                                              </a>
                                    
                                </div>
                            </div>
                            
                           <center>
                            <div class="pricing-table-thumb">
                                <img class="" src="{{ asset('data/motivation.png') }}"
                                    alt="Image"  style="width:80px;height:80px; ">
                            </div>
                           </center>
                            <div class="pricing-table-inner">
                                <div class="pricing-table-head pl-30 pt-30">
                                    
                                </div>
                                <div class="pricing-table-content pl-30 pt-0 mt--0">
                                    <ul>
                                           
                                            <li><i class="far fa-heart mr-10 text-theme-colored2"></i>
                                                @if (session('key') == 'jp')
                                                    私たちは知識を追求し、お客様により大きな価値を提供します。そのため、私たちは生涯学習の実践に取り組み、謙虚であり続け、あらゆる面でサービスを継続的に改善しています。
                                                @else
                                                    We pursue knowledge to deliver greater value for our clients. As such, we engage in
                                                    lifelong learning practices to stay humble and continuously improve our services on all
                                                    fronts.
                                                @endif
                                            </li>
                                            
                                    </ul>
                                </div>
                                <div class="pricing-table-footer d-grid">
                                    <a href="#" target="_self" class="btn  btn-flat" style="background-color: #3ab7a4">
                                        
                                        @if (session('key') == 'jp')
                                        私たちの価値
                                        @else
                                                Our Values
                                        @endif
                                    </a>
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
    <div class="container pb-80">
      <div class="section-content">
        <div class="row">
          <div class="col-lg-3">
            <div class="sidebar">
              <div class="widget widget_text text-center">
                <img src="{{asset('data/ceo.jpg')}}" class="img-fullwidth" alt=""/>
              </div>
              
              <div class="widget widget_text text-center">
                <div class="textwidget">
                  <div class=" mb-md-40 p-30 pt-40 pb-40"> <img class="size-full wp-image-900 aligncenter" src="{{asset('data/k4.png')}}" alt="" width="128" height="128"/>
                  <h4>Online Help!</h4>
                  <h5>+(959) 269 101 211</h5>
                  </div>
                </div>
              </div>
              <div class="widget p-30 bg-white-fa">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Quick Contact!</h4>
                <form id="quick_contact_form1" name="footer_quick_contact_form" class="quick-contact-form" action="" method="post">
                  <div class="mb-3">
                    <input name="form_email" class="form-control" type="text" placeholder="Enter Email">
                  </div>
                  <div class="mb-3">
                    <textarea name="form_message" class="form-control" required placeholder="Enter Message" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-theme-colored1 btn-round" data-loading-text="Please wait...">Send Message</button>
                  </div>
                </form>

                <!-- Quick Contact Form Validation-->
                <script>
                  (function($) {
                    $("#quick_contact_form1").validate({
                      submitHandler: function(form) {
                        var form_btn = $(form).find('button[type="submit"]');
                        var form_result_div = '#form-result';
                        $(form_result_div).remove();
                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                        var form_btn_old_msg = form_btn.html();
                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                        $(form).ajaxSubmit({
                          dataType:  'json',
                          success: function(data) {
                            if( data.status === 'true' ) {
                              $(form).find('.form-control').val('');
                            }
                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                            $(form_result_div).html(data.message).fadeIn('slow');
                            setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                          }
                        });
                      }
                    });
                  })(jQuery);
                </script>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <h3 class="mt-0">Mr.Thaw Zin Oo<small  class="text-muted" data-tm-font-size="1.2rem">/ Director</small ></h3>
            <p>
                With “Harmony and playful mind”, we develop each student’s potential.
            </p>
            <p>We, GA Japanese Language School, for more than 4 years since we established in 2020, have been implementing Japanese language education with “Harmony and playful mind”.　”Harmony” here means well-balanced and authentic culture as known as a characteristic of Japanese people.We provide some opportunities to experience Japanese traditional culture in class so that students find “FUN” in learning Japanese. Also, our goal is that we engage our students to have “FUN” and become a big “FAN” of Japan throughout our lessons.</p>
            <p>
                The staff and teachers cooperate to understand the students and their situations well, and accompany each students to realize ther dreams and goals. Furthermore, we organize four different courses of Japanese so that students choose depending on their individual goals. This firmly allows us to support our students to go on to the next stage, from higher education to employment in Japan.
            </p>
            <div class="row mb-30">
              <div class="col-md-6">
                <h4 class="mb-30">Experiences</h4>
                <div class="tm-sc tm-timeline timeline-basic mb-sm-30">
                  <div class="info-box">
                    <h5 class="title">Teaching Expert</h5>
                    <div class="subtitle">******</div>
                    <div class="time">*******</div>
                    <div class="content">
                      <p><span>Teaching & Management</span></p>
                    </div>
                  </div>
                  <div class="info-box">
                    <h5 class="title">Teaching Expert</h5>
                    <div class="subtitle">******</div>
                    <div class="time">*******</div>
                    <div class="content">
                      <p><span>Teaching & Management</span></p>
                    </div>
                  </div>
                  <div class="info-box">
                    <h5 class="title">Teaching Expert</h5>
                    <div class="subtitle">******</div>
                    <div class="time">*******</div>
                    <div class="content">
                      <p><span>Teaching & Management</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h4 class="mb-30">Education</h4>
                <div class="tm-sc tm-timeline timeline-basic">
                  <div class="info-box">
                    <h5 class="title">University of Belgrade</h5>
                    <div class="subtitle">Master's degree - Computer University</div>
                    <div class="time">2012 - 2013</div>
                    <div class="content">
                      <p>Software Engineering</p>
                    </div>
                  </div>
                  <div class="info-box">
                    <h5 class="title">Faculty of economics, Belgrade Graphic</h5>
                    <div class="subtitle">Master's degreeEconomic (M.B>A)</div>
                    <div class="time">2015 - 2020</div>
                    <div class="content">
                      <p>M.B.A</p>
                    </div>
                  </div>
                  <div class="info-box">
                    <h5 class="title">Faculty of Mathematics</h5>
                    <div class="subtitle">Information Technology</div>
                    <div class="time">2006 - 2008</div>
                    <div class="content">
                      <p>Member of volleyball team, sport club Economist, Faculty of Economics, Belgrade, Serbia</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h5>We consider both traditional and latest education strategy. All of the students, teachers, and staff cooperate and share their developments as well as always think of our future to evolve ourselves.</h5>
            <p>
                As a Japanese language school that meets any expectation from both our community and the society, we, GA Japanese Language school, keep our step forward.
            </p>
            
            
          </div>
        </div>
      </div>
    </div>
  </section>




@endsection
@section('script')
@endsection
