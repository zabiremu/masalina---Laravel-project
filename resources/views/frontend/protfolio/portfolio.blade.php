@php
    $allPortfolio = App\Models\Portfolio::paginate(3);
    $AboutImage = App\Models\MultiImage::all();
@endphp

@extends('frontend.layout_master')
@section('title')
    Portfolio - Personal Portfolio
@endsection
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Case Details</h2>
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

    <!-- portfolio-area -->
    <section class="portfolio__inner">
        <div class="container">
            <div class="row">

            </div>
            <div class="portfolio__inner__active">

                @foreach ($allPortfolio as $portfolio)
                    <div class="portfolio__inner__item grid-item cat-two cat-three">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-6 col-md-10">
                                <div class="portfolio__inner__thumb">
                                    <a href="{{ route('portfolioDetails', $portfolio->id) }}">
                                        <img src="{{ url($portfolio->image_url) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="portfolio__inner__content">
                                    <h2 class="">
                                        <a
                                            href="{{ route('portfolioDetails', $portfolio->id) }}">{{ $portfolio->short_title }}</a>
                                    </h2>
                                    <p>{!! Str::limit($portfolio->short_details, 200, '...') !!}</p>
                                    <a href="{{ route('portfolioDetails', $portfolio->id) }}" class="link">View Case
                                        Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-wrap">
                {{ $allPortfolio->links('vendor.pagination.custom') }}
            </div>
        </div>
    </section>
    <!-- portfolio-area-end -->
@endsection
