@extends('frontend.layout.websitemain')
@section('content')


<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>

<div class="about-area position-relative overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 position-sticky top-0">
                <div class="img-box3">
                    <div class="img1" data-aos="zoom-in" data-aos-delay="200"><img src="{{ asset('assets/img/normal/about_3_1.jpg') }}" alt="About"></div>
                    <div class="img2" data-aos="zoom-in" data-aos-delay="300"><img src="{{ asset('assets/img/normal/about_3_2.jpg') }}" alt="About"></div>
                    <div class="img3 movingX" data-aos="zoom-in" data-aos-delay="400"><img src="{{ asset('assets/img/normal/about_3_3.jpg') }}" alt="About"></div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="ps-xl-4">
                    <div class="title-area mb-20" data-aos="fade-up" data-aos-delay="500">
                        <span class="sub-title style1">Our Story</span>
                        <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Welcome to Lamaira Travel & Tours</h2>
                    </div>
                    <p class="pe-xl-5" data-aos="fade-up" data-aos-delay="600">Founded in 2016 in Freetown, Sierra Leone, <strong>Lamaira Travel & Tours</strong> has been proudly creating high-quality travel experiences for explorers around the globe. From cultural escapes to thrilling <strong>adventure travel</strong>, we ofer expertly crafted <strong>vacation packages</strong> designed to make every moment unforgettable.</p>

                    <p class="mb-30 pe-xl-5" data-aos="fade-up" data-aos-delay="700">Our team of professional <strong>travel agents</strong> and passionate guides ensures you discover the world’s most captivating <strong>travel destinations</strong> with ease and comfort. We deliver trusted travel support across
                        continents — making every <strong>family trip, solo travel package,</strong> or business travel a truly memorable
                        journey.</p>
                    <p class="my-30 pe-xl-5" data-aos="fade-up" data-aos-delay="700">At Lamaira, we are dedicated to providing complete and convenient <strong>tours & travel</strong> services, including:</p>
                    <div class="about-item-wrap">
                        <div class="about-item style2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/check.png') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Holiday packages</h5>
                            </div>
                        </div>
                        <div class="about-item style2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/check.png') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Air ticketing</h5>
                            </div>
                        </div>
                        <div class="about-item style2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/check.png') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Hotel bookings</h5>
                            </div>
                        </div>
                        <div class="about-item style2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/check.png') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Transportation services</h5>
                            </div>
                        </div>
                        <div class="about-item style2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/check.png') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">VISA consultation</h5>
                            </div>
                        </div>
                        <div class="about-item style2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/check.png') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Guided tours & trip packages</h5>
                            </div>
                        </div>
                        <div class="about-item style2 d-flex align-items-center" data-aos="fade-up" data-aos-delay="800">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/check.png') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title fw-normal">Personalized <strong>tour packages</strong> for your style and budget</h5>
                            </div>
                        </div>
                    </div>
                    <p class="my-30 pe-xl-5" data-aos="fade-up" data-aos-delay="700">With quick response, attention to detail, and tailored planning, we ensure every traveler enjoys a seamless and stress-free trip — whether for business or pleasure.</p>
                    <div class="about-item-wrap">
                        <div class="about-item style2 " data-aos="fade-up" data-aos-delay="800">

                            <div class="about-item_centent mb-0">
                                <h5 class="box-title mb-0 d-flex align-items-center gap-3"> <img src="{{ asset('assets/img/icon/favourites.png') }}" alt=""> Expert Tour Guidance</h5>
                                <p class="ps-3">We curate the best routes, activities, and travel experiences so you explore with confdence.</p>
                            </div>
                        </div>
                        <div class="about-item style2 " data-aos="fade-up" data-aos-delay="800">

                            <div class="about-item_centent mb-0">
                                <h5 class="box-title mb-0 d-flex align-items-center gap-3"> <img src="{{ asset('assets/img/icon/favourites.png') }}" alt=""> Best Pricing Guaranteed</h5>
                                <p class="ps-3">We ofer afordable and  <strong>cheap vacation packages</strong> without compromising quality  — get more adventure for less.</p>
                            </div>
                        </div>
                        <div class="about-item style2 " data-aos="fade-up" data-aos-delay="800">

                            <div class="about-item_centent mb-0">
                                <h5 class="box-title mb-0 d-flex align-items-center gap-3"> <img src="{{ asset('assets/img/icon/favourites.png') }}" alt=""> Most Reliable Travel Agency</h5>
                                <p class="ps-3">From <strong>international travel planning</strong> to local tours, you can count on us to secure the top deals and <strong>best places for vacation</strong> under your budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-35" data-aos="fade-up" data-aos-delay="1100">
                        <a href="{{ route('contactus') }}" class="th-btn style3 th-icon">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="0%" data-left="-18%" data-aos="fade-left" data-aos-delay="1200"><img src="{{ asset('assets/img/shape/shape_2_1.png') }}" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="-15%" data-aos="fade-right" data-aos-delay="1300"><img src="{{ asset('assets/img/shape/shape_2_2.png') }}" alt="shape"></div>
        <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="-112%" data-aos="fade-left" data-aos-delay="1400"><img src="{{ asset('assets/img/shape/shape_2_3.png') }}" alt="shape"></div>
        <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="-12%" data-aos="fade-right" data-aos-delay="1500"><img src="{{ asset('assets/img/shape/shape_2_4.png') }}" alt="shape"></div>
    </div>
