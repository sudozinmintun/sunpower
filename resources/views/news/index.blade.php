@extends('layouts.main')
@section('title', '- News')
@section('content')

    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="{{ asset('data/10.jpg') }}">
        <div class="container pt-200 pb-200">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">
                            @if (session('key') == 'jp')
                                新着情報
                            @else
                                Update Information
                            @endif
                        </h2>
                        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                            <br><br>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-blog bg-img-cover bg-img-center" data-tm-bg-img="{{ asset('assets/images/bg/p2.jpg') }}"
        style="margin-top: 5px;">
        <div class="container pb-90">
            <div class="section-title">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                @if (session('key') == 'jp')
                                    <h2 class="title">
                                        最新
                                        <span class="text-theme-colored3">
                                            ニュース
                                        </span>
                                    </h2>
                                @else
                                    <h2 class="title">
                                        Letest
                                        <span class="text-theme-colored3">
                                            News
                                        </span>
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="row">
                    @foreach ($news as $new)
                        <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <a href="{{ route('news.show', $new->id) }}">
                                <div class="blog-style1-current-theme">
                                    <article class="post">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                <img class="img-responsive img-fullwidth" src="{{ $new->photo }}"
                                                    alt=""
                                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <div class="header-wrapper d-flex">
                                                <h4 class="entry-title">
                                                    <a class="text-theme-colored4" href="{{ route('news.show', $new->id) }}"
                                                        style="font-size: 20px;">
                                                        @if (session('key') == 'jp')
                                                            {{ $new->title_jp ?? '' }}
                                                        @else
                                                            {{ $new->title_eng ?? '' }}
                                                        @endif
                                                    </a>
                                                </h4>
                                            </div>

                                            <p class="mt-10">
                                                @if (session('key') == 'jp')
                                                    {!! Str::limit($new->description_jp ?? '', 200) !!}
                                                @else
                                                    {!! Str::limit($new->description_eng ?? '', 200) !!}
                                                @endif
                                            </p>
                                        </div>
                                        <div class="bg-theme-colored1 text-center p-10">
                                            <span class="text-white mr-15">
                                                <i class="fas fa-share-alt text-white" data-tm-margin-right="8px"></i>
                                                24 Share
                                            </span>

                                            <span class="text-white mr-15">
                                                <i class="fa fa-calendar text-white" data-tm-margin-right="8px"></i>
                                                {{ $new->upload_date ?? '' }}
                                            </span>

                                            <span class="text-white">
                                                <i class="far fa-eye text-white" data-tm-margin-right="8px"></i>
                                                {{ $new->view ?? 0 }}
                                                @if ($new->view == 1)
                                                    View
                                                @else
                                                    Views
                                                @endif
                                            </span>
                                        </div>
                                    </article>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
