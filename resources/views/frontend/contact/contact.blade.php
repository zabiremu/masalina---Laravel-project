@php
    $AboutImage = App\Models\MultiImage::all();
    $contact = App\Models\Footer::findOrFail(1);
@endphp

@extends('frontend.layout_master')
@section('title')
Contact Me - Personal Portfolio
@endsection
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
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

    <!-- contact-map -->
    <div id="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
            allowfullscreen loading="lazy"></iframe>
    </div>
    <!-- contact-map-end -->

    <!-- contact-area -->
    <div class="contact-area">
        <div class="container">
            <form action="{{ route('contact.store') }}" class="contact__form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input name="name" type="text" placeholder="Enter your name*" required>
                    </div>
                    <div class="col-md-6">
                        <input name="email" type="email" placeholder="Enter your mail*" required>
                    </div>
                    <div class="col-md-6">
                        <input name="subject" type="text" placeholder="Enter your subject*" required>
                    </div>
                    <div class="col-md-6">
                        <input name="budget" type="text" placeholder="Your Budget*">
                    </div>
                </div>
                <textarea name="message" id="message" placeholder="Enter your massage*" required></textarea>
                <button type="submit" class="btn">send massage</button>
            </form>
        </div>
    </div>
    <!-- contact-area-end -->

    <!-- contact-info-area -->
    <section class="contact-info-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon01.png') }} " alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">{{ $contact->address }}</h4>
                            <span>{{ $contact->address_details }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon02.png') }} " alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Phone Number</h4>
                            <span>{{ $contact->number }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact__info">
                        <div class="contact__info__icon">
                            <img src="{{ asset('frontend/assets/img/icons/contact_icon03.png') }} " alt="">
                        </div>
                        <div class="contact__info__content">
                            <h4 class="title">Mail Address</h4>
                            <span>{{ $contact->email }}</span>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-area-end -->
@endsection
