@extends('frontend.layout.websitemain')
@section('content')
<style>
    html,body{
        scroll-behavior: smooth;
    }
</style>
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
    data-aos-delay="100">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Holiday Packges</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
                <li>Holiday Packges</li>
            </ul>
        </div>
    </div>
</div>
<section class="space">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="page-single">
                    <div class="service-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('assets/img/services/bus.webp') }}" alt="Holiday Packges Image">
                    </div>
                    <div class="page-content d-block" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="box-title mt-3">Holiday Packges</h2>
                        <p class="box-text mb-30">Land arrangement means all travel elements provided to a client after
                            arrival at the destination, such as hotel, sightseeing, and so forth. We have partnered with
                            local tour operators who have experience on handling tours in their destination.</p>

                        <h4 class="box-title">International Tour Packages</h4>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class=" tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <a href="#form-section">
                                            <img src="{{ asset('assets/img/services/europepackage.webp') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="#form-section">Europe Holiday Packages</a>
                                        </h3>
                                        <p>Stroll through the beaches and explore the wild in the cultural island with
                                            your better half. maldives is an all-in-one experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class=" tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <a href="#form-section">
                                            <img src="{{ asset('assets/img/services/usapackage.webp') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="#form-section">USA Holiday Packages</a>
                                        </h3>
                                        <p>
                                            Visit usa - the third largest continent in the world. packed to the brim
                                            with
                                            personality, charm, diversity and great natural beauty.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class=" tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <a href="#form-section">
                                            <img src="{{ asset('assets/img/services/australiapackage.webp') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="#form-section">Australia Holiday Packages</a>
                                        </h3>
                                        <p>A trip to australia is a must if you crave for a blend of adventure, scuba
                                            diving, colorful mountains, rich wild life and much more.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class=" tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <a href="#form-section">
                                            <img src="{{ asset('assets/img/services/newzealandpackage.webp') }}" alt="image">
                                        </a>
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="#form-section">New Zealand Packages</a>
                                        </h3>
                                        <p>The land of hidden gems, unexplored grasslands, temple towns, bustling
                                            streets and golden beaches; this is asia for you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class=" tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="{{ asset('assets/img/services/asiapackage.webp') }}" alt="image">
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="#form-section">Asia Holiday Packages</a>
                                        </h3>
                                        <p>Stroll through the beaches and explore the wild in the cultural island with
                                            your better half. maldives is an all-in-one experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class=" tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <a href="#form-section">
                                            <img src="{{ asset('assets/img/services/canadapackages.webp') }}" alt="image"></a>
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="#form-section">Canada Holiday Packages</a>
                                        </h3>
                                        <div id="form-section"></div>
                                        <p>Being the second largest country of the world, Canada has a lot to offer to
                                            visitors and no matter what tourists might be looking for</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="th-comment-form" data-aos="fade-up">
                        <div class="row">
                            <h3 class="blog-inner-title h4 mb-2">Contact Us</h3>
                            <p class="mb-25">Reach out to us from our contact form and we will get back to you shortly.
                            </p>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Full Name*" class="form-control" required>
                                <i class="far fa-user"></i>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" placeholder="Your Email*" class="form-control" required>
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number"
                                    class="form-control" required>
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Destination" class="form-control" required>
                                <i class="far fa-globe"></i>
                            </div>
                            <div class="form-group col-12">
                                <select name="subject" id="subject" class="form-select nice-select">
                                    <option value="Select Tour Type" selected="selected" disabled="disabled">Select
                                        Service Type</option>
                                    <option value="Holiday Packges">Holiday Packges</option>
                                    <option value="Travel Visa">Travel Visa</option>
                                    <option value="Holiday Packges">Holiday Packges</option>
                                    <option value="Holiday Packges">Holiday Packges</option>
                                    <option value="Holiday Packages">Holiday Packages</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Comment*" class="form-control"></textarea>
                                <i class="far fa-pencil"></i>
                            </div>
                            <div class="col-12 form-group">
                                <input type="checkbox" id="html">
                                <label for="html">Save my name, email, and website in this browser for the next
                                    time
                                    I comment.</label>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="th-btn style3 th-icon">Send Message<img
                                        src="{{ asset('assets/img/icon/plane2.svg') }}" alt="Send Icon"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area style3 position-sticky " style="top:150px">
                    {{-- <div class="widget widget_categories">
                        <h3 class="widget_title">Destinations</h3>
                        <ul class="list-unstyled">
                            <li>
                                 <a href="#form-section">
                    <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                    Europe
                    </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                            Asia
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                            Dubai
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                            USA
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                            Canada
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('assets/img/theme-img/map.svg') }}" alt="Map Icon">
                            Africa
                        </a>
                    </li>
                    </ul>
            </div>--}}

            <div class="widget widget_tag_cloud" data-aos="fade-left">
                <h3 class="widget_title">Contact Us</h3>
                <div class="th-widget-contact">
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('assets/img/icon/location-dot.svg') }}"
                                alt="Location Icon"></div>
                        <div class="details">
                            <p> 51A Wilkinson road, Freetown, Sierra Leone</p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('assets/img/icon/envelope.svg') }}"
                                alt="Email Icon"></div>
                        <div class="details">
                            <p><a href="mailto:salesfna@lamairatravel.com"
                                    class="info-box_link">salesfna@lamairatravel.com</a></p>
                        </div>
                    </div>
                    <div class="info-box_text">
                        <div class="icon"><img src="{{ asset('assets/img/icon/phone.svg') }}"
                                alt="Phone Icon"></div>
                        <div class="details">
                            <p><a href="tel:+23278676849" class="info-box_link">+23278676849</a></p>
                        </div>
                    </div>
                </div>
            </div>
            </aside>
        </div>
    </div>
    <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="35%" data-right="-12%" data-aos="fade-left"
        data-aos-delay="400">
        <img src="{{ asset('assets/img/shape/shape_1.png') }}" alt="Shape 1">
    </div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="31%" data-right="-8%" data-aos="fade-left"
        data-aos-delay="500">
        <img src="{{ asset('assets/img/shape/shape_2.png') }}" alt="Shape 2">
    </div>
    <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="33%" data-right="-5%" data-aos="fade-left"
        data-aos-delay="600">
        <img src="{{ asset('assets/img/shape/shape_3.png') }}" alt="Shape 3">
    </div>
    </div>
</section>
@endsection