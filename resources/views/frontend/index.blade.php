@php
    $AboutImage = App\Models\MultiImage::all(); 
@endphp
@extends('frontend.layout_master')
@section('title')
Home - Personal Portfolio 
@endsection
@section('content')
<!-- banner-area -->
@include('frontend.home_slide.index')
<!-- banner-area-end -->

<!-- about-area -->
@include('frontend.about.index')
<!-- about-area-end -->

<!-- services-area -->
@include('frontend.service.service')
<!-- services-area-end -->

<!-- work-process-area -->
<section class="work__process">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">03 - Working Process</span>
                    <h2 class="title">A clear product design process is the basis of success</h2>
                </div>
            </div>
        </div>
        <div class="row work__process__wrap">
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 01</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon01.png')}}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon01.png')}}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Discover</h4>
                        <p>Initial ideas or inspiration & Establishment of user needs.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 02</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon02.png')}}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon02.png')}}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Define</h4>
                        <p>Interpretation & Alignment of findings to project objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 03</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon03.png')}}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon03.png')}}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Develop</h4>
                        <p>Design-Led concept and Proposals hearted & assessed</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 04</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon04.png')}}" alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon04.png')}}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Deliver</h4>
                        <p>Process outcomes finalised & Implemented</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-process-area-end -->

<!-- portfolio-area -->
@include('frontend.protfolio.homePagePortfolio.index')
<!-- portfolio-area-end -->

<!-- partner-area -->
<section class="partner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="partner__logo__wrap">
                    @forelse ($AboutImage as $about )
                    <li>
                        <img class="light" src="{{ url($about->image_url) }}" alt="XD">
                        <img class="dark" src="{{ url($about->image_url) }}" alt="XD">
                    </li>    
                    @empty
                        <li>
                            <img class="light" src="{{ asset('uploads/istockphoto-1147544807-612x612.jpg') }}" alt="">
                        </li>
                    @endforelse
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="partner__content">
                    <div class="section__title">
                        <span class="sub-title">05 - partners</span>
                        <h2 class="title">I proud to have collaborated with some awesome companies</h2>
                    </div>
                    <p>I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>
                    <a href="{{ route('contact') }}" class="btn">Start a conversation</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- partner-area-end -->



<!-- blog-area -->
@include('frontend.blog.home_blog')
<!-- blog-area-end -->

<!-- contact-area -->
{{-- <section class="homeContact">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">07 - Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form action="#">
                            <input type="text" placeholder="Enter name*">
                            <input type="email" placeholder="Enter mail*">
                            <input type="number" placeholder="Enter number*">
                            <textarea name="message" placeholder="Enter Massage*"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- contact-area-end -->

@endsection