</div>

<div class="overflow-hidden space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center" data-aos="fade-up" data-aos-delay="100">
                    <span class="sub-title">Feature </span>
                    <h2 class="sec-title">Redefning the Way the World Travels</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="choose-area2" data-bg-src="{{ asset('assets/img/bg/feature_bg_1.png') }}">
        <div class="container">
            <div class="row gy-4 justify-content-center justify-content-lg-between">

                <div class="col-lg-4 col-md-6 choose-feature_wrapp" data-aos="fade-up" data-aos-delay="300">
                    <div class="choose-feature h-100">
                        <div class="box-img"><img src="{{ asset('assets/img/icon/target.png') }}" alt="Icon"></div>
                        <div class="choose-feature_content">
                            <h3 class="box-title">Our Mission</h3>
                            <p class="box-text">To deliver seamless <strong>travel packages</strong>, unforgettable <strong>vacation trips,</strong> and trusted service — making travel easier, afordable, and enjoyable for every explorer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 choose-feature_wrapp" data-aos="fade-up" data-aos-delay="400">
                    <div class="choose-feature h-100">
                        <div class="box-img"><img src="{{ asset('assets/img/icon/visionary.png') }}" alt="Icon"></div>
                        <div class="choose-feature_content">
                            <h3 class="box-title">Our Vision</h3>
                            <p class="box-text">To be the leading <strong>international travel agency,</strong> offering the best <strong>holiday packages</strong> and connecting travelers to the world’s top <strong>travel destinations</strong>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 choose-feature_wrapp" data-aos="fade-up" data-aos-delay="200">
                    <div class="choose-feature">
                        <div class="box-img"><img src="{{ asset('assets/img/icon/growth.png') }}" alt="Icon"></div>
                        <div class="choose-feature_content">
                            <h3 class="box-title">Our Value</h3>
                            <p class="box-text">We are committed to secure and reliable <strong>tour packages</strong>, personalized service for every traveler, and exceptional quality throughout each journey. With affordable deals and <strong>cheap vacation packages,</strong> we make travel accessible while inspiring adventure and exploration across the world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="space">
    <div class="container">
        <div class="team-details">
            <div class="row gy-5 mb-3 flex-lg-row-reverse mb-xl-5 pb-xl-4">
                <div class="col-xl-4">
                    <div class="th-team team-grid" data-aos="fade-left" data-aos-delay="100">
                        <div class="team-img"><img src="{{ asset('assets/img/team/team_img_3.jpg') }}" alt="Team"></div>
                        <div class="team-img2"><img src="{{ asset('assets/img/team/team_1_3.jpg') }}" alt="Team"></div>
                        <div class="team-content">
                            <div class="media-body">
                                <h3 class="box-title">
                                    <a href="#">Mr. Pramod Kumar Sirnani</a>
                                </h3>
                                <span class="team-desig">President & CEO</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 ps-3 ps-xl-5 pe-xl-4">
                    <div class="team-about" data-aos="fade-right" data-aos-delay="100">
                        <h2 class="team-about_title">About</h2>
                        <p class="team-about_text mb-25">As we move forward into a new era of travel, I am truly grateful for your trust and continued support. Together, let’s make every journey remarkable and every destination unforgettable. </p>
                        <p class="team-about_text mb-25">Since 2016, we have been committed to providing the best <strong>travel packages,</strong> seamless
                            <strong>international travel,</strong> and memorable <strong>vacation trips</strong> for travellers around the world. With
                            strong airline partnerships, reliable <strong>tour packages,</strong> afordable deals, and expert <strong>travel agents,</strong> we ensure every traveler enjoys the best places to visit with comfort and confdence.
                            As we grow, our focus remains on innovation, quality service, and expanding our global reach-
                            ofering premium tours, <strong>cheap vacation packages,</strong> and customized travel solutions for <strong>family trips, solo travelers,</strong> and adventure seekers.
                        </p>
                        <p>Thank you for being a part of the Lamaira Travel & Tours family.</p>
                        <p class="team-about_text mb-25"><strong>Let’s continue discovering new destinations — together.</strong>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <div class="sidebar-gallery-area space">
        <div class="container-fluid">
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" data-slider-options='{"centeredSlides":"true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}' data-aos="fade-up" data-aos-delay="100">
    <div class="swiper-wrapper">
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="200">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_1.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="300">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_2.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="400">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_3.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="500">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_4.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="600">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_5.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="700">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_1.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="800">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_2.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="900">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_3.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="1000">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_4.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="200">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_5.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
        <div class="swiper-slide" data-aos="fade-up" data-aos-delay="100">
            <div class="gallery-thumb style2 global-img"><img src="{{ asset('assets/img/gallery/gallery_4_2.jpg') }}" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>--}}
@endsection