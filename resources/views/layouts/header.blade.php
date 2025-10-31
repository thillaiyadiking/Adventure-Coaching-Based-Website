<header class="main-header header-style1 flex">
    <!-- Header Lower -->
    <div id="header">
        <div class="header-top">
            <div class="header-top-wrap flex-two">
                <div class="header-top-right">
                    <ul class=" flex-three">
                        <li class="flex-three">
                            <i class="icon-day"></i>
                            <span>{{ date('l, M d, Y') }}</span>

                        </li>
                        <li class="flex-three">
                            <i class="icon-mail"></i>

                            @if (!empty($CompanyContacts->email_addresses) && is_iterable($CompanyContacts->email_addresses))
                                @php
                                    $firstEmail = null;

                                    foreach ($CompanyContacts->email_addresses as $email) {
                                        $firstEmail = is_array($email)
                                            ? $email['email'] ?? null
                                            : $email->email ?? null;
                                        if ($firstEmail) {
                                            break;
                                        }
                                    }
                                @endphp

                                @if ($firstEmail)
                                    <a href="mailto:{{ $firstEmail }}" style="color: white">{{ $firstEmail }}</a>
                                @else
                                    <span>-</span>
                                @endif
                            @else
                                <span>-</span>
                            @endif
                        </li>

                        <li class="flex-three">
                            <i class="icon-phone"></i>
                            @php
                                $phones = $CompanyContacts->phone_numbers ?? [];
                                if (!is_array($phones)) {
                                    $phones = json_decode($phones, true) ?? [];
                                }

                                $firstPhone = null;
                                foreach ($phones as $phone) {
                                    $firstPhone = is_array($phone) ? implode('', $phone) : $phone;
                                    if ($firstPhone) {
                                        break;
                                    }
                                }
                            @endphp

                            @if ($firstPhone)
                                <a href="tel:{{ preg_replace('/\D/', '', $firstPhone) }}"
                                    style="color: white">{{ $firstPhone }}</a>
                            @else
                                <span>-</span>
                            @endif
                        </li>


                    </ul>
                </div>


                <div class="header-top-left flex-two">
                    <a href="{{ route('contact-us') }}" class="booking">
                        <i class="icon-19"></i>
                        <span>Booking Now</span>
                    </a>
                    <div class="follow-social flex-two">
                        <span>Follow Us :</span>
                        <ul class="flex-two">
                            @if($generals && $generals->social_media_links)
                                @foreach($generals->social_media_links as $link)
                                    <li><a href="{{ $link['url'] }}" {!! $link['icon'] ? 'title="' . $link['platform'] . '"' : '' !!}>{!! $link['icon'] ?: '<i class="icon-' . $link['platform'] . '"></i>' !!}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                </div>
            </div>

        </div>
        <div class="header-lower">
            <div class="tf-container full">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-container flex justify-space align-center">
                            <!-- Logo Box -->

                            <div class="logo-box">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo.png" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="nav-outer flex align-center">
                                <!-- Main Menu -->
                                <nav class="main-menu show navbar-expand-md">
                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li class="{{ request()->routeIs('services') ? 'current' : '' }}"><a
                                                    href="{{ route('services') }}">Services</a></li>
                                            <li class="{{ request()->routeIs('testimonials') ? 'current' : '' }}"><a
                                                    href="{{ route('testimonials') }}">Testimonials</a></li>
                                            <li class="{{ request()->routeIs('gallery') ? 'current' : '' }}"><a
                                                    href="{{ route('gallery') }}">Gallery</a></li>
                                            <li class="{{ request()->routeIs('contact-us') ? 'current' : '' }}"><a
                                                    href="{{ route('contact-us') }}">Contact</a></li>
                                            <li class="{{ request()->routeIs('about-us') ? 'current' : '' }}"><a
                                                    href="{{ route('about-us') }}">About Us</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                            <div class="header-account flex align-center">
                                {{-- <div class="language">
                                    <div class="nice-select" tabindex="0">
                                        <img src="assets/images/page/language.svg" alt=""><span
                                            class="current">English</span>
                                        <ul class="list">
                                            <li data-value class="option selected"><img
                                                    src="assets/images/page/language.svg" alt="">English
                                            </li>
                                            <li data-value="Vietnam" class="option"><img
                                                    src="assets/images/page/language.svg" alt="">Vietnam
                                            </li>
                                            <li data-value="German" class="option"><img
                                                    src="assets/images/page/language.svg" alt="">German
                                            </li>
                                            <li data-value="Russian" class="option"><img
                                                    src="assets/images/page/language.svg" alt="">Russian
                                            </li>
                                            <li data-value="Canada" class="option"><img
                                                    src="assets/images/page/language.svg" alt="">Canada
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                                {{-- <div class="currency">
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">USD</span>
                                        <ul class="list">
                                            <li data-value class="option selected">USD</li>
                                            <li data-value="vnd" class="option">VND</li>
                                            <li data-value="ero" class="option">ERO</li>
                                        </ul>
                                    </div>
                                </div> --}}
                                {{-- <div class="search-mobie relative">
                                    <div class="dropdown">
                                        <a type="button" class="show-search" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="icon-Vector5"></i>
                                        </a>
                                        <ul class="dropdown-menu top-search">
                                            <form action="https://themesflat.co/" id="search-bar-widget">
                                                <input type="text" placeholder="Search here...">
                                                <button type="button"><i class="icon-search-2"></i></button>
                                            </form>
                                        </ul>
                                    </div>
                                </div> --}}
                                <div class="icon-bar-header">
                                    <a href="#" class=" flex-three" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <i class="icon-Vector3"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="mobile-nav-toggler mobile-button">
                                <i class="icon-bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html">
                    <img src="assets/images/logo.png" alt=""></a></div>
            <div class="bottom-canvas">
                <div class="menu-outer">
                </div>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
