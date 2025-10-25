{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
@section('title', 'Admin')
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    @if (Auth::user())
                                        <h4 class="fs-16 mb-1">Welcome {{ Auth::user()->name }}</h4>
                                    @else
                                        <h4 class="fs-16 mb-1">Welcome Guest User</h4> </span>
                                    @endif

                                    <p class="text-muted mb-0">
                                        Here's what's happening with your store today.
                                    </p>
                                </div>
                            </div>
                            <!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-2 col-md-6">
                            <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #0E5478;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-around">
                                        {{-- <div class="overflow-hidden">
                                           <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                        </div> --}}
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Products
                                            </p>
                                        </div>
                                        <div class="float-end">
                                            <h4 class="mt-1">
                                                <span class="counter-value" data-target="10">10</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #0E5478;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-around">
                                        {{-- <div class="overflow-hidden">
                                           <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                        </div> --}}
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Products
                                            </p>
                                        </div>
                                        <div class="float-end">
                                            <h4 class="mt-1">
                                                <span class="counter-value" data-target="10">10</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #0E5478;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-around">
                                        {{-- <div class="overflow-hidden">
                                           <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                        </div> --}}
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Products
                                            </p>
                                        </div>
                                        <div class="float-end">
                                            <h4 class="mt-1">
                                                <span class="counter-value" data-target="10">10</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #0E5478;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-around">
                                        {{-- <div class="overflow-hidden">
                                           <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                        </div> --}}
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Products
                                            </p>
                                        </div>
                                        <div class="float-end">
                                            <h4 class="mt-1">
                                                <span class="counter-value" data-target="10">10</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #0E5478;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-around">
                                        {{-- <div class="overflow-hidden">
                                           <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                        </div> --}}
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Products
                                            </p>
                                        </div>
                                        <div class="float-end">
                                            <h4 class="mt-1">
                                                <span class="counter-value" data-target="10">10</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #0E5478;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-around">
                                        {{-- <div class="overflow-hidden">
                                           <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                        </div> --}}
                                        <div class="overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                Products
                                            </p>
                                        </div>
                                        <div class="float-end">
                                            <h4 class="mt-1">
                                                <span class="counter-value" data-target="10">10</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
