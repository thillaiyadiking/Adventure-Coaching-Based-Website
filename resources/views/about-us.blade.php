@extends('layouts.app')
@section('content')
    <section class="breadcumb-section">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">About Us</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="index.html">Home</a></li>
                        <li><span>About Us</span></li>
                    </ul>
                    <img class="bcrumb-ab" src="assets/images/page/mask-bcrumb.png" alt="">
                </div>
            </div>

        </div>
    </section>
    {{-- {{ $about_us->banner_image }} --}}
    <!-- Widget About Us -->
    <section class="about-us-h4">
        <div class="tf-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-about-h4-wrap relative">
                        @if($about_us)
                            <div class="image-about-item relative about-wrap-left">
                                <img src="{{ asset('storage/' . $about_us->back_image) }}" alt="image" style="width: 90%">
                                <img src="assets/images/page/shape5.1.png" alt="image" class="shape-about-h4">
                                <span class="quote">
                                    {{ $about_us->text_in_image_tag }}
                                </span>

                            </div>
                            <div class="image-about-item relative about-wrap-right">
                                <img src="{{ asset('storage/' . $about_us->front_image) }}" alt="image" style="width: 90%">
                                <img src="assets/images/page/shape5.1.png" alt="image" class="shape-about-h4">

                            </div>
                            <div class="box-year center">
                                <span class="number">{{ $about_us->years_of_experience }}</span>
                                <p>{{ $about_us->years_of_experience_text }}</p>
                            </div>
                        @else
                            <div class="no-data">
                                <p>About Us data not available.</p>
                            </div>
                        @endif

                    </div>

                </div>
                <div class="col-md-6 inner-content-about">
                    @if($about_us)
                        <div class="mb-30">
                            <span class="sub-title-heading text-main font-yes fs-28-46">
                                Explore the
                                world</span>
                            <h2 class="title-heading mb-18">
                                {{ $about_us->title }}
                                {{-- <span class="text-gray font-yes">
                                    adventure
                                </span> --}}
                            </h2>
                            <p class="des">
                                {{ $about_us->description }}
                            </p>
                        </div>
                        <div class="flex-three btn-wrap-about ">
                            <a href="#" class="btn-main">
                                <p class="btn-main-text">
                                    {{ $about_us->more_about_button_text }}
                                </p>
                                <p class="iconer">
                                    <i class="icon-arrow-right"></i>
                                </p>
                            </a>
                            <div class="profile flex-three">
                                <div class="image">
                                    <img src="{{ asset('storage/' . $about_us->profile_image) }}" alt="Profile Image">
                                </div>
                                <div class="content">
                                    {{ $about_us->name_of_founder }}

                                    <span class="text-main">
                                        {{ $about_us->role }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="no-data">
                            <p>About Us content not available.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Widget About Us -->

    <!-- Widget Video -->
    <section class="widget-video-about" style="margin-top: 10rem">
        <div class="tf-container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="video-h4-widget relative overflow-hidden mb--14em">
                        <div class="video-wrap">
                            <a href="{{ asset($about_us->video_url) }}"
                                class="video-box flex-five z-index3 relative widget-videos">
                                <i class="icon-Polygon-4"></i>
                            </a>
                        </div>
                        <P class="font-yes text-white center text-video z-index3 relative">Watch Video</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Widget Video -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  

    <section class="brand-logo-widget bg-4">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper brand-logo overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/page/brand-logo.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/page/brand-logo.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/page/brand-logo.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/page/brand-logo.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/page/brand-logo.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/page/brand-logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const videoWidget = document.querySelector('.video-h4-widget');
            if (!videoWidget) return;

            @if(!empty($about_us->video_background_image))
                videoWidget.style.backgroundImage = "url('{{ asset('storage/' . $about_us->video_background_image) }}')";
            @else
                // fallback image
                videoWidget.style.backgroundImage = "url('{{ asset('assets/images/page/video2.jpg') }}')";
            @endif
        });
    </script>
@endpush
