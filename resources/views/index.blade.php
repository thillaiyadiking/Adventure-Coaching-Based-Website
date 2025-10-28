@extends('layouts.app')
@section('content')
    <!-- Widget Slider -->
    <section class=" relative overflow-hidden">
        <div class="slider-home2-image">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-home2">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @php
                                    $banner_images = $home->banner_images ?? [];
                                    if (is_string($banner_images)) {
                                        $decoded = json_decode($banner_images, true);
                                        if (json_last_error() === JSON_ERROR_NONE) {
                                            $banner_images = $decoded;
                                        }
                                    }
                                @endphp

                                @if (!empty($banner_images) && is_array($banner_images))
                                    @foreach ($banner_images as $banner_image)
                                        @php
                                            if (is_array($banner_image)) {
                                                $filePath = $banner_image['file'] ?? ($banner_image['url'] ?? '');
                                            } elseif (is_object($banner_image)) {
                                                $filePath = $banner_image->file ?? ($banner_image->url ?? '');
                                            } else {
                                                $filePath = (string) $banner_image;
                                            }
                                            $filePath = ltrim($filePath, '/');

                                            $src = '';
                                            if (preg_match('/^https?:\/\//i', $filePath)) {
                                                $src = $filePath;
                                            } elseif (
                                                !empty($filePath) &&
                                                \Illuminate\Support\Facades\Storage::disk('public')->exists($filePath)
                                            ) {
                                                $src = \Illuminate\Support\Facades\Storage::disk('public')->url(
                                                    $filePath,
                                                );
                                            } elseif (!empty($filePath)) {
                                                $src = asset($filePath);
                                            }
                                            if (empty($src)) {
                                                $src = asset('assets/images/slide/slide2.jpg');
                                            }

                                            // Determine if it's a video based on file extension
