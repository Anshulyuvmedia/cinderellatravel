@extends('frontend.layout.websitemain')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
    data-aos-delay="100">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Air Ticketing</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
                <li>Air Ticketing</li>
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
                        <img src="{{ asset('assets/img/services/airticketing.webp') }}" alt="Air Ticketing Image">
                    </div>
                    <div class="page-content d-block" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="box-title mt-3">Air Ticketing</h2>
                        <p class="box-text mb-30">At Lamira Travel & Tours, we provide reliable <strong>air ticketing services</strong> with access to major global
                            airlines. Whether you are traveling for business, family vacation, or a dream holiday, we make booking fights smooth and hassle-free. Our <strong>travel agents</strong> secure the best airfare deals for both <strong>international travel</strong> and domestic routes, ensuring comfort, convenience, and budget-friendly options. With our
                            trusted airline partners, your journey to the world’s most popular <strong>travel destinations</strong> begins with
                            ease.</p>
                        <p><strong>Best prices, secured reservations, and stress-free ticketing — just for you.</strong></p>
                        <div class="service-inner-img mb-40" data-aos="zoom-in" data-aos-delay="400">
                            <img src="{{ asset('assets/img/services/air2ticket.webp') }}"
                                alt="Air Ticketing Inner Image">
                        </div>
                        <h2 class="box-title">Highlights</h2>
                        <div class="checklist" data-aos="fade-up" data-aos-delay="500">
                            <ul class="list-unstyled">
                                <li class="mb-2">24/7 year-round communication</li>
                                <li class="mb-2">Competitive pricing</li>
                                <li class="mb-2">Bookings confirmation and follow-up on all AFRICA as well as
                                    international airlines within and without AFRICA</li>
                                <li class="mb-2">Exclusive itinerary organization for private trips available upon
                                    request</li>
                                <li class="mb-2">Speed and ease of issuance and delivery with E-ticketing through the
                                    latest technologies</li>
                                <li class="mb-2">Our partners around the world are comprised of over 500 travel and
                                    tourism offices, providing the best services at best prices</li>
                                <li class="mb-2">Premium lounges to serve our premium customers and their families
                                </li>
                                <li class="mb-2">Customer service and support to companies, banks, and retired group
                                    employees</li>
                                <li class="mb-2">Emergency support to plan and book your trip as fast as possible</li>
                            </ul>
                        </div>
                    </div>

                    <div class="th-comment-form" data-aos="fade-up" data-aos-delay="600">
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
                                    <option value="Air Ticketing">Air Ticketing</option>
                                    <option value="Travel Visa">Travel Visa</option>
                                    <option value="Travel Insurance">Travel Insurance</option>
                                    <option value="Hotel Booking">Hotel Booking</option>
                                    <option value="Holiday Packages">Holiday Packages</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Comment*" class="form-control"></textarea>
                                <i class="far fa-pencil"></i>
                            </div>
                            <div class="col-12 form-group">
                                <input type="checkbox" id="html">
                                <label for="html">Save my name, email, and website in this browser for the next time
                                    I comment.</label>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="th-btn style3 th-icon">Send Message<img src="{{ asset('assets/img/icon/plane2.svg') }}"
                                        alt="Send Icon"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5 ">
                <aside class="sidebar-area style3 position-sticky " style="top:150px">
                    {{-- <div class="widget widget_categories">
                        <h3 class="widget_title">Destinations</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
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

            <div class="widget widget_tag_cloud " data-aos="fade-left">
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