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

                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <h2 class="mt-0 line-height-1 text-center">
                        @if (session('key') == 'jp')
                            最新
                            <span class="text-theme-colored3">
                                ニュース
                            </span>
                        @else
                            Latest
                            <span class="text-theme-colored3">
                                News
                            </span>
                        @endif
                    </h2>
                </div>

                <div class="col-md-9 blog-pull-right">
                    @foreach ($news as $new)
                        <a href="{{ route('news.show', $new->id) }}">
                            <div class="upcoming-events bg-white-f3 mb-20 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay="0.3s">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 pr-0 pr-sm-15">
                                        <div class="thumb p-15">
                                            <img class="img-fullwidth" src="{{ $new->photo }}" alt="...">
                                        </div>
                                    </div>

                                    <div class="col-sm-8 col-md-8 col-lg-8 pl-0 pl-sm-15">
                                        <div class="event-details p-15 mt-20">
                                            <div>
                                                <i class="fa fa-clock-o mr-5"></i>
                                                {{ $new->upload_date ?? '' }}
                                            </div>
                                            <h4 class="media-heading text-uppercase font-weight-500">
                                                @if (session('key') == 'jp')
                                                    {{ $new->title_jp ?? '' }}
                                                @else
                                                    {{ $new->title_eng ?? '' }}
                                                @endif
                                            </h4>
                                            <p style="text-align: justify">
                                                @if (session('key') == 'jp')
                                                    {!! Str::limit($new->description_jp ?? '', 200) !!}
                                                @else
                                                    {!! Str::limit($new->description_eng ?? '', 200) !!}
                                                @endif
                                            </p>

                                            <a href="{{ route('news.show', $new->id) }}"
                                                class="btn btn-flat btn-dark btn-theme-colored btn-sm">
                                                @if (session('key') == 'jp')
                                                    詳細
                                                @else
                                                    Details
                                                @endif
                                                <i class="fa fa-angle-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="col-md-3">
                    @include('layouts.quick_link')
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
