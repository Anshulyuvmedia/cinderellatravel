@extends('frontend.layout.websitemain')
@section('content')


<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down"
    data-aos-delay="100">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<section class="testimonial-area2 overflow-hidden space" id="testi-sec">
    <div class="container-fluid">
        <div class="title-area text-center"><span class="sub-title">Our Branches</span>
            <h2 class="sec-title">Making a presence in every part of the world!</h2>
        </div>
        <div class="row column-gap-3">
            <div class="col-lg-8">
                <x-map />
            </div>
            <div class="col-lg-4 mt-3 mt-lg-0">
                <div class="row g-3">
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row align-items-center">
                        <img src="https://flagcdn.com/w160/ng.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Lagos</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row2 align-items-center">
                        <img src="https://flagcdn.com/w160/ng.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Abuja</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/ng.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Port Harcourt</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/ng.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Kano</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/ng.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Enugu</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/sl.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Freetown</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/lr.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Monrovia</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/bf.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Ouagadougou</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/cm.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Yaounde</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/gn.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Conakry</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/gh.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Accra</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/gh.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Kumasi</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/zw.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Harare</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/zm.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Harare</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/in.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>ajmer</h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/sl.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Kenema </h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/ao.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Makeni </h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/lr.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Ganta </h4>
                    </div>
                    <div class="d-flex col-6 gap-2 flex-column flex-lg-row flex-row align-items-center">
                        <img src="https://flagcdn.com/w160/sl.png" alt="" style="width:50px ;height:50px;border-radius: 50%; object-fit: cover;">
                        <h4>Angola </h4>
                    </div>
                </div>

                </div>
            </div>


            <div class="container mt-5">
                <div class="row g-3">

                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Lagos, Nigeria</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">saleslos@cinderellatravel.co.in</p>
                                <p class="mb-0">+234 904 623 4551</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Abuja, Nigeria</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salesabv@cinderellatravel.co.in</p>
                                <p class="mb-0">+234 816 958 1101</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Port Harcourt, Nigeria</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">saleslos@cinderellatravel.co.in</p>
                                <p class="mb-0">+234 810 994 0319</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Kano, Nigeria</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">reservationlos@cinderellatravel.co.in</p>
                                <p class="mb-0">+234 904 623 4551</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Enugu, Nigeria</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">saleslos@cinderellatravel.co.in</p>
                                <p class="mb-0">+234 904 623 4551</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Freetown, Sierra Leone</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salesfna@cinderellatravel.co.in</p>
                                <p class="mb-0">+232 80 212179</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="700">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Monrovia, Liberia</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salesrob@cinderellatravel.co.in</p>
                                <p class="mb-0">+231 77 508 1433</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="800">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Owagadougou, Burkina Faso</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salesoua@lamairatravel.com</p>
                                <p class="mb-0">+226 05 05 46 50</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="900">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Yaounde, Cameroon</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salesyao@lamairatravel.com</p>
                                <p class="mb-0">+226 05 05 46 50</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1000">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Conakry, Guinea</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salescky@lamairatravel.com</p>
                                <p class="mb-0">+224 613 00 22 22</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1100">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Accra, Ghana</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salesacc@lamairatravel.com</p>
                                <p class="mb-0">+233 531 100 930</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1200">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Kumasi, Ghana</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">Saleskms@lamairatravel.com</p>
                                <p class="mb-0">+233 53 110 1458</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1300">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Freetown, Sierra Leone</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salesfna@lamairatravel.com</p>
                                <p class="mb-0">+232 80808081</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1400">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Harare, Zimbabwe</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">holidayshre@lamairatravel.com</p>
                                <p class="mb-0">+263 77 749 9936</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1500">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Harare, Zambia</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">saleslun@lamairatravel.com</p>
                                <p class="mb-0">+260 571909379 / +260 771586081</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1600">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img text-center p-2" style="background-color: #0E5479;">
                                <h3 class="box-title">
                                    <a href="#" style="color:#fff">Freetown, Sierra Leone</a>
                                </h3>
                            </div>
                            <div class="tour-content pt-3 text-center">
                                <p class="mb-0">salesfna@majestictravel.co.in</p>
                                <p class="mb-0">+232 80 212180</p>
                            </div>
                        </div>
                    </div>


                <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1700">
                    <div class=" tour-box th-ani gsap-cursor">
                        <div class="tour-box_img global-img  text-center p-2" style="background-color: #0E5479;">
                            <h3 class="box-title">
                                <a href="#" style="color:#fff">Ajmer, India</a>
                            </h3>
                        </div>
                        <div class="tour-content pt-3  text-center">
                            <p class="mb-0"> salesfna@lamairatravel.com</p>
                            <p class="mb-0">+91 784 990 9355</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1700">
                    <div class=" tour-box th-ani gsap-cursor">
                        <div class="tour-box_img global-img  text-center p-2" style="background-color: #0E5479;">
                            <h3 class="box-title">
                                <a href="#" style="color:#fff">Kenema, Sierra Leone</a>
                            </h3>
                        </div>
                        <div class="tour-content pt-3  text-center">
                           
                            <p class="mb-0">+232 90 313132</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1700">
                    <div class=" tour-box th-ani gsap-cursor">
                        <div class="tour-box_img global-img  text-center p-2" style="background-color: #0E5479;">
                            <h3 class="box-title">
                                <a href="#" style="color:#fff">Luanda, Angola</a>
                            </h3>
                        </div>
                        <div class="tour-content pt-3  text-center">
                           
                            <p class="mb-0">+244 976 540 535 / +232 80 212184</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1700">
                    <div class=" tour-box th-ani gsap-cursor">
                        <div class="tour-box_img global-img  text-center p-2" style="background-color: #0E5479;">
                            <h3 class="box-title">
                                <a href="#" style="color:#fff">Ganta, Liberia</a>
                            </h3>
                        </div>
                        <div class="tour-content pt-3  text-center">
                           
                            <p class="mb-0">+231 77 450 0012</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="1700">
                    <div class=" tour-box th-ani gsap-cursor">
                        <div class="tour-box_img global-img  text-center p-2" style="background-color: #0E5479;">
                            <h3 class="box-title">
                                <a href="#" style="color:#fff">Makeni, Sierra Leone </a>
                            </h3>
                        </div>
                        <div class="tour-content pt-3  text-center">
                           
                            <p class="mb-0">+232 80 212183</p>
                        </div>

                    </div>
                </div>


                </div>
            </div>
            <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-9%"><img class="gmovingX"
                    src="assets/img/shape/shape_7.png" alt="shape"></div>
            <div class="shape-mockup spin d-none d-xl-block" data-bottom="30%" data-right="-10%"><img
                    src="assets/img/shape/shape_2_5.png" alt="shape"></div>
            <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-left="-5%"><img
                    src="assets/img/shape/shape_2_2.png" alt="shape"></div>
        </div>
    </section>

    <div class="space">
        <div class="container">
            <div class="title-area text-center" data-aos="fade-up" data-aos-delay="200">
                <span class="sub-title">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>
            <div class="row gy-4  justify-content-center">
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/location-dot2.svg') }}"
                                alt="location"></div>
                        <div class="about-contact-details">
                            <h6 class="">Our Address</h6>
                            <p class="about-contact-details-text"> 51A Wilkinson road, </p>
                            <p class="about-contact-details-text">Freetown, Sierra Leone</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/call.svg') }}"
                                alt="phone">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:+23278676849">+23278676849</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon"><img src="{{ asset('assets/img/icon/mail.svg') }}"
                                alt="email">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="">Email Address</h6>
                            <p class="about-contact-details-text">
                                <a href="mailto:salesfna@lamairatravel.com">salesfna@lamairatravel.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-extra2-top space-extra2-bottom" data-bg-src="{{ asset('assets/img/bg/video_bg_1.jpg') }}">
        <div class="container">
            <div class="row py-5 my-lg-5 row-gap-5 flex-row-reverse justify-content-center align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4886.478917090417!2d-13.272074424152743!3d8.482012497309523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf04c53c4172d373%3A0xbaa3debe4d8059cb!2s51%20Wilkinson%20Road%2C%20Freetown%2C%20Sierra%20Leone!5e1!3m2!1sen!2sin!4v1763214942727!5m2!1sen!2sin"
                        width="600" height="650" style="border-radius:20px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 ">
                    <div data-aos="fade-right" data-aos-delay="700">
                        <form action="{{ route('enquiry') }}" method="POST" class="contact-form style2 ">
                            @csrf
                            <h3 class="sec-title mb-30 text-capitalize">Book a tour</h3>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name3"
                                        placeholder="First Name">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="email" class="form-control" name="email3" id="email3"
                                        placeholder="Your Mail">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="form-group col-12">
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="Select Tour Type" selected="selected" disabled="disabled">Select
                                            Tour
                                            Type</option>
                                        <option value="Africa Adventure">Africa Adventure</option>
                                        <option value="Africa Wild">Africa Wild</option>
                                        <option value="Asia">Asia</option>
                                        <option value="Scandinavia">Scandinavia</option>
                                        <option value="Western Europe">Western Europe</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Your Message"></textarea>
                                    <i class="fas fa-comment"></i>
                                </div>
                                <div class="form-btn col-12 mt-24">
                                    <button type="submit" class="th-btn style3">Send message <img
                                            src="{{ asset('assets/img/icon/plane.svg') }}" alt="plane"></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_KLtDmYZB0Qy_b0f6LHJSlDV2wYYPf8s&libraries=places">
    </script>
@endsection
