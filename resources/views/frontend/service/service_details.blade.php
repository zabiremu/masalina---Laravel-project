@php
    $AboutImage = App\Models\MultiImage::all();
    $data1 = App\Models\Footer::find(1);
@endphp

@include('frontend.inc.header')
@include('frontend.inc.nav')

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">{{ $service->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
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

    <!-- services-details-area -->
    <section class="services__details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="services__details__thumb">
                        <img src="{{ url($service->image_url )}}" alt="">
                    </div>
                    <div class="services__details__content">
                        <h2 class="title">{{ $service->shot_title }}</h2>
                        <p>{!! $service->details !!}</p>
                        <div class="services__details__img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="services__sidebar">
                        <div class="widget">
                            <h5 class="title">Contact Information</h5>
                            <ul class="sidebar__contact__info">
                                <li><span>Address :</span>{{ $data1->address_details }}</li>
                                <li><span>Mail :</span> {{ $data1->email }}</li>
                                <li><span>Phone :</span>{{ $data1->number }}</li>
                            </ul>
                            <ul class="sidebar__contact__social">
                                <li><a href="{{ $data1->fb }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $data1->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $data1->behance }}"><i class="fab fa-behance"></i></a></li>
                                <li><a href="{{ $data1->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="{{ $data1->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- services-details-area-end -->
</main>
<!-- main-area-end -->

@include('frontend.inc.footer')
@include('frontend.inc.script')
