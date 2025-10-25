@extends('frontend.layout.websitemain')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
        data-aos-delay="100">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Hotel Booking</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                    <li>Hotel Booking</li>
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
                            <img src="{{ asset('assets/img/services/hotelbooking.webp') }}" alt="Hotel Booking Image">
                        </div>
                        <div class="page-content d-block" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="box-title mt-3">Our Top Hotel Chains</h2>
                            <p class="box-text mb-30">Cinderella has a wide range of luxury and budget-friendly hotel chain
                                properties. We have picked the finest hotels in India with world-class amenities. We bring
                                you not only a stay option, but an experience in your budget to enjoy the luxury. We make
                                sure that all the hotels are safe, hygienic, comfortable, and easily approachable when it
                                comes to location. Book your hotel with Cinderella and don’t forget to grab an amazing hotel
                                deal to save huge on your stay.
                            </p>

                            <div class="service-inner-img mb-40" data-aos="zoom-in" data-aos-delay="400">
                                <img src="{{ asset('assets/img/services/hostelbooking2.webp') }}"
                                    alt="Hotel Booking Inner Image">
                            </div>
                            <div class="service-inner-img mb-40" data-aos="zoom-in" data-aos-delay="400">
                                <h4>Cheapest Deals on Budget & Luxury Hotels are Available at Cinderella</h4>
                                <p class="box-text mb-30">
                                    Due to the huge influx of tourists in India, Cinderella offers a wide range of luxury,
                                    deluxe and budget hotels to them. Choose to stay in luxury and comfort with greatest
                                    discounts available on hotels bookings. We list classiest budget hotels on our site
                                    along with some of the prominent international hotel chains of India including Oberoi
                                    Group, ITC Group, Taj Group, Le Meridian Group and many others. Ranging from class
                                    hotels to luxury beach resorts, each hotel on our site gives you a memorable staying
                                    experience. Along with deluxe, budget and luxury hotels, Cinderella also displays a
                                    number of heritage hotels for offering you a royal stay. Enjoy cheap hotel deals for any
                                    destination with great savings.


                                </p>
                            </div>

                        </div>

                    </div>

                    <h2 class="box-title">Why Book Hotels with Cinderella?</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-6 p-3">
                            <h6>Extensive Hotel Options</h6>
                            <p>Best hotels available for different destinations to offer you a stay of lifetime.</p>
                        </div>
                        <div class="col-md-6 p-3">
                            <h6>Saving on Hotel Booking</h6>
                            <p>Enjoy hotel bookings with best offers and discount and make your stay unforgettable.</p>
                        </div>
                        <div class="col-md-6 p-3">
                            <h6>Hotel Ratings</h6>
                            <p>All our hotels have good ratings on Trip Advisor and recommended by users.</p>
                        </div>
                        <div class="col-md-6 p-3">
                            <h6>Great Deals on Travel</h6>
                            <p>Also grab attractive offers on holiday packages, flights and other travel products</p>
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
                                    <option value="Hotel Booking">Hotel Booking</option>
                                    <option value="Travel Visa">Travel Visa</option>
                                    <option value="Hotel Booking">Hotel Booking</option>
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
                                <button class="th-btn">Send Message<img src="{{ asset('assets/img/icon/plane2.svg') }}"
                                        alt="Send Icon"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                   <aside class="sidebar-area style3 position-sticky "  style="top:150px" >
                   {{--   <div class="widget widget_categories">
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

                        <div class="widget widget_tag_cloud" data-aos="fade-left" data-aos-delay="300">
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
