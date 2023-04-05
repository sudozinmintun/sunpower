@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')
    <section class="inner-header divider parallax overlay-white-8" data-bg-img="{{ asset('data/gallery.JPG') }}">
        <div class="container pt-200 pb-200">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">
                            @if (session('key') == 'jp')
                                Gallery
                            @else
                                Gallery
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="mt-0 line-height-1 text-center">
                        @if (session('key') == 'jp')
                            私たちのギ
                            <span class="text-theme-colored3">
                                ャラリーと活動
                            </span>
                        @else
                            Our Gallery &
                            <span class="text-theme-colored3">
                                Activities
                            </span>
                        @endif
                    </h2>
                    <p class="text-center">
                        @if (session('key') == 'jp')
                            Gallery
                        @else
                            WE'VE DONE LOTS OF WORK, LET’S CHECK SOME ACTIVITIES HERE.
                            <br>
                            EVENTS / ACTIVITIES / STUDENT INTERVIEW
                        @endif
                    </p>
                </div>

                @foreach ($galleries as $activitie)
                    @php
                        if (session('key') == 'jp') {
                            $title = $activitie->title_jp ?? '';
                        } else {
                            $title = $activitie->title_eng ?? '';
                        }
                    @endphp
                    <div class="col-md-12">
                        <div class="heading-line-bottom">
                            <h4 class="heading-title">
                                {{ $title ?? '' }}
                            </h4>
                        </div>
                        <div class="gallery-isotope default-animation-effect grid-4 gutter-small clearfix"
                            data-lightbox="gallery">
                            @php
                                $values = explode(',', $activitie->gallery);
                            @endphp
                            @foreach ($values as $gallery)
                                <div class="gallery-item">
                                    <a href="{{ $gallery }}" data-lightbox="gallery-item" title="{{ $title ?? '' }}">
                                        <img class="wow fadeInUp" src="{{ $gallery }}" alt=""
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;"
                                            data-wow-duration="1s" data-wow-delay="0.3s">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
@section('script')
@endsection
