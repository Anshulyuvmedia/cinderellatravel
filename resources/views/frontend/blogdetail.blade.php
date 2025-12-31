@extends('frontend.layout.websitemain')
@section('content')

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{$details->blogname}}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul>
        </div>
    </div>
</div>
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="th-blog blog-single">
                    <div class="blog-img"><img src="{{asset('adminAssets/images/Blogs/'.$details->blogthumbnail)}}" alt="Blog Image "></div>
                    <div class="blog-content">
                        <div class="blog-meta"><a class="author" href="#"><i class="fa-light fa-user"></i>by
                                Lamaira Travel</a> <a href="#"><i class="fa-regular fa-calendar"></i>{{ $details->created_at->format('F j Y') }}</a></div>
                        <h2 class="blog-title">{{$details->blogname}}</h2>
                        <div class="blog-text mb-30">
                            {!! $details->blogdescription !!}
                        </div>


                        <div class="share-links clearfix">
                            <div class="row justify-content-between">
                                <div class="col-md-auto"><span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        @foreach ($details->tags as $tag)
                                        <a href="#">{{ $tag }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-auto text-xl-end">
                                    <div class="share-links_wrapp"><span class="share-links-title">Share:</span>
                                        <div class="social-links"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="th-comment-form">
                    <div class="row">
                        <h3 class="blog-inner-title h4 mb-2">Leave a Reply</h3>
                        <p class="mb-25">Your email address will not be published. Required fields are marked</p>
                        <div class="col-md-6 form-group"><input type="text" placeholder="Full Name*" class="form-control" required> <i class="far fa-user"></i></div>
                        <div class="col-md-6 form-group"><input type="text" placeholder="Your Email*" class="form-control" required> <i class="far fa-envelope"></i></div>
                        <div class="col-12 form-group"><input type="text" placeholder="Website" class="form-control" required> <i class="far fa-globe"></i></div>
                        <div class="col-12 form-group"><textarea placeholder="Comment*" class="form-control"></textarea> <i class="far fa-pencil"></i></div>
                        <div class="col-12 form-group"><input type="checkbox" id="html"> <label for="html">Save my
                                name, email, and website in this browser for the next time I comment.</label></div>
                        <div class="col-12 form-group mb-0"><button class="th-btn background-gradient"> Send Message<img src="assets/img/icon/plane2.svg" alt=""></button></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget">
                        <h3 class="widget_title">Recent Blogs</h3>
                        <div class="recent-post-wrap">
                            @foreach ($recentblogs->take(15) as $datab)
                            <div class="recent-post">
                                <div class="media-img"><a href="{{route('blogdetail',['id'=>$datab->id])}}" class="d-inline-block h-100"><img src="{{asset('adminAssets/images/Blogs/'.$datab->blogthumbnail)}}" alt="Blog Image " class="h-100 object-fit-cover"></a></div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="#">{{Str::limit($datab->blogname,50)}}</a></h4>
                                    <div class="recent-post-meta"><a href="#"><i class="fa-regular fa-calendar"></i>{{ $datab->created_at->format('F j Y') }}</a></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="widget widget_offer" data-bg-src="{{asset('assets/img/bg/widget_bg_1.jpg')}}">
                        <div class="offer-banner">
                            <div class="offer">
                                <h6 class="box-title">Need Help? We Are Here To Help You</h6>
                                <div class="banner-logo"><img src="{{asset('assets/img/logo_l.png')}}" alt="Tourm"></div>
                                <div class="offer">
                                    <h6 class="offer-title">You Get Online support</h6><a class="offter-num" href="#">+23278676849</a>
                                </div><a href="{{route('contactus')}}" class="th-btn style2 th-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="5%" data-right="-8%"><img src="{{asset('assets/img/shape/shape_1.png')}}" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="1%" data-right="-7%"><img src="{{asset('assets/img/shape/shape_2.png')}}" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="2%" data-right="0%"><img src="{{asset('assets/img/shape/shape_3.png')}}" alt="shape"></div>
    </div>
</section>

@endsection