@extends('layouts.main')
@section('title', '- Contact Us')
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
                        <h2 class="text-uppercase font-28 mt-0">
                            <span class="text-theme-colored">
                                Contact
                            </span>
                            Us
                        </h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">

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
                                        <input name="name" class="form-control" type="text"
                                            value="{{ old('name') }}">
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
                                        <input name="phone" class="form-control" type="text"
                                            value="{{ old('phone') }}">
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

                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block">
                                    @if (session('key') == 'jp')
                                        今提出
                                    @else
                                        Submit Now
                                    @endif
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
