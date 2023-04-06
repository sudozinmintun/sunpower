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

    <section>
        <div class="container" style="padding-top: 50px">
            <div class="row">
                <div class="col-md-9 pull-right flip sm-pull-none">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="{{ $new->photo }}" alt="" class="img-responsive img-fullwidth">
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                    <div class="media-body">
                                        <div class="event-content pull-left flip">
                                            <h3 class="entry-title text-black text-uppercase pt-0 mt-0">
                                                @if (session('key') == 'jp')
                                                    {{ $new->title_jp ?? '' }}
                                                @else
                                                    {{ $new->title_eng ?? '' }}
                                                @endif
                                            </h3>

                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                <i class="fa fa-calendar text-black" data-tm-margin-right="8px"></i>
                                                {{ $new->upload_date ?? '' }}
                                            </span>

                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                <i class="far fa-eye text-black" data-tm-margin-right="8px"></i>
                                                {{ $new->view ?? 0 }}
                                                @if ($new->view == 1)
                                                    View
                                                @else
                                                    Views
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-15">
                                    @if (session('key') == 'jp')
                                        {!! $new->description_jp ?? '' !!}
                                    @else
                                        {!! $new->description_eng ?? '' !!}
                                    @endif
                                </p>

                                <div class="mt-5 mb-0">
                                    <h5 class="float-start flip mt-0 mr-3 text-theme-colored1">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li>
                                            <a href="#" data-tm-bg-color="#3A5795">
                                                <i class="fab fa-facebook text-white"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-tm-bg-color="#55ACEE">
                                                <i class="fab fa-twitter text-white"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" data-tm-bg-color="#A11312">
                                                <i class="fab fa-google-plus text-white"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-3">
                    @include('layouts.quick_link')
                    <div class="widget">
                        <h5 class="widget-title line-bottom">
                            @if (session('key') == 'jp')
                                最新ニュース
                            @else
                                Latest News
                            @endif
                        </h5>
                        <div class="latest-posts">
                            @foreach ($news as $new)
                                <article class="post media-post clearfix"
                                    style="background-image: linear-gradient(to right, #D4A231 , #e4dcca); padding: 10px;">
                                    <a class="post-thumb" href="{{ route('news.show', $new->id) }}">
                                        <img src="{{ $new->photo }}" alt=""
                                            style="width: 80px; height: 80px; background-size: center; object-fit: cover;">
                                    </a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0">
                                            <a href="{{ route('news.show', $new->id) }}">
                                                @if (session('key') == 'jp')
                                                    {!! Str::limit($new->title_jp ?? '', 30) !!}
                                                @else
                                                    {!! Str::limit($new->title_eng ?? '', 30) !!}
                                                @endif
                                            </a>
                                        </h5>
                                        <p>
                                            @if (session('key') == 'jp')
                                                {!! Str::limit($new->description_jp ?? '', 30) !!}
                                            @else
                                                {!! Str::limit($new->description_eng ?? '', 30) !!}
                                            @endif
                                        </p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
