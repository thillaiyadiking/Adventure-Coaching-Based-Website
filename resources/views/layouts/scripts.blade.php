<script src="{{ asset('app/js/jquery.min.js') }}"></script>
<script src="{{ asset('app/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('app/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('app/js/swiper.js') }}"></script>
<script src="{{ asset('app/js/plugin.js') }}"></script>
<script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
{{-- <script src="{{ asset('app/js/price-ranger.js') }}"></script> --}}
<script src="{{ asset('app/js/textanimation.js') }}"></script>
<script src="{{ asset('app/js/wow.min.js') }}"></script>
<script src="{{ asset('app/js/shortcodes.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<!-- Javascript -->
<script src="{{ asset('app/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('app/js/map.min.js') }}"></script>
<script src="{{ asset('app/js/map.js') }}"></script>

{{-- <img src="{{ asset('storage/' . $banner_image_path) }}" alt="image" style="width: 90%"> --}}

<script>
    const breadcrumb = document.querySelector('.breadcumb-section');
    @if (!empty($banner_image_path))
        if (breadcrumb) {
            breadcrumb.style.backgroundImage = "url('{{ asset('storage/' . $banner_image_path) }}')";
        }
    @endif
</script>
