@extends('frontend.layout.websitemain')
@section('content')
    <div class="hero-2" id="hero">
        <div class="hero2-overlay" data-bg-src="assets/img/bg/line-pattern.png"></div>
        <div class="swiper hero-slider-2" id="heroSlide2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <video autoplay loop muted class="h-100">
                            <source src="assets/img/hero/hero-video.mp4" type="video/mp4" class="h-100">
                        </video>
                        <div class="hero-style2 w-100">
                            <div class="container">
                                <div class="box">
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Your Journey Starts
                                        With the Best Places to Travel</h1>
                                    <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Plan unforgettable
                                        vacation trips with exclusive travel packages designed for every kind of explorer.
                                        <br />
                                        Adventure awaits — where will your next vacation take you?
                                    </p>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                            class="th-btn white-btn th-icon">Explore Our Services</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <video autoplay loop muted class="h-100">
                            <source src="assets/img/hero/hero-video3.mp4" type="video/mp4" class="h-100">
                        </video>
                        <div class="hero-style2 w-100">
                            <div class="container">
                                <div class="box">
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Luxury Travel & Safari
                                        Experiences</h1>
                                    <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Take your vacation to
                                        the next level with curated luxury travel and exclusive luxury safari
                                        packages — crafted to exceed expectations.</p>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                            class="th-btn white-btn th-icon">Plan Your Trip</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <video autoplay loop muted class="h-100">
                            <source src="assets/img/hero/hero-video3.mp4" type="video/mp4" class="h-100">
                        </video>
                        <div class="hero-style2 w-100">
                            <div class="container">
                                <div class="box">
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Your Best
                                        International Travel Partner</h1>
                                    <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Wherever you want to go,
                                        our best travel agency experts and top travel sites make planning
                                        easy — from cheap vacation packages to premium tours & cruises.</p>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="#"
                                            class="th-btn white-btn th-icon">Discover Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner"><video autoplay loop muted class="h-100">
                            <source src="assets/img/hero/placeonevid.mp4" type="video/mp4" class="h-100">
                        </video>
                        <div class="hero-style2 w-100">
                            <div class="container">
                                <div class="box">
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Thrilling Tours.
                                        Amazing Destinations. Real Experiences.</h1>
                                    <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">From mountains to
                                        tropical escapes, our adventure travel packages and guided tours take
                                        you beyond the ordinary — discover the world with excitement at every step.</p>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                        <a href="#" class="th-btn white-btn th-icon">Book Your Adventure</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-swiper-custom d-none">
                <div class="swiper-pagination"></div>
                <div class="hero-icon"><button data-slider-prev="#heroSlide2, #heroSlide3"
                        class="hero-arrow slider-prev"><img src="assets/img/icon/hero-arrow-left.svg"
                            alt=""></button>
                    <button data-slider-next="#heroSlide2, #heroSlide3" class="hero-arrow slider-next"><img
                            src="assets/img/icon/hero-arrow-right.svg" alt=""></button>
                </div>
            </div>
        </div>
        <div class="swiper heroThumbs d-none style2" id="heroSlide3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img"><img src="assets/img/hero/hero_bg_2_1.jpg" alt=""></div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Exotic Island Getaway</h3>
                                {{-- <h4 class="hero-card_price">
                                    <span class="currency">$850.00</span>/Person
                                </h4>
                                <span><i class="fa-light fa-clock"></i>7 Days</span> --}}
                                <a href="#" class="th-btn style2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img"><img src="assets/img/hero/hero_bg_2_2.jpg" alt=""></div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Luxury City Escape</h3>
                                {{-- <h4 class="hero-card_price"><span class="currency">$750.00</span>/Person</h4><span><i
                                        class="fa-light fa-clock"></i>6 Days</span>  --}}
                                <a href="#" class="th-btn style2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img"><img src="assets/img/hero/hero_bg_2_3.jpg" alt=""></div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Exotic Island Getaway</h3>
                                {{-- <h4 class="hero-card_price"><span class="currency">$850.00</span>/Person</h4><span><i
                                        class="fa-light fa-clock"></i>7 Days</span>  --}}
                                <a href="#" class="th-btn style2">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="hero-card">
                            <div class="hero-img"><img src="assets/img/hero/hero_bg_2_2.jpg" alt=""></div>
                            <div class="hero-card_content">
                                <h3 class="box-title">Luxury City Escape</h3>
                                {{-- <h4 class="hero-card_price"><span class="currency">$750.00</span>/Person</h4><span><i
                                        class="fa-light fa-clock"></i>6 Days</span>  --}}
                                <a href="#" class="th-btn style2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="scroll-down"><a href="#destination-sec" class="scroll-wrap"><span><img
                                    src="assets/img/icon/down-arrow.svg" alt=""></span>Scroll Down</a></div> -->
    </div>

    <section class="category-area bg-top-center" data-bg-src="assets/img/bg/category_bg_1.png">
        <div class="container th-container">
            <div class="title-area text-center">
                <span class="sub-title">Everything You Need for the Perfect Trip</span>
                <h2 class="sec-title">Our Services</h2>
            </div>
            <div class="swiper th-slider has-shadow categorySlider" id="categorySlider1"
                data-bg-src="assets/img/bg/category_bg_1.png"
                data-slider-options='{"spaceBetween": "50","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('airticketing') }}">Air Ticketing</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('travelvisa') }}">Travel Visa</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('travelinsurance') }}">Travel Insurance</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('hotelbooking') }}">Hotel Booking</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('holidaypackges') }}">Holiday Packages</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('airticketing') }}">Air Ticketing</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('travelvisa') }}">Travel Visa</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('travelinsurance') }}"">Travel Insurance</a></h3>
                        </div>
                    </div>
                    <div class=" swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('hotelbooking') }}">Hotel Booking</a></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg"
                                    alt="Image"></div>
                            <h3 class="box-title"><a href="{{ route('holidaypackges') }}">Holiday Packages</a></h3>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section>

    <div class="position-relative overflow-hidden">
        <div class="container">
            <div class="title-area text-center">
                <!-- <span class="sub-title">Top Destinations</span> -->
                <h2 class="sec-title">We Simplify Your Travel Needs</h2>
            </div>

            <div>
                <video src="{{ asset('assets/img/hero/tour.mp4') }}" autoplay muted loop></video>
            </div>
            {{-- <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1"
            data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
            
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">15 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                        class="destination-subtitle">22 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                        class="destination-subtitle">25 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Bali</a></h4><span
                                        class="destination-subtitle">28 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Dubai</a></h4><span
                                        class="destination-subtitle">30 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">15 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                        class="destination-subtitle">22 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                        class="destination-subtitle">25 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Bali</a></h4><span
                                        class="destination-subtitle">28 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Dubai</a></h4><span
                                        class="destination-subtitle">30 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">15 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                        class="destination-subtitle">22 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                        class="destination-subtitle">25 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Bali</a></h4><span
                                        class="destination-subtitle">28 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Dubai</a></h4><span
                                        class="destination-subtitle">30 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">15 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                        class="destination-subtitle">22 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                        class="destination-subtitle">25 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Bali</a></h4><span
                                        class="destination-subtitle">28 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Dubai</a></h4><span
                                        class="destination-subtitle">30 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">15 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                        class="destination-subtitle">22 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                        class="destination-subtitle">25 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Bali</a></h4><span
                                        class="destination-subtitle">28 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Dubai</a></h4><span
                                        class="destination-subtitle">30 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_1.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Maldives</a></h4><span
                                        class="destination-subtitle">15 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_2.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Thailand</a></h4><span
                                        class="destination-subtitle">22 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Belgium</a></h4><span
                                        class="destination-subtitle">25 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_4.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Bali</a></h4><span
                                        class="destination-subtitle">28 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="destination-box gsap-cursor">
                        <div class="destination-img"><img src="assets/img/destination/destination_1_5.jpg"
                                alt="destination image">
                            <div class="destination-content">
                                <div class="media-left">
                                    <h4 class="box-title"><a href="#">Dubai</a></h4><span
                                        class="destination-subtitle">30 Holiday Packages</span>
                                </div>
                                <div class=""><a href="#" class="th-btn style2 th-icon">View Packages</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
    </div>



    <div class="gallery-area mt-5">
        <div class="container th-container">
            <div class="title-area text-center"><span class="sub-title">Capture Your Travel Moments</span>
                <h2 class="sec-title">Our Travel Gallery</h2>
            </div>
            <div class="row gy-10 gx-10 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_1.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_2.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_3.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_4.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_5.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_6.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_7.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%"><img
                    src="assets/img/shape/line.png" alt="shape"></div>
            <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-3%"><img class="gmovingX"
                    src="assets/img/shape/shape_4.png" alt="shape"></div>
        </div>
    </div>

    <div class="counter-area space">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-8 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">10</span></h3>
                            <h6 class="counter-title">Years of Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-8 ms-sm-0 my-0 mt-4  ms-auto col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">98</span>%</h3>
                            <h6 class="counter-title">Customer Satisfaction</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-8 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">15</span>k</h3>
                            <h6 class="counter-title">Successful Trips</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-8 ms-sm-0 my-0 mt-4 ms-auto col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">30</span>k</h3>
                            <h6 class="counter-title">Happy Travellers</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup shape1 d-none d-xl-block" data-top="30%" data-left="-15%"><img
                    src="assets/img/shape/shape_1.png" alt="shape"></div>
            <div class="shape-mockup shape2 d-none d-xl-block" data-top="45%" data-left="-13%"><img
                    src="assets/img/shape/shape_2.png" alt="shape"></div>
            <div class="shape-mockup shape3 d-none d-xl-block" data-top="32%" data-left="-7%"><img
                    src="assets/img/shape/shape_3.png" alt="shape"></div>
            <div class="shape-mockup d-none d-xl-block" data-bottom="-24%" data-left="-15%"><img
                    src="assets/img/shape/shape_6.png" alt="shape"></div>
            <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="-10%"><img
                    src="assets/img/shape/shape_5.png" alt="shape"></div>
        </div>
    </div>

    <section class="testi-area overflow-hidden space" id="testi-sec">
        <div class="container-fluid p-0">
            <div class="title-area mb-20 text-center"><span class="sub-title">Testimonials</span>
                <h2 class="sec-title">Happy Clients. Amazing Trips.</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testiSlider1 has-shadow" id="testiSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2","centeredSlides":"true"},"992":{"slidesPerView":"2","centeredSlides":"true"},"1200":{"slidesPerView":"2","centeredSlides":"true"},"1400":{"slidesPerView":"3","centeredSlides":"true"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Maria Doe</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“Lamaira made our family vacation to the Maldives
                                    unforgettable. The air ticketing and hotel booking process was so smooth!”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Andrew Simon</h3><span class="testi-card_desig">Business
                                                Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“Cinderella’s visa services and travel insurance gave me peace
                                    of mind during my business trip to Dubai. Exceptional service!”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Alex Jordan</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“The holiday package to Thailand was perfectly planned by
                                    Cinderella. Everything from flights to activities was spot-on.”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                                alt="testimonial"></div>
                                        <div class="media-body">
                                            <h3 class="box-title">Sophia Lee</h3><span
                                                class="testi-card_desig">Traveller</span>
                                        </div>
                                    </div>
                                    <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                            class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                </div>
                                <p class="testi-card_text">“Cinderella’s hotel booking service found us the perfect stay in
                                    Bali, and their travel insurance ensured we were covered.”</p>
                                <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="-2%" data-right="0%"><img
                src="assets/img/shape/line2.png" alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="5%"><img
                src="assets/img/shape/shape_7.png" alt="shape"></div>
    </section>

    <div class="brand-area overflow-hidden space">
        <div class="container-fluid th-container ">
            <div class="title-area mb-20 text-center"><span class="sub-title">Our airline partners</span>
                <h2 class="sec-title">Your Journey, Powered by Top Airlines</h2>
            </div>
            <div class="swiper th-slider brandSlider1" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper d-flex align-items-center">
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Aegean-Airlines-300x189.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Air-france-300x169.png" alt="Brand Logo"> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Air-india-300x180.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Air-peace-airlines.png" alt="Brand Logo"> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Air-Senegal-300x86.png" alt="Brand Logo"> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Asky-300x125.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/British-Airlines-300x169.png" alt="Brand Logo"></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Brussels-airlines-300x71.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Egypt-air-300x164.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Emirates-airlines-300x169.png" alt="Brand Logo"> </a></div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider brandSlider1" id="brandSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper d-flex align-items-center">
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Ethiopia.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Fly-Dubai-300x169.png" alt="Brand Logo"> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Kenya-300x200.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Klm-royal-Dutch-airlines.png" alt="Brand Logo"> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Qatar-airlines-300x102.png" alt="Brand Logo"> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Royal-air-morroc.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/South-Africa-Airlines-300x119.png" alt="Brand Logo"> </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Tap-Portugal-air-300x53.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Turkish-airlines-300x81.png" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/United-airlines.svg" alt="Brand Logo"> </a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box"><a href="#"><img class="original"
                                    src="assets/img/airlines/Virgin-Atlantic-300x188.png" alt="Brand Logo"> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="sec_title_static">
                        <div class="sec_title_wrap">
                            <div class="title-area text-center text-lg-start pe-xl-5"><span class="sub-title">Travel Tips
                                    & Insights</span>
                                <h2 class="sec-title">Latest from Cinderella’s Travel Blog</h2>
                                <a href="{{ route('blogs') }}" class="th-btn style4 th-icon">Read More Articles</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="blog-grid4-static-wrap">
                        @foreach ($blogs as $data)
                            <div class="col-12 blog-grid4_wrapp">
                                <div class="blog-grid4 th-ani style4 mt-24 row gap-0 m-0">
                                    <div class="box-content col-md-7">
                                        <div class="blog-meta"><a class="author"
                                                href="#">{{ $data->created_at->format('F j Y') }}</a> <a
                                                href="#">8 min read</a></div>
                                        <h3 class="box-title"><a
                                                href="{{ route('blogdetail', ['id' => $data->id]) }}">{{ Str::limit($data->blogname, 30) }}</a>
                                        </h3>
                                        <p> {!! Str::limit($data->blogdescription, 100) !!}</p>
                                        <a href="{{ route('blogdetail', ['id' => $data->id]) }}"
                                            class="th-btn style4 th-icon">Read
                                            More</a>
                                    </div>
                                    <div class="blog-img global-img col-md-5">
                                        <img src="{{ asset('adminAssets/images/Blogs/' . $data->blogthumbnail) }}"
                                            alt="blog image">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-12 blog-grid4_wrapp">
                        <div class="blog-grid4 th-ani style4 mt-24">
                            <div class="box-content">
                                <div class="blog-meta"><a class="author" href="#">Aug 20, 2025</a> <a
                                        href="#">8 min read</a></div>
                                <h3 class="box-title"><a href="#">Top Tips for Hassle-Free Visa Applications</a>
                                </h3><a href="#" class="th-btn style4 th-icon">Read More</a>
                            </div>
                            <div class="blog-img global-img"><img src="assets/img/blog/blog_9_2.jpg"
                                    alt="blog image"></div>
                        </div>
                    </div>
                    <div class="col-12 blog-grid4_wrapp">
                        <div class="blog-grid4 th-ani style4 mt-24">
                            <div class="box-content">
                                <div class="blog-meta"><a class="author" href="#">Aug 20, 2025</a> <a
                                        href="#">8 min read</a></div>
                                <h3 class="box-title"><a href="#">Why Travel Insurance is a Must for Every
                                        Trip</a></h3><a href="#" class="th-btn style4 th-icon">Read More</a>
                            </div>
                            <div class="blog-img global-img"><img src="assets/img/blog/blog_9_3.jpg"
                                    alt="blog image"></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
