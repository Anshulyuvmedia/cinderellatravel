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
            <div class="col-xl-5">
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
                        <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Welcome To Lamira Travel & Tours</h2>
                    </div>
                    <p class="pe-xl-5" data-aos="fade-up" data-aos-delay="600">We Lamira travel and tours started serving firstly in 2016 in Freetown, sierra leone. It’s been a long time arranging high quality travel to the world’s most captivating destinations. Whether you’re seeking culture, adventure or a blend of both, our holidays are designed by experts and brought to life by the finest guides. We provide many services to our lovely coustmers all over the world. We help making there trips more memorable one.</p>
                    <p class="mb-30 pe-xl-5" data-aos="fade-up" data-aos-delay="700">We are recognized for its quick adaptation and response to meet the needs of the client, Whether it is about your Business Travel, Holiday Planning, VISA Consultation, Air Ticketing, Hotel Booking or Transportation Services, our dedicated staff is here to make sure you are taken care of and focused on your trips for business or pleasure.</p>
                    <div class="about-item-wrap">
                        <div class="about-item style2" data-aos="fade-up" data-aos-delay="800">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/about_1_1.svg') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Tour guide</h5>
                                <p class="about-item_text">We are best in our work, as we’re the best guide to travel with.</p>
                            </div>
                        </div>
                        <div class="about-item style2" data-aos="fade-up" data-aos-delay="900">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/about_1_2.svg') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Friendly price</h5>
                                <p class="about-item_text">You’ll get best prices on your tour packages with the guarantee to get the best from our side</p>
                            </div>
                        </div>
                        <div class="about-item style2" data-aos="fade-up" data-aos-delay="1000">
                            <div class="about-item_img"><img src="{{ asset('assets/img/icon/about_1_3.svg') }}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Reliable tour</h5>
                                <p class="about-item_text">You can rely on us to get best deals and vacation plans under your budget, As we’re the most reliable travel agency</p>
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
                    <h2 class="sec-title">Revolutionizing the ways we travel</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="choose-area2" data-bg-src="{{ asset('assets/img/bg/feature_bg_1.png') }}">
        <div class="container">
            <div class="row gy-4 justify-content-center justify-content-lg-between">

                <div class="col-lg-4 col-md-6 choose-feature_wrapp" data-aos="fade-up" data-aos-delay="300">
                    <div class="choose-feature">
                        <div class="box-img"><img src="{{ asset('assets/img/icon/target.png') }}" alt="Icon"></div>
                        <div class="choose-feature_content">
                            <h3 class="box-title">Our Mission</h3>
                            <p class="box-text">Our mission is to be a high-performance company that values and nurtures long-term relationships with our clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 choose-feature_wrapp" data-aos="fade-up" data-aos-delay="400">
                    <div class="choose-feature">
                        <div class="box-img"><img src="{{ asset('assets/img/icon/visionary.png') }}" alt="Icon"></div>
                        <div class="choose-feature_content">
                            <h3 class="box-title">Our Vision</h3>
                            <p class="box-text">To be the most trusted travel partner, delivering exceptional experiences and making every journey unforgettable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 choose-feature_wrapp" data-aos="fade-up" data-aos-delay="200">
                    <div class="choose-feature">
                        <div class="box-img"><img src="{{ asset('assets/img/icon/growth.png') }}" alt="Icon"></div>
                        <div class="choose-feature_content">
                            <h3 class="box-title">Our Value</h3>
                            <p class="box-text">Our Value is to become our clients’ first choice. We strive to be the most professional and customer-focused travel consultants, using our knowledge, experience, and connections to fulfill all their holiday needs.</p>
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
                        <p class="team-about_text mb-25">I appreciate your trust in Lamira Travel as we embark on this exciting journey together. Your continued support fuels our passion for creating extraordinary travel experiences that transcend ordinary vacations. We are committed to designing personalized itineraries that reflect your unique desires and dreams. Every destination we explore together becomes a canvas for unforgettable memories. Our dedicated team works tirelessly to ensure seamless planning and exceptional service at every touchpoint. From hidden gems to iconic landmarks, we curate experiences that resonate with your wanderlust. Your feedback and stories inspire us to constantly innovate and improve our offerings. We believe travel is not just about reaching a destination but about the transformative moments along the way. Thank you for allowing us to be part of your adventures and life's most cherished moments. Together, we will continue discovering the world's wonders and building lasting connections. Let's make the upcoming journeys even more remarkable than those we've shared before. Here's to new horizons, meaningful encounters, and the magic of exploration that awaits us.</p>

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