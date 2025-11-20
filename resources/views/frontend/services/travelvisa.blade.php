@extends('frontend.layout.websitemain')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
    data-aos-delay="100">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Travel Visa</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
                <li>Travel Visa</li>
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
                        <img src="{{ asset('assets/img/services/travelvisa.webp') }}" alt="Travel Visa Image">
                    </div>
                    <div class="page-content d-block" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="box-title mt-3">Outbound Visa Services for All Countries</h2>
                        <p class="box-text mb-30">We provide comprehensive travel advice and consular assistance for
                            visa services to individual travelers and corporate clients. Our expertise includes
                            processing Passport Applications, Visa Applications, and specialized Dubai Visas. With
                            strong industry connections, we expedite applications efficiently, delivering professional
                            and friendly customer service.</p>
                        <p class="box-text mb-30">Our team consists of highly skilled, bilingual consultants with
                            extensive experience in visa processing and travel coordination.</p>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="th-comment-form" data-aos="fade-up" data-aos-delay="1800">
                    <div class="row">
                        <h3 class="blog-inner-title h4 mb-2">Contact Us</h3>
                        <p class="mb-25">Reach out to us from our contact form and we will get back to you shortly.</p>
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
                                <option value="Select Tour Type" selected="selected" disabled="disabled">Select Service
                                    Type</option>
                                <option value="Air Ticketing">Air Ticketing</option>
                                <option value="Travel Visa">Travel Visa</option>
                                <option value="Travel Insurance">Travel Insurance</option>
                                <option value="Hotel Booking">Hotel Booking</option>
                                <option value="Holiday Packges">Holiday Packges</option>
                            </select>
                        </div>
                        <div class="col-12 form-group" >
                            <textarea placeholder="Comment*" class="form-control"></textarea>
                            <i class="far fa-pencil"></i>
                        </div>
                        <div class="col-12 form-group" >
                            <input type="checkbox" id="html">
                            <label for="html">Save my name, email, and website in this browser for the next time I
                                comment.</label>
                        </div>
                        <div class="col-12 form-group mb-0" >
                            <button class="th-btn style3 th-icon">Send Message<img src="{{ asset('assets/img/icon/plane2.svg') }}"
                                    alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area style3 position-sticky " style="top:150px">

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
        <div class="row py-5">



        </div>
    </div>
</section>
@endsection