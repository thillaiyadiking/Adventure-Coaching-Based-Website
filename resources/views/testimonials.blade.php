@extends('layouts.app')
@section('content')
    <section class="breadcumb-section">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Testimonials</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Testimonials</span></li>
                    </ul>
                    <img class="bcrumb-ab" src="assets/images/page/mask-bcrumb.png" alt="">
                </div>
            </div>

        </div>
    </section>
    {{ $testimonials }}
    <!-- Widget Testimonial -->
    <section class="testimonial-section-h4 bg-1">
        <div class="tf-container full">
            <div class="row">
                <div class="col-md-7">
                    <div class="content">
                        <div class="mb-30">
                            <span class="sub-title-heading text-main fs-28-46 font-yes  wow fadeInUp animated">
                                Explore the world</span>
                            <h2 class="title-heading  wow fadeInUp animated">
                                {{ $testimonials->title }}
                                {{-- <span class="font-yes text-gray">Feedback</span>
                                Here --}}
                            </h2>
                        </div>
                        <div class="swiper mySwiper222 overflow-hidden relative">
                            <div class="swiper-wrapper">

                                @foreach ($testimonials->detailed_testimonials ?? [] as $detail)
                                    <div class="swiper-slide">
                                        <div class="widget-testimonial-style5">
                                            <p class="des">
                                                {{ $detail['review'] }}
                                            </p>
                                            <div class="flex-two">
                                                <div class="flex-three relative">
                                                    <div class="image-avata">
                                                        <img src="{{ asset('storage/' . $detail['profile_pic']) }}"
                                                            alt="Service Image">
                                                    </div>
                                                    <div class="content-testimonial">
                                                        <h6 class="title">
                                                            {{ $detail->name ?? ($detail['name'] ?? 'Anonymous') }}
                                                        </h6>
                                                        <span class="job">
                                                            {{ $detail['role'] }}
                                                        </span>

                                                    </div>
                                                </div>
                                                <div class="start">
                                                    @php $stars = (int)($detail->rating ?? $detail['stars'] ?? 5); @endphp
                                                    @for ($i = 0; $i < $stars; $i++)
                                                        <i class="icon-Star"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="gallery-testimonial-h4 relative">
                        <div thumbsSlider="" class="swiper mySwiperGalllery overflow-hidden">
                            <div class="swiper-pagination"></div>
                            <div class="swiper-wrapper">

                                @foreach ($testimonials->detailed_testimonials ?? [] as $detail)
                                    <div class="swiper-slide">
                                        <div class="image">
                                            <img src="{{ isset($detail['profile_pic']) || isset($detail->profile_pic) ? asset('storage/' . ($detail['profile_pic'] ?? $detail->profile_pic)) : asset('assets/images/testimonial/avt4-3.jpg') }}"
                                                alt="{{ $detail->name ?? ($detail['name'] ?? 'Image') }}">
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>

    </section>
    <!-- Widget Testimonial -->
@endsection
