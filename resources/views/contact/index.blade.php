@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')

    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="{{ asset('data/contact.jpeg') }}">
        <div class="container pt-90 pb-90">
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
                        <nav role="navigation" class="breadcrumb-trail breadcrumbs">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="divider" data-tm-bg-img="{{ asset('assets/images/pattern/p4.png') }}">
        <div class="container">
            <div class="row pt-30">
                <div class="col-lg-7">
                    <h2 class="mt-0 mb-0">
                        @if (session('key') == 'jp')
                            何か質問がある？
                        @else
                            Have any Questions?
                        @endif
                    </h2>
                    <p class="font-size-20">
                        @if (session('key') == 'jp')
                            お問い合わせいただく際は、お手数ですが以下のフォームに必要事項をご入力の上、<br>「入力内容を確認する」ボタンを押してください。
                        @else
                            If you would like to contact us, please fill in the necessary information in the form
                            below.
                            Please press the "Confirm the input contents" button.
                        @endif
                    </p>

                    <form id="create-form" class="contact-form-transparent" action="{{ route('contact.index') }}"
                        method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        @if (session('key') == 'jp')
                                            名前
                                        @else
                                            Name
                                        @endif
                                        <small>*</small>
                                    </label>
                                    <input name="name" class="form-control" type="text" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        @if (session('key') == 'jp')
                                            Eメール
                                        @else
                                            Email
                                        @endif
                                        <small>*</small>
                                    </label>
                                    <input name="email" class="form-control required email" type="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        @if (session('key') == 'jp')
                                            件名
                                        @else
                                            Subject
                                        @endif
                                        <small>*</small>
                                    </label>
                                    <input name="subject" class="form-control required" type="text"
                                        value="{{ old('subject') }}">
                                    @error('subject')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>
                                        @if (session('key') == 'jp')
                                            電話番号
                                        @else
                                            Phone
                                        @endif
                                    </label>
                                    <input name="phone" class="form-control" type="text" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label>
                                        @if (session('key') == 'jp')
                                            具体的な内容
                                        @else
                                            Message
                                        @endif
                                    </label>
                                    <textarea name="message" class="form-control required" rows="5">{{ old('message') }}</textarea>
                                </div>
                                @error('message')
                                    <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit"
                                class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                                @if (session('key') == 'jp')
                                    今提出
                                @else
                                    Submit Now
                                @endif
                            </button>

                            <button type="reset"
                                class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                                Reset
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5">
                    <h3 class="mt-0">Get in touch with us</h3>
                    <p>
                        @if (session('key') == 'jp')
                            採用、欠員、またはその他について質問がある場合は、私たちのチームがすべての質問に答える準備ができています.
                        @else
                            If you have any queries about recruitments, vacancies, or anything else, our team is ready to
                            response all your queries.
                        @endif
                    </p>

                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon"> <i class="flaticon-contact-044-call-1"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Phone</h5>
                                <div class="content">
                                    <a href="tel:09 269 101 211">
                                        09 269 101 211
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon">
                                    <i class="flaticon-contact-043-email-1"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Email</h5>
                                <div class="content">
                                    <a href="mailto:info@sunpowerdragon-mm.com">
                                        info@sunpowerdragon-mm.com
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon">
                                    <i class="flaticon-contact-025-world"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Address</h5>
                                <div class="content">
                                    No.981, GA (29 Ward), Pyi Htaung Su Main Road, North Dagon Township, Yangon, Myanmar.,
                                    Dagon, Myanmar, 11421
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <ul class="styled-icons icon-dark icon-sm icon-circled mt-20">
                        <li><a href="#" data-tm-bg-color="#3B5998"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" data-tm-bg-color="#02B0E8"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" data-tm-bg-color="#D9CCB9"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" data-tm-bg-color="#D71619"><i class="fab fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
