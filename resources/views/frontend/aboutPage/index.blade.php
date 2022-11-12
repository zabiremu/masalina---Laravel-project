@php
    $aboutData = App\Models\AboutPage::find(1);
    $AboutImage = App\Models\MultiImage::all();
    $allService = App\Models\Service::limit(4)->get();
    $allData = App\Models\Blog::with('blogCategory')->latest()->limit(3)->get();
@endphp

@extends('frontend.layout_master')
@section('title')
About Me - Personal Portfolio
@endsection
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">About me</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Me</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                @forelse ($AboutImage as $about)
                    <li>
                        <img src="{{ url($about->image_url) }}" alt="XD">
                    </li>
                @empty
                    <li>
                        <img src="{{ asset('uploads/istockphoto-1147544807-612x612.jpg') }}" alt="">
                    </li>
                @endforelse
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about about__style__two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about__image">
                        <img src="{{ url($aboutData->image_uri) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 - About me</span>
                            <h2 class="title">{{ $aboutData->title }}</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                            </div>
                            <div class="about__exp__content">
                                <p><span>{{ $aboutData->short_title }}</p>
                            </div>
                        </div>
                        <p class="desc">{{ $aboutData->short_dscription }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="about__info__wrap">
                        {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="about-tab" data-bs-toggle="tab"
                                    data-bs-target="#about" type="button" role="tab" aria-controls="about"
                                    aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills"
                                    type="button" role="tab" aria-controls="skills"
                                    aria-selected="false">Skills</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards"
                                    type="button" role="tab" aria-controls="awards"
                                    aria-selected="false">awards</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                    data-bs-target="#education" type="button" role="tab" aria-controls="education"
                                    aria-selected="false">education</button>
                            </li>
                        </ul> --}}
                        <h2 class="title">About us</h2>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel"
                                aria-labelledby="about-tab">
                                {!! $aboutData->long_dscription !!}
                            </div>
                            {{-- <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                <div class="about__skill__wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Communication</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">70%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Brain Storming</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%;"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">90%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Resourcefulness</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">50%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Figma</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">65%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Analytical Abilities</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">80%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Skeatch</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">45%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">User Research</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%;"
                                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">55%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Adobe Tools</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="percentage">85%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                <div class="about__award__wrap">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_01.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Best ux designer award in 2002</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_02.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">BBA final examination 2001</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_03.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">User research award 2020</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="assets/img/images/awards_04.png" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Dsigning award 2021</h5>
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour,</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education" role="tabpanel"
                                aria-labelledby="education-tab">
                                <div class="about__education__wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">DPR Engineering Dhaka University</h3>
                                                <span class="date">2004 – 2016</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour,There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered
                                                    alteration in some form, by injected humour.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Product Designer at google</h3>
                                                <span class="date">2021 – Present</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour,There are many variations of passages of Lorem Ipsum
                                                    available.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Computer Science - england</h3>
                                                <span class="date">2008 – 2012</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour,There are many variations of passages of Lorem Ipsum
                                                    available.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">Pro product design with udemey</h3>
                                                <span class="date">2016 - 2020</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour,There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered
                                                    alteration in some form, by injected humour.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services__style__two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section__title text-center">
                        <span class="sub-title">02 - my Services</span>
                        <h2 class="title">Provide awesome service</h2>
                    </div>
                </div>
            </div>
            <div class="services__style__two__wrap">
                <div class="row gx-0">

                    @foreach ($allService as $service)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                <img src="{{ url($service->image_url)}}g" alt="">
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="{{ route('service.details', $service->id) }}">{{ $service->title }}</a></h3>
                                <p>{!! Str::limit($service->details,200, '...') !!}</p>
                                <a href="{{ route('service.details', $service->id) }}" class="services__btn"><i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial testimonial__style__two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="testimonial__wrap">
                        <div class="section__title text-center">
                            <span class="sub-title">06 - Client Feedback</span>
                            <h2 class="title">Some happy clients feedback</h2>
                        </div>
                        <div class="testimonial__two__active">
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share
                                        in our H.Spond Asset Management is made up of a team of expert, committed and
                                        experienced people with a passion for financial markets. Our goal is to achieve
                                        continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>WPBakery/ uSA</span>
                                        <div class="testi__avatar__img">
                                            <img src="{{ asset('frontend/assets/img/images/testi_avatar01.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share
                                        in our H.Spond Asset Management is made up of a team of expert, committed and
                                        experienced people with a passion for financial markets. Our goal is to achieve
                                        continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Adobe Photoshop</span>
                                        <div class="testi__avatar__img">
                                            <img src="{{ asset('frontend/assets/img/images/testi_avatar02.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__two__icons">
            <ul>
                <li><img src="assets/img/icons/testi_shape01.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape02.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape03.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape04.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape05.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape06.png" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    <section class="blog blog__style__two">
        <div class="container">
            <div class="row gx-0 justify-content-center">
                @foreach ($allData as $item )
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            <a href="{{ route('blog.details', $item->id) }}"><img src="{{ url($item->blog_image_url) }}"
                                    alt=""></a>
                            <div class="blog__post__tags">
                                <a href="{{ route('blog.cat', $item->blog_category_id) }}">{{ $item->blogCategory->blog_category }}</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                            <h3 class="title"><a href="{{ route('blog.details', $item->id) }}">{{ $item->blog_title }}</a></h3>
                            <a href="{{ route('blog.details', $item->id) }}" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="blog__button text-center">
                <a href="{{ route('all.blogs') }}" class="btn">more blog</a>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
