@extends('frontend.layout.websitemain')
@section('content')
<style>
    .small.text-muted {
        display: none;
    }

    .d-flex.justify-items-center.justify-content-between {
        justify-content: center;
    }
</style>
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blogs</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
            </ul>
        </div>
    </div>
</div>
<section class="bg-smoke overflow-hidden space arrow-wrap pt-5" id="blog-sec">
    <div class="container shape-mockup-wrap">
        <div class="mb-30 text-center text-md-start">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    <div class="title-area mb-md-0">
                        <span class="sub-title">Travel News & Tips</span>
                        <h2 class="sec-title">Latest Blogs & Travel Insights</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            @foreach ($blogs as $data)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="global-img">
                        <img src="{{ asset('adminAssets/images/Blogs/'.$data->blogthumbnail) }}" class="card-img-top" alt="{{ $data->blogname }}">
                    </div>
                    <div class="card-body">
                        <div class="blog-meta mb-2">
                            <a class="author text-muted small" href="{{ route('blogdetail', ['id' => $data->id]) }}">
                                {{ $data->created_at->format('F j, Y') }}
                            </a>
                        </div>
                        <h5 class="card-title">
                            <a href="{{ route('blogdetail', ['id' => $data->id]) }}" class="text-dark text-decoration-none">
                                {{ Str::limit($data->blogname, 30) }}
                            </a>
                        </h5>
                        <div><p> {{  Str::limit(strip_tags($data->blogdescription), 100) }}</p></div>
                        <a href="{{ route('blogdetail', ['id' => $data->id]) }}" class="th-btn style4 th-icon mt-3">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class=" py-1 mt-2 ">
            {{ $blogs->links('pagination::bootstrap-5') }}

        </div>
        <!-- Optional theme shapes (unchanged) -->
        <div class="shape-mockup shape1 d-none d-xxl-block" style="bottom: 20%; left: -17%;">
            <img src="assets/img/shape/shape_1.png" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" style="bottom: 5%; left: -17%;">
            <img src="assets/img/shape/shape_2.png" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xxl-block" style="bottom: 12%; left: -10%;">
            <img src="assets/img/shape/shape_3.png" alt="shape">
        </div>
    </div>
</section>


@endsection