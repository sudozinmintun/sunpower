@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')
    <section class="inner-header divider parallax overlay-white-8" data-bg-img="{{ asset('data/10.jpg') }}">
        <div class="container pt-200 pb-200">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">
                            @if (session('key') == 'jp')
                                新着情報
                            @else
                                What's New
                            @endif
                        </h2>
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
                                                <i class="fa fa-clock-o mr-5 text-theme-colored"></i>
                                                {{ $new->upload_date ?? '' }}
                                            </span>

                                            <span class="mb-10 text-gray-darkgray mr-10 font-13">
                                                <i class="fa fa-heart-o mr-5 text-theme-colored"></i>
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
                                <div class="mt-30 mb-0">
                                    <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li>
                                            <a href="#" data-bg-color="#3A5795">
                                                <i class="fa fa-facebook text-white"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-bg-color="#55ACEE">
                                                <i class="fa fa-twitter text-white"></i>
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
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a class="post-thumb" href="{{ route('news.show', $new->id) }}">
                                        <img src="{{ $new->photo }}" alt=""
                                            style="width: 70px; height: 90px; background-size: center; object-fit: cover;">
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
