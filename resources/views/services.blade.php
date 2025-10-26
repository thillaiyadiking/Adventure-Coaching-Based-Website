@extends('layouts.app')
@section('content')
    <section class="breadcumb-section">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12 center z-index1">
                    <h1 class="title">Services</h1>
                    <ul class="breadcumb-list flex-five">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Services</span></li>
                    </ul>
                    <img class="bcrumb-ab" src="assets/images/page/mask-bcrumb.png" alt="">
                </div>
            </div>

        </div>
    </section>
    {{ $services }}
    <!-- Widget why chose us -->
    <section class="widget-feature2 services-h4">
        <div class="tf-container full">
            <div class="row">
                <div class="col-md-5 relative">
                    <div class="image-feature2 relative">
                        <img src="{{ asset('storage/' . $services->service_attachment) }}" alt="Service Image">
                    </div>
                    <div class="exploring flex-five center">
                        <span class="font-yes text-white ">Never stop
                            Exploring</span>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="content-feature2">
                        <div class="mb-60">
                            <span class="sub-title-heading text-main font-yes fs-28-46 wow fadeInUp animated">
                                Explore the world
                            </span>
                            <h2 class="title-heading mb-18 wow fadeInUp animated">
                                {{ $services->title }}

                                <span class="text-gray font-yes">?</span>
                            </h2>
                            <p class="des wow fadeInUp animated">
                                {{ $services->description }}
                            </p>
                        </div>

                        <div class="row">

                            @foreach ($services->offers as $item)
                                <div class="col-md-6">
                                    <div class="cheackmark flex mb-70">
                                        <div class="icon flex-five">
                                            <i class="icon-plane-1"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="mb-15 wow fadeInUp animated">
                                                <a href="#">
                                                    {{ $item['offer_title'] }}
                                                </a>
                                            </h5>
                                            <p class="des wow fadeInUp animated">
                                                {{ $item['offer_description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="col-md-6">
                                <div class="cheackmark flex mb-70">
                                    <div class="icon flex-five">
                                        <i class="icon-price-tag-1"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-15 wow fadeInUp animated"><a href="#">Low price & friendly</a>
                                        </h5>
                                        <p class="des wow fadeInUp animated">Welcome to our Print 128 web
                                            company that offers a wide </p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <div class="cheackmark flex mb-70">
                                    <div class="icon flex-five">
                                        <i class="icon-price-tag-1"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-15 wow fadeInUp animated"><a href="#">Low price & friendly</a>
                                        </h5>
                                        <p class="des wow fadeInUp animated">Welcome to our Print 128 web
                                            company that offers a wide </p>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <div class="cheackmark flex mb-70">
                                    <div class="icon flex-five">
                                        <i class="icon-price-tag-1"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="mb-15 wow fadeInUp animated"><a href="#">Low price & friendly</a>
                                        </h5>
                                        <p class="des wow fadeInUp animated">Welcome to our Print 128 web
                                            company that offers a wide </p>
                                    </div>
                                </div>
                               
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Widget why chose us -->
@endsection
