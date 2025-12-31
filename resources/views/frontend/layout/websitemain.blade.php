<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lamaira - Travel & Tour Booking Agency</title>
    <meta name="author" content="Cinderella">
    <meta name="description" content="Lamaira - Travel & Tour Booking Agency">
    <meta name="keywords" content="Lamaira - Travel & Tour Booking Agency">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo_l.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Manrope:wght@200..800&amp;family=Montez&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .fly-animation {
            width: 200px;
            bottom: 300%;
            left: -150%;
            transform: translateX(0);
            animation: fling-left 1.8s, fling-top 1.2s;
            animation-fill-mode: forwards;
        }

        @keyframes fling-left {
            form {
                left: -150%;
                transform: translateX(0);
            }

            to {
                left: 50%;
                transform: translateX(-50%);
            }
        }

        @keyframes fling-top {
            form {
                bottom: 300%;

            }

            to {
                bottom: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="travelBookingModal" tabindex="-1" aria-labelledby="travelModalLabel" aria-hidden="true" style="z-index: 99;">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="travelModalLabel">Travel Booking Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="travelBookingForm" novalidate>
                    @csrf
                    <div class="modal-body">
                        <!-- Error Alert -->
                        <div class="alert alert-danger d-none" id="errorAlert">
                            <ul id="errorList" class="mb-0"></ul>
                        </div>

                        <div class="row">
                            <!-- Full Name -->
                            <div class="col-md-6 mb-3">
                                <label for="full_name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                                <div class="invalid-feedback">Please enter your full name.</div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                                <small class="form-text text-muted">Required for sending quotes</small>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Phone Number -->
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number (optional)</label>
                                <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}">
                                <div class="invalid-feedback">Please enter a valid 10-digit phone number.</div>
                                <small class="form-text text-muted">For follow-up calls</small>
                            </div>

                            <!-- Preferred Destination -->
                            <div class="col-md-6 mb-3">
                                <label for="destination" class="form-label">Preferred Destination <span class="text-danger">*</span></label>
                                <select class="form-select" id="destination" name="destination" required>
                                    <option value="" selected disabled>Select destination</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Paris">Paris</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="invalid-feedback">Please select a destination.</div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Travel Dates -->
                            <div class="col-md-6 mb-3">
                                <label for="travel_from" class="form-label">Travel From <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="travel_from" name="travel_from" required>
                                <div class="invalid-feedback">Please select start date.</div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="travel_to" class="form-label">Travel To <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="travel_to" name="travel_to" required>
                                <div class="invalid-feedback">Please select end date.</div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Number of Travelers -->
                            <div class="col-md-6 mb-3">
                                <label for="travelers" class="form-label">Number of Travelers <span class="text-danger">*</span></label>
                                <select class="form-select" id="travelers" name="travelers" required>
                                    <option value="" selected disabled>Select number</option>
                                    <option value="1">1 (Solo)</option>
                                    <option value="2">2 (Couple)</option>
                                    <option value="Family">Family</option>
                                    <option value="Group">Group</option>
                                </select>
                                <div class="invalid-feedback">Please select number of travelers.</div>
                            </div>

                            <!-- Travel Type -->
                            <div class="col-md-6 mb-3">
                                <label for="travel_type" class="form-label">Travel Type <span class="text-danger">*</span></label>
                                <select class="form-select" id="travel_type" name="travel_type" required>
                                    <option value="" selected disabled>Select type</option>
                                    <option value="Honeymoon">Honeymoon</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="Family">Family</option>
                                    <option value="Luxury">Luxury</option>
                                    <option value="Budget">Budget</option>
                                </select>
                                <div class="invalid-feedback">Please select travel type.</div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit Booking Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal end -->

    <div class="cursor-follower"></div>
    <div class="slider-drag-cursor"><i class="fas fa-angle-left me-2"></i> DRAG <i class="fas fa-angle-right ms-2"></i>
    </div>

    <div id="preloader" class="preloader">
        {{-- <button class="th-btn preloaderCls">Cancel Preloader</button> --}}
        <div class="preloader-inner">
            {{-- <img src="{{ asset('assets/img/logo_l.png')}}" alt="" class="img-fluid w-50"> --}}
        </div>
        <div id="loader" class="th-preloader">
            <div class="animation-preloader position-relative">
                <img src="{{ asset('assets/img/air-travel.png') }}" alt="" class="fly-animation position-absolute">
                <div class="txt-loading" style="font-family: 'bookmania', sens-serif">
                    <span preloader-text="L" class="characters">L</span>
                    <span preloader-text="A" class="characters">A</span>
                    <span preloader-text="M" class="characters">M</span>
                    <span preloader-text="A" class="characters">A</span>
                    <span preloader-text="I" class="characters">I</span>
                    <span preloader-text="R" class="characters">R</span>
                    <span preloader-text="A" class="characters">A</span>
                    <!-- <span preloader-text="L" class="characters">L</span>
                    <span preloader-text="L" class="characters">L</span>
                    <span preloader-text="A" class="characters">A</span> -->

                </div>
            </div>
        </div>
    </div>
    <div class="sidemenu-wrapper sidemenu-info">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo_l.png') }}" alt="Cinderella">
                        </a>
                    </div>
                    <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital model.
                        Appropriately create interactive infrastructures</p>
                    <div class="th-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img"><a href="#"><img src="{{ asset('assets/img/blog/recent-post-1-1.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta"><a href="#"><i class="far fa-calendar"></i>24 Jun ,
                                    2025</a></div>
                            <h4 class="post-title"><a class="text-inherit" href="#">Where Vision
                                    Meets
                                    Concrete Reality</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img"><a href="#"><img src="{{ asset('assets/img/blog/recent-post-1-2.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta"><a href="#"><i class="far fa-calendar"></i>22 Jun ,
                                    2025</a></div>
                            <h4 class="post-title"><a class="text-inherit" href="#">Raising the Bar
                                    in
                                    Construction.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Get In Touch</h3>
                <div class="th-widget-contact">
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('assets/img/icon/phone.svg') }}" alt="img">
                        </div>
                        <div class="details">
                            <p><a href="tel:+01234567890" class="info-box_link">+01 234 567 890</a></p>
                            <p><a href="tel:+09876543210" class="info-box_link">+09 876 543 210</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('assets/img/icon/envelope.svg') }}" alt="img">
                        </div>
                        <div class="details">
                            <p>
                                <a href="mailto:salesfna@lamairatravel.com" class="info-box_link">salesfna@lamairatravel.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('assets/img/icon/location-dot.svg') }}" alt="img"></div>
                        <div class="details">
                            <p>51A Wilkinson road,
                                Freetown, Sierra Leone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i class="fal fa-search"></i></button></form>
    </div>
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo_l.png') }}" alt="Cinderella" width="150"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="">
                        <a class="active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li><a href="#">About Us</a></li>
                    {{-- <li class="menu-item-has-children"><a href="#">Destination</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('europe') }}">Europe</a></li>
                    <li><a href="{{ route('asia') }}">Asia</a></li>
                    <li><a href="{{ route('dubai') }}">Dubai</a></li>
                    <li><a href="{{ route('usa') }}">USA</a></li>
                    <li><a href="{{ route('canada') }}">Canada</a></li>
                    <li><a href="{{ route('africa') }}">Africa</a></li>
                </ul>
                </li>--}}
                <li class="menu-item-has-children"><a href="#">Service</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('airticketing') }}">Air Ticketing</a></li>
                        <li><a href="{{ route('travelvisa') }}">Travel Visa</a></li>
                        <li><a href="{{ route('travelinsurance') }}">Travel Insurance</a></li>
                        <li><a href="{{ route('hotelbooking') }}">Hotel Booking</a></li>
                        <li><a href="{{ route('holidaypackges') }}">Holiday Packges</a></li>
                    </ul>
                </li>
                <li class=""><a href="{{ route('careers') }}">Careers</a></li>
                <li><a href="{{ route('contactus') }}">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout1 header-layout2">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-lg-end align-items-center">
                    <div class="col-auto d-none d-md-block">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-xl-inline-block">
                                    <i class="fa-regular fa-envelope"></i>
                                    <span>salesfna@lamairatravel.com</span>
                                </li>
                                <li class="d-none d-xl-inline-block"><i class="fa-sharp fa-regular fa-location-dot"></i>
                                    <span>51A Wilkinson road,
                                        Freetown, Sierra Leone</span>
                                </li>
                                <li class="d-none d-xl-inline-block">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>Mon - Fri: 9:00 am - 06.00pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="header-right">
                            {{-- <div class="currency-menu">
                                <select class="form-select nice-select">
                                    <option selected="">language</option>
                                    <option>CNY</option>
                                    <option>EUR</option>
                                    <option>AUD</option>
                                </select>
                            </div> --}}
                            <div class="header-links">
                                <ul>
                                    {{-- <li class="d-none d-md-inline-block"><a href="#">FAQ</a></li>
                                    <li class="d-none d-md-inline-block"><a href="#">Support</a></li> --}}
                                    {{-- <li><a href="{{ route('contactus') }}" class="popup-content">Book Now<i class="fa-regular fa-user"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area" data-bg-src="{{ asset('assets/img/bg/line-pattern.png') }}">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/img/logo_l.png') }}" alt="Cinderella" width="250">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                                    <li class=""><a class=" {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                                    <li><a class=" {{ request()->routeIs('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}">About Us</a></li>
                                    {{-- <li class="menu-item-has-children"><a href="#">Destination</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('europe') }}">Europe</a></li>
                                    <li><a href="{{ route('asia') }}">Asia</a></li>
                                    <li><a href="{{ route('dubai') }}">Dubai</a></li>
                                    <li><a href="{{ route('usa') }}">USA</a></li>
                                    <li><a href="{{ route('canada') }}">Canada</a></li>
                                    <li><a href="{{ route('africa') }}">Africa</a></li>
                                </ul>
                                </li>--}}
                                <li class="menu-item-has-children"><a class=" {{ request()->routeIs('airticketing') || request()->routeIs('travelvisa') || request()->routeIs('travelinsurance') || request()->routeIs('hotelbooking') || request()->routeIs('holidaypackges')  ? 'active' : '' }}" href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('airticketing') }}">Air Ticketing</a></li>
                                        <li><a href="{{ route('travelvisa') }}">Travel Visa</a></li>
                                        <li><a href="{{ route('travelinsurance') }}">Travel Insurance</a></li>
                                        <li><a href="{{ route('hotelbooking') }}">Hotel Booking</a></li>
                                        <li><a href="{{ route('holidaypackges') }}">Holiday Packges</a></li>
                                    </ul>
                                </li>
                                <li class=""><a class=" {{ request()->routeIs('careers') ? 'active' : '' }}" href="{{ route('careers') }}">Careers</a></li>
                                <li class=""><a class=" {{ request()->routeIs('blogs') || request()->routeIs('blogdetail')  ? 'active' : '' }}" href="{{ route('blogs') }}">Blogs</a>
                                </li>
                                <li><a class=" {{ request()->routeIs('contactus') ? 'active' : '' }}" href="{{ route('contactus') }}">Contact us</a></li>
                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-xl-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><a data-bs-toggle="modal" data-bs-target="#travelBookingModal" class="th-btn style3 th-icon">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div>
        @yield('content')
    </div>



    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/map.png') }}">
        <div class="widget-area">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-sm-6  col-md-5">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo_l.png') }}" alt="Cinderella" width="65%"></a></div>
                                <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital
                                    model. Appropriately create interactive infrastructures</p>
                                <div class="th-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a> <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Our Service</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Address</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/phone.svg') }}" alt="img"></div>
                                    <div class="details">
                                        <p class="text-white"><a href="tel:23278676849" class="info-box_link">+23278676849</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/envelope.svg') }}" alt="img"></div>
                                    <div class="details">
                                        <p class="text-white"><a href="mailto:salesfna@lamairatravel.com" class="info-box_link">salesfna@lamairatravel.com</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="{{ asset('assets/img/icon/location-dot.svg') }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <p class="text-white"> 51A Wilkinson road,<br> Freetown, Sierra Leone</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-wrap bg-transparent">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12">
                        <p class="copyright-text  text-center fs-6">Copyright 2025 <a href="{{ route('home') }}">Lamaira</a>. All
                            Rights
                            Reserved.</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation"><button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Login</button></li>
            <li class="nav-item" role="presentation"><button class="nav-menu active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Register</button></li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="https://html.themeholy.com/Cinderella/demo/mail.php" method="POST" class="login-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12"><label>Username or email</label> <input type="text" class="form-control" name="email" id="email" required="required"></div>
                            <div class="form-group col-12"><label>Password</label> <input type="password" class="form-control" name="pasword" id="pasword" required="required"></div>
                            <div class="form-btn mb-20 col-12"><button class="th-btn btn-fw th-radius2">Send
                                    Message</button></div>
                        </div>
                        <div id="forgot_url"><a href="#">Forgot password?</a></div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Sign in to your account</h3>
                <form action="https://html.themeholy.com/Cinderella/demo/mail.php" method="POST" class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12"><label>Username*</label> <input type="text" class="form-control" name="usename" id="usename" required="required"></div>
                        <div class="form-group col-12"><label>First name*</label> <input type="text" class="form-control" name="firstname" id="firstname" required="required"></div>
                        <div class="form-group col-12"><label>Last name*</label> <input type="text" class="form-control" name="lastname" id="lastname" required="required"></div>
                        <div class="form-group col-12"><label for="new_email">Your email*</label> <input type="text" class="form-control" name="new_email" id="new_email" required="required"></div>
                        <div class="form-group col-12"><label for="new_email_confirm">Confirm email*</label> <input type="text" class="form-control" name="new_email_confirm" id="new_email_confirm" required="required"></div>
                        <div class="statement"><span class="register-notes">A password will be emailed to you.</span>
                        </div>
                        <div class="form-btn mt-20 col-12"><button class="th-btn btn-fw th-radius2">Sign up</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/matter.min.js') }}"></script>
    <script src="{{ asset('assets/js/matterjs-custom.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 400, // Animation duration in milliseconds
            easing: 'ease-in-out', // Smooth easing for professional look
            // once: true, // Animations trigger only once
            offset: 100 // Trigger animations 100px before element enters viewport
        });
    </script>
    <script src="https://unpkg.com/@studio-freight/lenis"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bookingForm = document.getElementById('travelBookingForm');
            const errorAlert = document.getElementById('errorAlert');
            const errorList = document.getElementById('errorList');
            const modal = new bootstrap.Modal(document.getElementById('travelBookingModal'));

            // Date validation
            const travelFrom = document.getElementById('travel_from');
            const travelTo = document.getElementById('travel_to');

            travelFrom.addEventListener('change', function() {
                travelTo.min = this.value;
            });

            travelTo.addEventListener('change', function() {
                if (this.value < travelFrom.value) {
                    this.setCustomValidity('End date must be after start date');
                    this.classList.add('is-invalid');
                } else {
                    this.setCustomValidity('');
                    this.classList.remove('is-invalid');
                }
            });

            bookingForm.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                // Clear errors
                errorAlert.classList.add('d-none');
                errorList.innerHTML = '';
                document.querySelectorAll('.is-invalid').forEach(el => {
                    el.classList.remove('is-invalid');
                });

                if (!bookingForm.checkValidity()) {
                    bookingForm.classList.add('was-validated');
                    setTimeout(() => {
                        bookingForm.classList.remove('was-validated');
                    }, 3000);
                    return;
                }

                const formData = new FormData(bookingForm);

                fetch('/travel-bookings', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value, // Changed this line
                            'Accept': 'application/json',
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            modal.hide();
                            bookingForm.reset();
                            bookingForm.classList.remove('was-validated');
                            alert('Booking request submitted successfully!');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });

        // create Lenis instance
        const lenis = new Lenis({
            duration: 2, // smoothness (lower = faster scroll)
            smoothWheel: true, // smooth mouse wheel
            smoothTouch: false, // smooth on touch devices
        })

        // requestAnimationFrame loop
        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }

        requestAnimationFrame(raf)
    </script>

</body>

</html>