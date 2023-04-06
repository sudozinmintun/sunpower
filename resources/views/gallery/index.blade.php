@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')

    <section class="page-title divider section-typo-light bg-img-center" data-tm-bg-img="{{ asset('data/gallery.JPG') }}">
        <div class="container pt-90 pb-90">
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
                        <nav role="navigation" class="breadcrumb-trail breadcrumbs">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-tm-bg-color="#f5f5f5">
        <div class="container">
            <div class="section-title text-center mb-30">
                <div class="row">
                    <div class="title-wrapper">
                        <h2 class="title">Our
                            <span class="text-theme-colored3">Gallery</span>
                        </h2>
                        <p>
                            @if (session('key') == 'jp')
                                ここでいくつかのアクティビティを確認しましょう。
                                <br>
                                イベント・活動・学生インタビュー
                            @else
                                WE'VE DONE LOTS OF WORK, LET’S CHECK SOME ACTIVITIES HERE.
                                <br>
                                EVENTS / ACTIVITIES / STUDENT INTERVIEW
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($galleries as $activitie)
                    @php
                        if (session('key') == 'jp') {
                            $title = $activitie->title_jp ?? '';
                        } else {
                            $title = $activitie->title_eng ?? '';
                        }
                    @endphp
                    <div class="col-md-12">
                        <div class="alert alert-dismissible alert-warning">
                            <strong>
                                @if (session('key') == 'jp')
                                    {!! $activitie->description_jp ?? '' !!}
                                @else
                                    {!! $activitie->description_eng ?? '' !!}
                                @endif
                            </strong>
                        </div>

                        <div id="product-gallery-holder-1111"
                            class="isotope-layout grid-4 gutter-15 clearfix lightgallery-lightbox">
                            <div class="isotope-layout-inner">
                                @php
                                    $values = explode(',', $activitie->gallery);
                                @endphp
                                @foreach ($values as $gallery)
                                    <div class="isotope-item cat1 cat3">
                                        <div class="isotope-item-inner">
                                            <div class="product">
                                                <div class="product-header">
                                                    <div class="thumb image-swap">
                                                        <img src="{{ $gallery }}"
                                                            class="product-main-image img-responsive img-fullwidth"
                                                            alt="product"
                                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">

                                                        <img src="{{ $gallery }}"
                                                            class="product-hover-image img-responsive img-fullwidth"
                                                            alt="product"
                                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                                    </div>
                                                    <div class="product-button-holder">
                                                        <ul class="shop-icons">
                                                            <li class="item">
                                                                <a href="{{ $gallery }}" class="button btn-quickview"
                                                                    title="Product quick view">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <p class="product-title">
                                                        {{ $title ?? '' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
