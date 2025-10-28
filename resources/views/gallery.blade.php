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


                        @if($galleries->isNotEmpty())
                            @foreach ($galleries as $item)
                                @if($item->images && is_array($item->images))
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
                                @endif
                            @endforeach
                        @else
                            <div class="no-images">
                                <p>No images available in the gallery.</p>
                            </div>
                        @endif


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

    
@endsection