$isVideo = preg_match('/\.(mp4|webm|ogg|avi|mov)$/i', $filePath);
                                        @endphp
                                        <div class="swiper-slide">
                                            @if ($isVideo)
                                                <video src="{{ $src }}" class="image-slider-home2 relative" autoplay
                                                    muted loop playsinline alt="Video slider" width="100%"></video>
                                            @else
                                                <img src="{{ $src }}" class="image-slider-home2 relative"
                                                    alt="Image slider">
                                            @endif
                                        </div>
                                    @endforeach
                                @else
                                    {{-- <div class="swiper-slide">
                                        <img src="assets/images/slide/slide2.jpg" class="image-slider-home2 relative"
                                            alt="Image slider">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/slide/slide2.jpg" class="image-slider-home2 relative"
                                            alt="Image slider">
                                    </div> --}}
                                @endif
                            </div>
                            <div class="swiper-button-next next-slider2"></div>
                            <div class="swiper-button-prev prev-slider2"></div>
                        </div>
                    </div>
                </div>
                <!-- /.main-banner-wrapper -->
            </div>
        </div>
        <div class="slider-home2-content">
            <img src="assets/images/slide/mask-slide2.png" alt="Image" class="mask-slide2">
            <div class="tf-container">
                <div class="row">
                    <div class="col-lg-12 center relative z-index3">
                        <img src="assets/images/page/mask-bcrumb.png" alt="Image" class="mask-slide2-flan">
                        <span class="sub-title text-main font-yes fs-28-46 wow fadeInUp animated">Explore
                            the world</span>
                        <h1 class="banner-text title-slide text-white mb-45 wow fadeInUp animated">Tour
                            {{ $home->header_text }}
                        </h1>

                        <div class="tour-list wow fadeInUp animated">
                            <ul class="flex-five ">
                                @if (is_array($home->header_notes) || $home->header_notes instanceof \Illuminate\Support\Collection)
                                    @foreach ($home->header_notes as $note)
                                        <li>
                                            <i class="icon-Vector-5"></i>
                                            <span>
                                                @if (is_array($note))
                                                    {{ $note['note'] ?? ($note[0] ?? '') }}
                                                @elseif (is_object($note))
                                                    {{ $note->note ?? '' }}
                                                @else
                                                    {{ $note }}
                                                @endif
                                            </span>
                                        </li>
                                    @endforeach
                                @else
                                    {!! $home->header_notes !!}
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Widget Slider -->


    <!-- Widget Brand logo -->
    <section class="relative mt-53">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 relative center line-brand-logo mt-20 wow fadeInUp animated">
                    <div class="line"></div>
                    <p class="line-text">We’ve been mentioned in Below Brands</p>
                </div>
                <div class="col-lg-12 widget-brand-logo">
                    <div class="swiper brand-logo overflow-hidden">
                        <div class="swiper-wrapper">
                            @php
                                $logos = $home->brand_logos ?? ($brand_logos ?? []);
                                if (is_string($logos)) {
                                    $decoded = json_decode($logos, true);
                                    if (json_last_error() === JSON_ERROR_NONE) {
                                        $logos = $decoded;
                                    }
                                }
                            @endphp

                            @if (!empty($logos) && is_array($logos))
                                @foreach ($logos as $item)
                                    @php
                                        // support different shapes: string, array with 'file' or 'url', object with file/url
                                        if (is_array($item)) {
                                            $filePath = $item['file'] ?? ($item['url'] ?? '');
                                        } elseif (is_object($item)) {
                                            $filePath = $item->file ?? ($item->url ?? '');
                                        } else {
                                            $filePath = (string) $item;
                                        }
                                        $filePath = ltrim($filePath, '/');

                                        $src = '';
                                        // absolute http(s) url
                                        if (preg_match('/^https?:\/\//i', $filePath)) {
                                            $src = $filePath;
                                        } elseif (
                                            !empty($filePath) &&
                                            \Illuminate\Support\Facades\Storage::disk('public')->exists($filePath)
                                        ) {
                                            $src = \Illuminate\Support\Facades\Storage::disk('public')->url($filePath);
                                        } elseif (!empty($filePath)) {
                                            // fallback to asset path (could be a path like homes/logos/..., or an assets path)
                                            $src = asset($filePath);
                                        }
                                    @endphp

                                    @if (!empty($src))
                                        <div class="swiper-slide">
                                            <img src="{{ $src }}" alt="">
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/page/brand-logo.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/page/brand-logo.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/page/brand-logo.png') }}" alt="">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Widget Brand logo -->






    <!-- Widget destination -->
    <section class="widget-destination">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center m0-auto w-text-heading mb-40">
                        <span class="sub-title-heading text-main mb-15 fadeInUp wow">Explore the
                            world</span>
                        <h2 class="title-heading fadeInUp wow">We provide top tourist destinations</h2>
                    </div>
                </div>
            </div>
            <div class="grid-three-destination">
                @foreach ($home->summary_of_places ?? [] as $place)
                    @foreach ($place['images'] ?? [] as $image)
                        @php
                            $filePath = $image['file'] ?? ($image['url'] ?? '');
                            $filePath = ltrim($filePath, '/');
                            $imageSrc = '';
                            if (preg_match('/^https?:\/\//i', $filePath)) {
                                $imageSrc = $filePath;
                            } elseif (
                                !empty($filePath) &&
                                \Illuminate\Support\Facades\Storage::disk('public')->exists($filePath)
                            ) {
                                $imageSrc = \Illuminate\Support\Facades\Storage::disk('public')->url($filePath);
                            } elseif (!empty($filePath)) {
                                $imageSrc = asset($filePath);
                            }
                            if (empty($imageSrc)) {
                                $imageSrc = asset('assets/images/tour/tourh5.jpg');
                            }
                            $title = $image['place'] ?? ($place['title_head'] ?? 'Unknown Place');
                            $tourCount = ($image['days'] ?? 0) . ' Days';
                        @endphp

                        <div class="tf-widget-destination wow fadeInUp animated " data-wow-delay="0.1s">
                            <a href="single-destination.html" class="destination-imgae">
                                <span class="tour">{{ $tourCount }}</span>
                                <img src="{{ $imageSrc }}" alt="{{ $title }}">
                            </a>
                            <div class="destination-content">
                                <span class="nation">{{ $title }}</span>
                                <div class="flex-two btn-destination">
                                    <h6 class="title"><a href="single-destination.html">View all tours</a></h6>
                                    <a href="single-destination.html" class="flex-five btn-view">
                                        <i class="icon-Vector-32"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!-- Widget destination -->
    <!-- Widget Service -->
    <section class="widget-service">
        <div class="tf-container">
            <div class="row al-i-end mb-40">
                <div class="col-md-7">
                    <div class="">
                        <span class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Explore
                            the world</span>
                        <h2 class="title-heading wow fadeInUp animated">
                            {{-- Great opportunity for <br><span class="text-gray font-yes">adventure</span> & travels --}}
                            Summary of Services
                        </h2>
                    </div>
                </div>
                <div class="col-md-5">
                    {{-- <p class="wow fadeInUp animated">Pellentesque habitant morbi tristique senectus netus et
                        malesuada
                        fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit
                        enim feugiat mattis.
                    </p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-ld-12 relative ">
                    <div class="swiper serviceSwiper relative overflow-hidden pb-60">
                        <div class="swiper-wrapper">

                            @foreach ($home->summary_of_services ?? [] as $service)
                                @php
                                    // print_r($service);
                                @endphp
                                <div class="swiper-slide">
                                    <div class="tf-icon-box icon-box-style1 relative">
                                        <div class="icon">
                                            {!! $service['icon_url'] !!}
                                        </div>
                                        <div class="content">
                                            <h4 class="title-icon"><a href="#">{{ $service['title'] }}</a></h4>
                                            <p class="des-icon">{{ $service['description'] }}</p>
                                            {{-- <a href="#" class="icons-link">Booking Now
                                                <i class="icon-Path-77287-1"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Widget Service -->

    <!-- Widget Feature -->
    <section class="widget-feature pd-main relative">
        <img src="assets/images/page/shape5.png" alt="image" class="feature-shape">
        <div class="tf-container">
            <div class="row z-index3 relative">
                <div class="col-md-5">
                    <div class="image-feature-wrap relative ">
                        <div class="image-feature relative overflow-hidden">
                            @php
                                $overviewImage =
                                    $home->summary_of_overview['image_file'] ??
                                    ($home->summary_of_overview['image_url'] ?? '');
                                if (is_string($overviewImage)) {
                                    $filePath = ltrim($overviewImage, '/');
                                    $src = '';
                                    if (preg_match('/^https?:\/\//i', $filePath)) {
                                        $src = $filePath;
                                    } elseif (
                                        !empty($filePath) &&
                                        \Illuminate\Support\Facades\Storage::disk('public')->exists($filePath)
                                    ) {
                                        $src = \Illuminate\Support\Facades\Storage::disk('public')->url($filePath);
                                    } elseif (!empty($filePath)) {
                                        $src = asset($filePath);
                                    }
                                    if (empty($src)) {
                                        $src = asset('assets/images/page/explore2.jpg');
                                    }
                                } else {
                                    $src = asset('assets/images/page/explore2.jpg');
                                }
                            @endphp
                            <img src="{{ $src }}" alt="image" class="image">
                            <img src="assets/images/page/shape5.1.png" alt="image" class="shape-image">
                        </div>
                        <div class="exploring flex-five center">
                            <span class="font-yes text-white ">
                                Never stop Exploring
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content-feature-wrap">
                        <div class="mb-40">
                            <span class="sub-title-heading text-main font-yes fs-28-46 wow fadeInUp animated">
                                Explore the world</span>
                            <h2 class="title-heading mb-18 wow fadeInUp animated">
                                ️{{ $home->summary_of_overview['title'] ?? '' }}
                                {{-- Great opportunity for <br>
                                <span class="text-gray font-yes">adventure</span> & travels --}}
                            </h2>
                            <p class="des-heading wow fadeInUp animated">
                                {{ $home->summary_of_overview['description'] ?? '' }}
                            </p>
                        </div>
                        <div class="feature-list-wrap">
                            <div class="feature-list">
                                @foreach ($home->summary_of_overview['list'] ?? [] as $overview)
                                    <div class="feature-list-iteam flex-three">
                                        <div class="icon flex-five">
                                            {!! $overview['icon_url'] ?? '' !!}
                                        </div>
                                        <h6><a href="#">{{ $overview['title'] }}</a></h6>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- Widget Feature -->

@endsection
