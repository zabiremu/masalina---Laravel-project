@php
    $AboutImage = App\Models\MultiImage::all();
@endphp
@extends('frontend.layout_master')
@section('title')
    Blog - Personal Portfolio
@endsection
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Recent Article</h2>
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

    <!-- blog-area -->
    <section class="standard__blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @forelse ($blogData as $item)
                        <div class="standard__blog__post">
                            <div class="standard__blog__thumb">
                                <a href="{{ route('blog.details', $item->id) }}"><img src="{{ url($item->blog_image_url) }}" alt=""></a>
                            </div>
                            <div class="standard__blog__content">
                                <div class="blog__post__avatar">
                                    <div class="thumb">
                                    </div>
                                    <span><a href="{{ route('blog.details', $item->id) }}"></a></span>
                                </div>
                                <h2 class="title"><a
                                        href="{{ route('blog.details', $item->id) }}">{{ $item->blog_title }}</a></h2>
                                <p>{!! Str::limit($item->blog_details, 200, '...') !!}</p>
                                <ul class="blog__post__meta">
                                    <li><i class="fal fa-calendar-alt"></i>
                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>

                                </ul>
                            </div>
                        </div>
                    @empty
                        <div class="standard__blog__post">
                            <h2>No Blogs in this Category</h2>
                        </div>
                    @endforelse

                    {{-- @if (count($blogData) > 0) --}}
                    <div class="pagination-wrap">
                        {{ $blogData->links('vendor.pagination.custom') }}
                    </div>
                    {{-- @endif --}}
                </div>
                <div class="col-lg-4">
                    <aside class="blog__sidebar">

                        <div class="widget">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="rc__post">
                                @foreach ($blogData as $item)
                                    <li class="rc__post__item">
                                        <div class="rc__post__thumb">
                                            <a href="{{ route('blog.details', $item->id) }}"><img
                                                    src="{{ url($item->blog_image_url) }}"></a>
                                        </div>
                                        <div class="rc__post__content">
                                            <h5 class="title"><a
                                                    href="{{ route('blog.details', $item->id) }}">{{ $item->blog_title }}</a>
                                            </h5>
                                            <span class="post-date"><i class="fal fa-calendar-alt"></i>
                                                {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="sidebar__cat">
                                @foreach ($category as $item)
                                    <li class="sidebar__cat__item"><a
                                            href="{{ route('blog.cat', $item->id) }}">{{ $item->blog_category }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
