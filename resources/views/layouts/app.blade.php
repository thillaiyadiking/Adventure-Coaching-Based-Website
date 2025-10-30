<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">



<head>
    <meta charset="utf-8">
    <title>Elevate 360 - Adventures</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    {{-- CSS --}}
    @include('layouts.styles')

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favico.png">

</head>

<body class="body header-fixed ">

    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>

    <!-- /preload -->
    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            @include('layouts.header')
            <!-- End Main Header -->


            <main id="main">
                @yield('content')
            </main>

            @include('layouts.footer')

            <!-- Bottom -->
        </div>
        <!-- /#page -->
    </div>

    <!-- Modal Popup Bid -->
    <a id="scroll-top" class="button-go"></a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="logo-canvas">
                <img src="assets/images/logo.png" alt="image">
            </div>
            <p class="des">
                {{ $CompanyContacts->description ?? 'Company description not available.' }}
            </p>

            <ul class="canvas-info">
                <li class="flex-three">
                    <i class="icon-noun-mail-5780740-1"></i>
                    <p>
                        @if (!empty($CompanyContacts->email_addresses) && is_iterable($CompanyContacts->email_addresses))
                            @foreach ($CompanyContacts->email_addresses as $email)
                                @php
                                    $emailValue = is_array($email) ? $email['email'] ?? null : $email->email ?? null;
                                @endphp

                                @if ($emailValue)
                                    <a href="mailto:{{ $emailValue }}">{{ $emailValue }}</a>
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endif
                            @endforeach
                        @else
                            <span>No email available</span>
                        @endif
                    </p>

                </li>


                {{-- 📞 Phone Numbers --}}
                <li class="flex-three">
                    <i class="icon-Group-9"></i>
                    <p>
                        @php
                            $phones = $CompanyContacts->phone_numbers ?? [];
                            if (!is_array($phones)) {
                                $phones = json_decode($phones, true) ?? [];
                            }
                        @endphp
                        @forelse ($phones as $phone)
                            <a
                                href="tel:{{ preg_replace('/\D/', '', is_array($phone) ? implode('', $phone) : $phone) }}">
                                {{ is_array($phone) ? implode('', $phone) : $phone }}
                            </a>
                            @if (!$loop->last)
                                ,
                            @endif
                        @empty
                            <span>No phone number available</span>
                        @endforelse
                    </p>
                </li>

                {{-- 📍 Addresses --}}
                <li class="flex-three">
                    <i class="icon-Layer-19"></i>
                    <p>
                        @php
                            $addresses = $CompanyContacts->physical_addresses ?? [];
                            if (!is_array($addresses)) {
                                $addresses = json_decode($addresses, true) ?? [];
                            }
                        @endphp
                        @forelse ($addresses as $address)
                            {{ is_array($address) ? implode(', ', $address) : $address }}@if (!$loop->last)
                                ,
                            @endif
                        @empty
                            <span>No address available</span>
                        @endforelse
                    </p>
                </li>
            </ul>

        </div>
    </div>

    <!-- Javascript -->
    @include('layouts.scripts')

    @stack('scripts')

</body>

</html>
