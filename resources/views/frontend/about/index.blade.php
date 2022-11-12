@php
    $AboutData = App\Models\AboutPage::find(1); 
    $AboutImage = App\Models\MultiImage::all(); 
@endphp

<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
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
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About me</span>
                        <h2 class="title">{{ $AboutData->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $AboutData->short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $AboutData->short_dscription }}</p>
                </div>
            </div>
        </div>
    </div>
</section>