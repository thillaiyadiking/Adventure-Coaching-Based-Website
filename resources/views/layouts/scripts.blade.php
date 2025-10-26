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



<script>
    const page = window.location.pathname;

    const breadcrumb = document.querySelector('.breadcumb-section');

    breadcrumb.style.backgroundImage = "url({{ asset('app/images/page/mask-bcrumb.png') }})";
</script>
