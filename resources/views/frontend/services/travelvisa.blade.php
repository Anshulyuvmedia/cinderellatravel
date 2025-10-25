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
            </div>
            <div class="col-xxl-4 col-lg-5">
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
    <div class="row py-5">
        <!-- United States of America -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">United States of America</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for at least 6 months, including old and new
                                passports)</li>
                            <li class="mb-2">Completed proforma form</li>
                            <li class="mb-2">Two recent photographs (5x5 cm, white background, 70% face coverage)
                            </li>
                            <li class="mb-2">Covering letter stating name, designation, purpose, and duration of
                                visit</li>
                            <li class="mb-2">6-month bank statement (attested by the bank)</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">If invited: Invitation letter, invitee ID, and invitee bank statement
                                (if sponsoring)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, 6-month salary
                                bank statement (bank attested), original company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration, 6-month company bank statement (bank attested), last 3 years’
                                ITR</li>
                            <li class="mb-2"><strong>Retired:</strong> Retirement proof</li>
                            <li class="mb-2"><strong>Student:</strong> Student ID</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">6-month visa: INR 10,900</li>
                            <li class="mb-2">2-year visa: INR 38,500</li>
                            <li class="mb-2">5-year visa: INR 67,000</li>
                            <li class="mb-2">10-year visa: INR 83,500</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 15-20 working days after submission, subject to embassy
                            discretion.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- United Kingdom -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="450">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">United Kingdom</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Online proforma application</li>
                            <li class="mb-2">Two photographs (35-45mm, white background, 70% face coverage, matte
                                finish)</li>
                            <li class="mb-2">Original covering letter addressed to the respective
                                embassy/consulate</li>
                            <li class="mb-2">6-month bank statement (attested by the bank)</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">If invited: Invitation letter, invitee ID, and invitee bank
                                statement (if sponsoring)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, 6-month salary
                                bank statement (bank attested), original company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration, 6-month company bank statement (bank attested), last 3 years’
                                ITR</li>
                            <li class="mb-2"><strong>Retired:</strong> Retirement proof</li>
                            <li class="mb-2"><strong>Student:</strong> Student ID</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">6-month visa: INR 10,900</li>
                            <li class="mb-2">2-year visa: INR 38,500</li>
                            <li class="mb-2">5-year visa: INR 67,000</li>
                            <li class="mb-2">10-year visa: INR 83,500</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 15-20 working days after submission, subject to embassy
                            discretion.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Canada -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Canada</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Filled forms (IMM5257E & IMM5645E)</li>
                            <li class="mb-2">One colored photograph (white background, soft copy)</li>
                            <li class="mb-2">Covering letter addressed to The Canadian High Commission, New Delhi
                            </li>
                            <li class="mb-2">6-month bank statement (attested by the bank)</li>
                            <li class="mb-2">Last 3 years’ ITR</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">Property/asset documents (if available)</li>
                            <li class="mb-2">Birth and marriage certificates (if family)</li>
                            <li class="mb-2">If invited: Invitation letter, invitee ID, and invitee bank
                                statement (if sponsoring)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, 6-month salary
                                bank statement (bank attested), original company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration, 6-month company bank statement (bank attested), last 3 years’
                                ITR</li>
                            <li class="mb-2"><strong>Retired:</strong> Retirement proof</li>
                            <li class="mb-2"><strong>Student:</strong> Student ID</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">CAD 200 per person</li>
                        </ul>
                        <p><strong>General Information:</strong> Canada visa application is an online process with
                            no physical documentation submission. Original passport is submitted only after visa
                            approval.</p>
                        <p><strong>Processing Time:</strong> 40-60 working days after submission, subject to embassy
                            discretion.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Turkey -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="550">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Turkey</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Two biometric photos (2.5x2.5 inches, white background, taken within
                                6 months)</li>
                            <li class="mb-2">Covering letter addressed to the respective embassy/consulate</li>
                            <li class="mb-2">6-month bank statement (attested by the bank)</li>
                            <li class="mb-2">Last 3 years’ ITR</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">Birth and marriage certificates (if family)</li>
                            <li class="mb-2">If invited: Invitation letter, invitee ID, and invitee bank
                                statement (if sponsoring)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, 6-month salary
                                bank statement (bank attested), original company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration, 6-month company bank statement (bank attested), last 3 years’
                                ITR</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Delhi: INR 10,500 per person</li>
                            <li class="mb-2">Mumbai: INR 11,000 per person</li>
                        </ul>
                        <p><strong>General Information:</strong> Visa applied as per passport jurisdiction. Prior
                            appointment required. E-Visa available for holders of valid UK, USA, Schengen, or
                            Ireland visas.</p>
                        <p><strong>Processing Time:</strong> 10-15 working days after submission.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Malaysia E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="600">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Malaysia E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Clear scanned passport copy (6-month validity, front/back)</li>
                            <li class="mb-2">Clear photograph (white background, 70-80% face coverage)</li>
                            <li class="mb-2">Cover letter addressed to Immigration Officer, Malaysia</li>
                            <li class="mb-2">6-month bank statement (e-statement acceptable)</li>
                            <li class="mb-2">Double-dose vaccine certificate</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">Birth certificate (children under 12)</li>
                            <li class="mb-2">Birth and marriage certificates (if family)</li>
                            <li class="mb-2">Marriage certificate (if spouse name not endorsed)</li>
                            <li class="mb-2">Last visited country’s entry/exit stamp (if available)</li>
                            <li class="mb-2">If invited: Invitation letter, invitee ID, and invitee bank
                                statement (if sponsoring)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">INR 3,500 per person</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 3-4 working days after submission.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Singapore -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="650">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Singapore</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Signed visa application form</li>
                            <li class="mb-2">Two recent photographs (passport size, 80% face coverage, matte
                                finish, white background)</li>
                            <li class="mb-2">Cover letter addressed to The Visa Officer, Singapore High
                                Commission, New Delhi</li>
                            <li class="mb-2">6-month bank statement (e-statement acceptable)</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">Marriage certificate (if spouse name not endorsed)</li>
                            <li class="mb-2">If invited: Invitation letter, V39A form</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">INR 2,200 per person (courier extra)</li>
                        </ul>
                        <p><strong>General Information:</strong> Visa applied as per passport jurisdiction.
                            Documents may vary by jurisdiction.</p>
                        <p><strong>Processing Time:</strong> 3-4 working days after submission.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Australia E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="700">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Australia E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (all pages, 6-month validity)</li>
                            <li class="mb-2">Application Form No. 1419</li>
                            <li class="mb-2">Application Form No. 956</li>
                            <li class="mb-2">One recent colored photograph (white background)</li>
                            <li class="mb-2">Covering letter addressed to The Australian High Commission</li>
                            <li class="mb-2">6-month bank statement (attested by the bank)</li>
                            <li class="mb-2">Last 3 years’ ITR</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">Birth and marriage certificates (if family)</li>
                            <li class="mb-2">Aadhar card</li>
                            <li class="mb-2">Copy of old/current Australia visa (if applicable)</li>
                            <li class="mb-2">If invited: Invitation letter, invitee ID, and invitee bank
                                statement (if sponsoring)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, 6-month salary
                                bank statement (bank attested), original company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration, 6-month company bank statement (bank attested), last 3 years’
                                ITR</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">AUD 182 per person</li>
                        </ul>
                        <p><strong>General Information:</strong> Health insurance mandatory for applicants above 70
                            years (all must undergo medicals).</p>
                        <p><strong>Processing Time:</strong> 30 working days after submission, subject to embassy
                            discretion.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Saudi Arabia Business Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="750">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Saudi Arabia Business Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (current and previous, if any)</li>
                            <li class="mb-2">Two photographs (35x45mm, 80% face coverage, white background, matte
                                finish)</li>
                            <li class="mb-2">Original cover letter from Indian company (with designation,
                                passport details, purpose, signed with company seal)</li>
                            <li class="mb-2">Original recommendation letter from Chamber of Commerce</li>
                            <li class="mb-2">Invitation letter via MOFA website (for New Delhi jurisdiction)</li>
                            <li class="mb-2">CR copy of Saudi company</li>
                            <li class="mb-2">Original degree (attested, if required)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Single Entry (90 days validity, 30 days stay):</strong></li>
                            <li class="mb-2">Below 45 years: INR 19,670</li>
                            <li class="mb-2">45-65 years: INR 20,590</li>
                            <li class="mb-2">65+ years: INR 21,890</li>
                            <li class="mb-2"><strong>Multi Entry (365 days validity, 90 days stay):</strong></li>
                            <li class="mb-2">Below 45 years: INR 20,740</li>
                            <li class="mb-2">45-65 years: INR 21,990</li>
                            <li class="mb-2">65+ years: INR 28,490</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 5-6 working days after submission.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Saudi Arabia Family Visit Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="800">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Saudi Arabia Family Visit Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (current and previous, if any)</li>
                            <li class="mb-2">Two photographs (35x45mm, 80% face coverage, white background, matte
                                finish)</li>
                            <li class="mb-2">Original cover letter addressed to The Visa Officer, Royal Embassy
                                of Saudi Arabia, New Delhi</li>
                            <li class="mb-2">IQAMA/Digital ID copy of sponsor</li>
                            <li class="mb-2">Passport copy of sponsor (first and last page)</li>
                            <li class="mb-2">Proof of relationship with sponsor</li>
                            <li class="mb-2">Saudi Embassy attested marriage certificate (if spouse name not in
                                passport)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Multi Entry (365 days validity, 90 days stay):</strong></li>
                            <li class="mb-2">Below 45 years: INR 16,200</li>
                            <li class="mb-2">45-65 years: INR 18,450</li>
                            <li class="mb-2">65+ years: INR 23,650</li>
                            <li class="mb-2">70+ years: INR 27,150</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 5-6 working days after submission.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thailand -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="850">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Thailand</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Signed visa application form</li>
                            <li class="mb-2">Two photographs (35-45mm, 80% face coverage, matte finish, white
                                background)</li>
                            <li class="mb-2">Cover letter addressed to The Visa Officer, Royal Thai Embassy, New
                                Delhi</li>
                            <li class="mb-2">6-month bank statement (bank stamped)</li>
                            <li class="mb-2">Confirmed hotel booking</li>
                            <li class="mb-2">Confirmed air ticket</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Delhi: INR 3,500 per person</li>
                            <li class="mb-2">Mumbai: INR 4,000 per person</li>
                        </ul>
                        <p><strong>General Information:</strong> Visa applied as per passport jurisdiction. Courier
                            charges included for Mumbai region.</p>
                        <p><strong>Processing Time:</strong> 5-6 working days after submission.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bangladesh Business Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="900">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Bangladesh Business Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Two photographs (passport size, 80% face coverage, matte finish,
                                white background)</li>
                            <li class="mb-2">Covering letter on company letterhead (addressed to Bangladesh High
                                Commission, New Delhi)</li>
                            <li class="mb-2">Invitation letter (with authorized signatory details and Bangladeshi
                                company contact info)</li>
                            <li class="mb-2">GST or tax certificate of both companies</li>
                            <li class="mb-2">Trade license of both companies</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Delhi: INR 3,500 per person</li>
                            <li class="mb-2">Mumbai: INR 4,000 per person</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 7-10 working days after submission.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bangladesh Tourist Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="950">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Bangladesh Tourist Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Two photographs (passport size, 80% face coverage, matte finish,
                                white background)</li>
                            <li class="mb-2">Covering letter on company letterhead (addressed to Bangladesh High
                                Commission, New Delhi)</li>
                            <li class="mb-2">GST and registration certificate of Indian company</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">COVID-19 certificate (both doses)</li>
                            <li class="mb-2">NOC (if employed)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">INR 2,000 (single entry)</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 7-10 working days after submission.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Russia -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Russia</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (6-month validity)</li>
                            <li class="mb-2">Two recent colored photographs (white background)</li>
                            <li class="mb-2">Occupation details (company name, work position, contact info,
                                address)</li>
                            <li class="mb-2">Previous Russia travel details (if any)</li>
                            <li class="mb-2">Confirmed direct flight ticket (Delhi-Moscow-Delhi, if stay exceeds
                                15 days)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">14 Days Normal: INR 11,500</li>
                            <li class="mb-2">14 Days Urgent: INR 17,500</li>
                            <li class="mb-2">28 Days Normal: INR 13,500</li>
                            <li class="mb-2">28 Days Urgent: INR 18,500</li>
                        </ul>
                        <p><strong>General Information:</strong> Visa issued as per travel dates in the application
                            form. INR 1,500 submission fee applies.</p>
                        <p><strong>Processing Time:</strong> 4-5 working days (urgent), 4-20 working days (normal).
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Europe -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1050">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Europe</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Two photographs (35-45mm, white background, 70% face coverage, matte
                                finish)</li>
                            <li class="mb-2">Original covering letter addressed to the respective
                                embassy/consulate</li>
                            <li class="mb-2">6-month bank statement (attested by the bank)</li>
                            <li class="mb-2">Travel insurance</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">If invited: Invitation letter, invitee ID, and invitee bank
                                statement (if sponsoring)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, 6-month salary
                                bank statement (bank attested), original company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration, 6-month company bank statement (bank attested), last 3 years’
                                ITR</li>
                            <li class="mb-2"><strong>Retired:</strong> Retirement proof</li>
                            <li class="mb-2"><strong>Student:</strong> Student ID</li>
                        </ul>
                        <p><strong>General Information:</strong> Biometrics mandatory. Visa applied for the country
                            with the longest stay. Documents and charges vary by jurisdiction.</p>
                        <p><strong>Processing Time:</strong> 15-20 working days after submission, subject to embassy
                            discretion.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- South Africa Tourist -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">South Africa Tourist</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (valid for 6 months)</li>
                            <li class="mb-2">Two photographs (35-45mm, white background, 70% face coverage, matte
                                finish)</li>
                            <li class="mb-2">Original covering letter (with applicant’s name, passport number,
                                duration, expenses details)</li>
                            <li class="mb-2">6-month bank statement (attested by the bank)</li>
                            <li class="mb-2">Hotel booking</li>
                            <li class="mb-2">Day-to-day itinerary/travel plan</li>
                            <li class="mb-2">Air ticket</li>
                            <li class="mb-2">If invited: Invitation letter (with address and expense details),
                                invitee ID, invitee bank statement (attested by SA police and bank)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, 6-month salary
                                bank statement (bank attested), original company NOC</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Cover letter on business letterhead,
                                company registration, 6-month company bank statement (bank attested), last 3 years’
                                ITR</li>
                            <li class="mb-2"><strong>Retired:</strong> Retirement proof</li>
                            <li class="mb-2"><strong>Student:</strong> Student ID</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">INR 3,500 (single entry)</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 15-20 working days after submission, subject to embassy
                            discretion.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Azerbaijan E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1150">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Azerbaijan E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (6-month validity)</li>
                            <li class="mb-2">One recent colored photograph (white background)</li>
                            <li class="mb-2">Travel date (after 3 working days from application)</li>
                            <li class="mb-2">Mobile number</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Normal: USD 30 per person</li>
                            <li class="mb-2">Urgent: USD 70 per person</li>
                        </ul>
                        <p><strong>General Information:</strong> Valid for 90 days with 30-day stay permission. Visa
                            applied as per passport jurisdiction.</p>
                        <p><strong>Processing Time:</strong> 4-5 working days (normal), 24 hours (urgent).</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vietnam E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Vietnam E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (6-month validity)</li>
                            <li class="mb-2">One recent colored photograph (white background)</li>
                            <li class="mb-2">Entry/exit point</li>
                            <li class="mb-2">Travel date</li>
                            <li class="mb-2">Hotel or invitation letter</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">30 Days Normal: USD 30</li>
                            <li class="mb-2">Urgent: USD 70 per person</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 3-4 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kenya E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1250">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Kenya E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (6-month validity)</li>
                            <li class="mb-2">One recent colored photograph (white background)</li>
                            <li class="mb-2">Occupation details</li>
                            <li class="mb-2">Travel date</li>
                            <li class="mb-2">Hotel or invitation letter</li>
                            <li class="mb-2">Previous Kenya travel history</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">USD 55 (30 days normal)</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 5-6 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Oman E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1300">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Oman E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (6-month validity)</li>
                            <li class="mb-2">One recent colored photograph (white background)</li>
                            <li class="mb-2">PAN card</li>
                            <li class="mb-2">Travel date</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>With Insurance:</strong></li>
                            <li class="mb-2">10 Days: INR 3,000</li>
                            <li class="mb-2">30 Days: INR 6,250</li>
                            <li class="mb-2"><strong>Without Insurance:</strong></li>
                            <li class="mb-2">10 Days: INR 2,300</li>
                            <li class="mb-2">30 Days: INR 5,800</li>
                        </ul>
                        <p><strong>General Information:</strong> B2B agreement required for processing.</p>
                        <p><strong>Processing Time:</strong> 3-4 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bahrain E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1350">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Bahrain E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (6-month validity)</li>
                            <li class="mb-2">One recent colored photograph (white background)</li>
                            <li class="mb-2">Covering letter (stating purpose of visit)</li>
                            <li class="mb-2">PAN card/Aadhar card</li>
                            <li class="mb-2">Hotel voucher or host’s CPR card, invitation letter, passport copy,
                                contact number</li>
                            <li class="mb-2">6-month bank statement (minimum balance INR 90,000, bank stamped)
                            </li>
                            <li class="mb-2">Ticket copy</li>
                            <li class="mb-2">Occupation details and relevant documents</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">INR 7,600 (30 days normal, with insurance)</li>
                        </ul>
                        <p><strong>General Information:</strong> High rejection chances. Visa fees non-refundable.
                            No application/reference number provided.</p>
                        <p><strong>Processing Time:</strong> 10-12 working days, subject to immigration department.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Egypt E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1400">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Egypt E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (6-month validity)</li>
                            <li class="mb-2">PAN card</li>
                            <li class="mb-2">Travel date</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Single Entry: INR 5,500</li>
                            <li class="mb-2">Single Entry Urgent: INR 7,800</li>
                        </ul>
                        <p><strong>Processing Time:</strong> Normal: 5-6 working days; Urgent: 2-3 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Zambia E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1450">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Zambia E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (6-month validity)</li>
                            <li class="mb-2">One recent colored photograph (white background)</li>
                            <li class="mb-2">Travel date</li>
                            <li class="mb-2">Hotel</li>
                            <li class="mb-2">Yellow fever card</li>
                            <li class="mb-2">Covering letter and invitation letter (if business visa)</li>
                            <li class="mb-2">Zambia company incorporation (if business visa)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">30 Days Normal: INR 3,900</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 5-7 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ethiopia E-Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1500">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Ethiopia E-Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Passport copy (6-month validity)</li>
                            <li class="mb-2">One recent colored photograph (white background)</li>
                            <li class="mb-2">Travel date</li>
                            <li class="mb-2">Hotel</li>
                            <li class="mb-2">Yellow fever card</li>
                            <li class="mb-2">Covering letter and invitation letter (if business visa)</li>
                            <li class="mb-2">Business license and TIN certificate of inviting company (if
                                business visa)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">30 Days Single Entry: INR 5,880</li>
                            <li class="mb-2">30 Days Single (Business): INR 4,200</li>
                        </ul>
                        <p><strong>Processing Time:</strong> 5-7 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nigeria Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1550">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Nigeria Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport</li>
                            <li class="mb-2">Four photographs (white background)</li>
                            <li class="mb-2">Covering letter on business letterhead</li>
                            <li class="mb-2">Invitation letter (stating full responsibility for travel and stay
                                costs)</li>
                            <li class="mb-2">Passport copy of signing authority (with work/residence permit if
                                not Nigerian)</li>
                            <li class="mb-2">Incorporation certificate of Nigerian company</li>
                            <li class="mb-2">6-month bank statement (e-statement acceptable)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">30 Days Normal: INR 32,590</li>
                            <li class="mb-2">30 Days Urgent: INR 42,590</li>
                            <li class="mb-2">6 Months Multi Entry (Urgent): INR 56,090</li>
                            <li class="mb-2">1 Year Multi Entry (Urgent): INR 66,090</li>
                        </ul>
                        <p><strong>General Information:</strong> Biometrics mandatory.</p>
                        <p><strong>Processing Time:</strong> 5-7 working days (urgent), 25-30 working days (normal).
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ghana Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1600">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Ghana Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (6-month validity)</li>
                            <li class="mb-2">Two photographs (white background)</li>
                            <li class="mb-2">Covering letter on business letterhead</li>
                            <li class="mb-2">Invitation letter (with Ghana company address, travel dates,
                                signatory’s ID, and contact)</li>
                            <li class="mb-2">Two references from inviting company (with valid Ghana National ID)
                            </li>
                            <li class="mb-2">Company registration of Indian and Ghana companies</li>
                            <li class="mb-2">Certificate of business commencement (Ghana company)</li>
                            <li class="mb-2">Original yellow fever vaccination card</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">30 Days Single Entry: INR 11,270</li>
                            <li class="mb-2">6 Months Multi Entry: INR 19,800</li>
                            <li class="mb-2">1 Year Multi Entry: INR 29,500</li>
                        </ul>
                        <p><strong>General Information:</strong> Submit via <a
                                href="https://visa.ghana-mission.co.in/ApplyVisa"
                                target="_blank">https://visa.ghana-mission.co.in/ApplyVisa</a>.</p>
                        <p><strong>Processing Time:</strong> 5-7 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Morocco Tourist Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1650">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Morocco Tourist Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport (6-month validity, 1 blank page, with first/last
                                page copies)</li>
                            <li class="mb-2">Two photographs (2x2 inches, white background, 80% face coverage)
                            </li>
                            <li class="mb-2">Covering letter with profession details</li>
                            <li class="mb-2">Confirmed hotel booking or legalized invitation letter (for family
                                visits)</li>
                            <li class="mb-2">6-month bank statement (signed and stamped)</li>
                            <li class="mb-2">Ticket</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">INR 5,090 (Single Entry)</li>
                        </ul>
                        <p><strong>General Information:</strong> Submit via <a
                                href="https://visa.ghana-mission.co.in/ApplyVisa"
                                target="_blank">https://visa.ghana-mission.co.in/ApplyVisa</a>.</p>
                        <p><strong>Processing Time:</strong> 5-7 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Morocco Business Visa -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1700">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">Morocco Business Visa</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Requirements</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">Original passport with at least 6 months validity (from the date of
                                submission of visa application) and 1 blank page. A copy of the first and last page
                                of the passport is also required.</li>
                            <li class="mb-2">Two photographs (2x2 inches, white background, 80% face coverage)
                            </li>
                            <li class="mb-2">Covering letter from the Indian company with complete travel
                                details.</li>
                            <li class="mb-2">Invitation letter from any Moroccan company, the signature on the
                                invitation should be legalized by local authorities in Morocco and attested by the
                                bureau of legalization of the Ministry of Foreign Affairs, Morocco, or certified
                                Apostille.</li>
                            <li class="mb-2">Company’s original bank statement updated for 6 months, signed and
                                stamped by the bank</li>
                            <li class="mb-2">Ticket.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Occupation-Specific Documents</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2"><strong>Employed:</strong> 3 months’ salary slips, salary bank
                                statement for 6 months with bank stamp, and company NOC (original)</li>
                            <li class="mb-2"><strong>Self-Employed:</strong> Original cover letter on business
                                letterhead, company registration, company’s bank statement with bank stamp, and last
                                3 years’ ITR</li>
                        </ul>
                        <h6 class="fw-bold mt-3">Visa Charges</h6>
                        <ul class="list-unstyled checklist">
                            <li class="mb-2">INR 5,290 (Single Entry)</li>
                        </ul>
                        <p><strong>General Information:</strong> Visa stay and validity completely depend on the
                            embassy.</p>
                        <p><strong>Processing Time:</strong> 5-7 working days.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- General Instructions -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="1750">
            <div class="card shadow-sm p-4 rounded-3">
                <h2 class="box-title">General Instructions</h2>
                <div class="row">
                    <ul class="list-unstyled checklist">
                        <li class="mb-2">Visa will be applied as per the jurisdiction. (Where applicable)</li>
                        <li class="mb-2">Service and courier charges will be applicable as per the country visa
                            process.</li>
                        <li class="mb-2">Visa fees and its relevant documents may vary as per its jurisdiction.
                        </li>
                        <li class="mb-2">Visa fee can change anytime without any prior notice from embassy or
                            immigration.</li>
                        <li class="mb-2">Visa issuance and rejection is subject to immigration/embassy approval
                            and visa fees will be non-refundable in case of rejection or any other issues.</li>
                        <li class="mb-2">A visa does not guarantee entry; that decision remains the right of the
                            immigration officials of the country concerned.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="th-comment-form" data-aos="fade-up" data-aos-delay="1800">
            <div class="row">
                <h3 class="blog-inner-title h4 mb-2">Contact Us</h3>
                <p class="mb-25">Reach out to us from our contact form and we will get back to you shortly.</p>
                <div class="col-md-6 form-group" data-aos="fade-up" data-aos-delay="1850">
                    <input type="text" placeholder="Full Name*" class="form-control" required>
                    <i class="far fa-user"></i>
                </div>
                <div class="col-md-6 form-group" data-aos="fade-up" data-aos-delay="1900">
                    <input type="email" placeholder="Your Email*" class="form-control" required>
                    <i class="far fa-envelope"></i>
                </div>
                <div class="col-md-6 form-group" data-aos="fade-up" data-aos-delay="1950">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone Number"
                        class="form-control" required>
                    <i class="far fa-phone"></i>
                </div>
                <div class="col-md-6 form-group" data-aos="fade-up" data-aos-delay="2000">
                    <input type="text" placeholder="Destination" class="form-control" required>
                    <i class="far fa-globe"></i>
                </div>
                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="2050">
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
                <div class="col-12 form-group" data-aos="fade-up" data-aos-delay="2100">
                    <textarea placeholder="Comment*" class="form-control"></textarea>
                    <i class="far fa-pencil"></i>
                </div>
                <div class="col-12 form-group" data-aos="fade-up" data-aos-delay="2150">
                    <input type="checkbox" id="html">
                    <label for="html">Save my name, email, and website in this browser for the next time I
                        comment.</label>
                </div>
                <div class="col-12 form-group mb-0" data-aos="fade-up" data-aos-delay="2200">
                    <button class="th-btn">Send Message<img src="{{ asset('assets/img/icon/plane2.svg') }}"
                            alt=""></button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection