@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <section class="inner-header divider parallax overlay-white-8" data-bg-img="{{ asset('data/contact.jpeg') }}">
        <div class="container pt-200 pb-200">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">
                            @if (session('key') == 'jp')
                                お問い合わせ
                            @else
                                Inquiry
                            @endif
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="divider">
        <div class="container pt-60 pb-60">
            <div class="section-title mb-60">
                <div class="row">
                    <div class="col-md-12">
                        <div class="esc-heading small-border text-center">
                            <h3>
                                @if (session('key') == 'jp')
                                    何か質問がある？
                                @else
                                    Have any Questions?
                                @endif
                            </h3>
                            <p>
                                @if (session('key') == 'jp')
                                    お問い合わせいただく際は、お手数ですが以下のフォームに必要事項をご入力の上、<br>「入力内容を確認する」ボタンを押してください。
                                @else
                                    If you would like to contact us, please fill in the necessary information in the form
                                    below.
                                    Please press the "Confirm the input contents" button.
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">

                    <div class="col-sm-12 col-md-4 mb-20">
                        <div class="contact-info text-center">
                            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                            <h4>Call Us</h4>
                            <h6 class="text-gray">
                                Phone: 09 269 101 211
                            </h6>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 mb-20">
                        <div class="contact-info text-center">
                            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                            <h4>Address</h4>
                            <h6 class="text-gray">
                                No.981, GA (29 Ward), Pyi Htaung Su Main Road, North Dagon Township, Yangon, Myanmar.,
                                Dagon, Myanmar, 11421
                            </h6>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-4 mb-20">
                        <div class="contact-info text-center">
                            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                            <h4>Email</h4>
                            <h6 class="text-gray">
                                info@sunpowerdragon-mm.com
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section data-bg-img="{{ asset('assets/images/pattern/p4.png') }}">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Contact</span> Us</h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="contact-form-transparent"
                            action="{{ route('contact.index') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            @if (session('key') == 'jp')
                                                名前
                                            @else
                                                Name
                                            @endif
                                            <small>*</small>
                                        </label>
                                        <input name="form_name" class="form-control" type="text" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            @if (session('key') == 'jp')
                                                Eメール
                                            @else
                                                Email
                                            @endif
                                            <small>*</small>
                                        </label>
                                        <input name="form_email" class="form-control required email" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            @if (session('key') == 'jp')
                                                件名
                                            @else
                                                Subject
                                            @endif
                                            <small>*</small>
                                        </label>
                                        <input name="form_subject" class="form-control required" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>
                                            @if (session('key') == 'jp')
                                                電話番号
                                            @else
                                                Phone
                                            @endif
                                        </label>
                                        <input name="form_phone" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    @if (session('key') == 'jp')
                                        具体的な内容
                                    @else
                                        Message
                                    @endif
                                </label>
                                <textarea name="form_message" class="form-control required" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block"
                                    data-loading-text="Please wait...">
                                    @if (session('key') == 'jp')
                                        今提出
                                    @else
                                        Submit Now
                                    @endif
                                </button>
                            </div>
                        </form>

                        <!-- Contact Form Validation-->
                        <script type="text/javascript">
                            $("#contact_form").validate({
                                submitHandler: function(form) {
                                    var form_btn = $(form).find('button[type="submit"]');
                                    var form_result_div = '#form-result';
                                    $(form_result_div).remove();
                                    form_btn.before(
                                        '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                    );
                                    var form_btn_old_msg = form_btn.html();
                                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                    $(form).ajaxSubmit({
                                        dataType: 'json',
                                        success: function(data) {
                                            if (data.status === 'true') {
                                                $(form).find('.form-control').val('');
                                            }
                                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                                            $(form_result_div).html(data.message).fadeIn('slow');
                                            setTimeout(function() {
                                                $(form_result_div).fadeOut('slow')
                                            }, 6000);
                                        }
                                    });
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
