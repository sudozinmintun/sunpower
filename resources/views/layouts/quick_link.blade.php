<div class="sidebar sidebar-left mt-sm-30">
    <div class="widget widget-brochure-box clearfix">

        <a class="brochure-box brochure-box-theme-colored1" href="{{ route('home') }}"
            style="background-image: linear-gradient(to right, #cc9900, #ffdf00, #eead0e);">
            <i class="fa fa-map brochure-icon" style="font-size: 19px;"></i>
            <h5 class="text" style="font-size: 19px;">
                @if (session('key') == 'jp')
                    ミャンマ—
                @else
                    Myanmar
                @endif
            </h5>
        </a>
        <hr>

        <a class="brochure-box brochure-box-theme-colored1" href="{{ route('education.index') }}"
            style="background-image: linear-gradient(to right, green , #A5D721);">
            <i class="fa fa-book brochure-icon" style="font-size: 19px;"></i>
            <h5 class="text" style="font-size: 19px;">
                @if (session('key') == 'jp')
                    教育
                @else
                    Education
                @endif
            </h5>
        </a>
        <hr>

        <a class="brochure-box brochure-box-theme-colored1" href="{{ route('training.index') }}"
            style="background-image: linear-gradient(to right, red , #E97452);">
            <i class="fa fa-user brochure-icon" style="font-size: 19px;"></i>
            <h5 class="text" style="font-size: 19px;">
                @if (session('key') == 'jp')
                    技能実習生
                @else
                    Technical Intern Trainee
                @endif
            </h5>
        </a>
        <hr>

        <a class="brochure-box brochure-box-theme-colored1" href="{{ route('specified_skilled') }}"
            style="background-image: linear-gradient(to right, blue , #58C0CD);">
            <i class="fa fa-users brochure-icon" style="font-size: 19px;"></i>
            <h5 class="text" style="font-size: 19px;">
                @if (session('key') == 'jp')
                    特定技能実習生
                @else
                    Specified Skilled Trainee
                @endif
            </h5>
        </a>
        <hr>

        <a class="brochure-box brochure-box-theme-colored1" href="{{ route('gallery.index') }}"
            style="background-image: linear-gradient(to right, #180806 , #4C231A);">
            <i class="fa fa-image brochure-icon" style="font-size: 19px;"></i>
            <h5 class="text" style="font-size: 19px;">
                @if (session('key') == 'jp')
                    Gallery
                @else
                    Gallery
                @endif
            </h5>
        </a>
        <hr>

        <a class="brochure-box brochure-box-theme-colored1" href="{{ route('news.index') }}"
            style="background-image: linear-gradient(to right, #EB5F33 , #F09533);">
            <i class="fa fa-newspaper brochure-icon" style="font-size: 19px;"></i>
            <h5 class="text" style="font-size: 19px;">
                @if (session('key') == 'jp')
                    新着情報
                @else
                    Update Information
                @endif
            </h5>
        </a>
        <hr>

        <a class="brochure-box brochure-box-theme-colored1" href="{{ route('services.index') }}"
            style="background-image: linear-gradient(to right, #EA70B7 , #EB6E9A);">
            <i class="fa fa-passport brochure-icon" style="font-size: 19px;"></i>
            <h5 class="text" style="font-size: 19px;">
                @if (session('key') == 'jp')
                    視察と入国ビザ
                @else
                    Sightseen and <br> Entry visa services
                @endif
            </h5>
        </a>
        <hr>

    </div>
</div>
