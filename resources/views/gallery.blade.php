@extends('layouts.app')

@section('content')
    <section class="breadcumb-section">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Gallery</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Gallery</span></li>
                    </ul>
                    <img class="bcrumb-ab" src="assets/images/page/mask-bcrumb.png" alt="">
                </div>
            </div>

        </div>
    </section>
    {{-- {{ $galleries }} --}}
    <section class="gallery-page pd-main">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid-gallery">


                        @foreach ($galleries as $item)
                            @foreach ($item->images as $img_key => $img)
                                <div class="item-{{ $img_key + 1 }}">
                                    <div class="tf-gallery">
                                        <img src="{{ asset('storage/' . $img) }}" alt="">
                                        <a href="{{ asset('storage/' . $img) }}" class="btn-gallery flex-five" data-fancybox="gallery">
                                            <i class="icon-Group-14"></i>
                                        </a>
                                        <div class="gallery-content">
                                            <h4 class="gallery-title text-white mb-10">{{ $item->title }}</h4>
                                            <p class="sub-title">{{ $item->subtitle }}</p>
                                            <span
                                                class="gallery-date">{{ optional($item->created_at)->format('F j, Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach


                        {{-- <div class="item-2">
                            <div class="tf-gallery">
                                <img src="{{ asset('assets/images/gallery/gallery6.jpg') }}" alt="">
                                <a href="{{ asset('assets/images/gallery/gallery6.jpg') }}" class="btn-gallery flex-five"
                                    data-fancybox="gallery">
                                    <i class="icon-Group-14"></i>
                                </a>
                                <div class="gallery-content">
                                    <h4 class="gallery-title text-white mb-10">Discovery Island</h4>
                                    <p class="sub-title">Art , Direction</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </div>

        </div>
    </section>

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


    <section class="mb--93 bg-1">
        <div class="tf-container">
            <div class="callt-to-action flex-two z-index3 relative">
                <div class="callt-to-action-content flex-three">
                    <div class="image">
                        <img src="assets/images/page/ready.png" alt="Image">
                    </div>
                    <div class="content">
                        <h2 class="title-call">Ready to adventure and enjoy natural</h2>
                        <p class="des">Lorem ipsum dolor sit amet, consectetur notted adipisicin</p>
                    </div>
                </div>
                <img src="assets/images/page/vector4.png" alt="" class="shape-ab">
                <div class="callt-to-action-button">
                    <a href="#" class="get-call">Let,s get started</a>
                </div>
            </div>
        </div>
        <div id="priceRange"></div>

    </section>
@endsection
