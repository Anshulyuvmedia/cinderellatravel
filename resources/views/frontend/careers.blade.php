@extends('frontend.layout.websitemain')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Careers</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Careers</li>
            </ul>
        </div>
    </div>
</div>

<div class="space">
    <div class="container">
        <div class="title-area text-center" data-aos="fade-up" data-aos-delay="200">
            <span class="sub-title">Join Our Team</span>
            <h2 class="sec-title">Job Openings</h2>
        </div>
        <div class="row gy-5 justify-content-center">
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="about-contact-grid style2 position-relative pt-5">
                    <div class="about-contact-icon position-absolute start-50 translate-middle-x" style="top:-35px">
                        <img src="{{ asset('assets/img/icon/ticket-flight.png') }}" alt="ticket" width="50">
                    </div>
                    <div class="about-contact-details">
                        <h3 class="text-center">Air Ticketing</h3>
                        <p class="about-contact-details-text">Join our team to assist customers with flight bookings and travel itineraries.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text">
                            <li class="mb-2">Minimum 12th Pass</li>
                            <li class="mb-2">Basic Computer Knowledge</li>
                            <li class="mb-2">Good Communication Skills</li>
                            <li class="mb-2">Ready to Relocate</li>
                            <li class="mb-2">Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="about-contact-grid style2 position-relative pt-5 ">
                    <div class="about-contact-icon position-absolute start-50 translate-middle-x" style="top:-35px">
                        <img src="{{ asset('assets/img/icon/social-media-marketing.png') }}" alt="social media" width="50">
                    </div>
                    <div class="about-contact-details">
                        <h3 class="text-center">Sales & Marketing</h3>
                        <p class="about-contact-details-text">Drive our brand growth through innovative sales and marketing strategies.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text">
                            <li class="mb-2">Minimum 12th Pass</li>
                            <li class="mb-2">Basic Computer Knowledge</li>
                            <li class="mb-2">Good Communication Skills</li>
                            <li class="mb-2">Ready to Relocate</li>
                            <li class="mb-2">Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="about-contact-grid style2 position-relative pt-5">
                    <div class="about-contact-icon position-absolute start-50 translate-middle-x" style="top:-35px">
                        <img src="{{ asset('assets/img/icon/accounting.png') }}" alt="accounting" width="50">
                    </div>
                    <div class="about-contact-details">
                        <h3 class="text-center">Accountant</h3>
                        <p class="about-contact-details-text">Manage financial records and ensure accuracy in our accounting processes.</p>
                        <p class="about-contact-details-text"><strong>Requirements:</strong></p>
                        <ul class="about-contact-details-text ">
                            <li class="mb-2">Minimum 12th Pass</li>
                            <li class="mb-2">Basic Computer Knowledge</li>
                            <li class="mb-2">Good Communication Skills</li>
                            <li class="mb-2">Ready to Relocate</li>
                            <li class="mb-2">Experience and Fresher Both</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-comment-form" data-aos="fade-up" data-aos-delay="600">
            <div class="row">

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
                <div class="col-md-6 form-group d-flex align-items-center">
                    <label for="file" class="form-control align-self-center" style="padding-top: 16px;" id="filename"> Select file</label>
                    <input type="file" placeholder="Destination" class="form-control d-none" id="file" required>
                    <i class="far fa-globe"></i>
                </div>
                <div class="form-group col-12">
                    <select name="subject" id="subject" class="form-select nice-select">
                        <option value="Select Tour Type" selected="selected" disabled="disabled">Select
                            Service Type</option>
                        <option value="Air Ticketing">Air Ticketing</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Accountant">Accountant</option>

                    </select>
                </div>
                <div class="col-12 form-group">
                    <textarea placeholder="Comment*" class="form-control"></textarea>
                    <i class="far fa-pencil"></i>
                </div>

                <div class="col-12 form-group mb-0">
                    <button class="th-btn style3 th-icon">Send Message<img src="{{ asset('assets/img/icon/plane2.svg') }}"
                            alt="Send Icon"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const fileInput = document.getElementById('file');
    const filename = document.getElementById('filename')
    fileInput.addEventListener('change', function(event) {
        const files = event.target.files;

        filename.innerHTML = files[0].name
        if (files[0].name.length > 10) {
            filename.innerHTML = files[0].name.substring(0, 10) + "...";
        }
    });
</script>
@endsection