{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
<x-app-layout>
    @section('title', 'Admin Profile')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">My Details</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <form>
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto d-flex justify-content-sm-start gap-2 align-items-end flex-wrap">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control border-0" id="datefrom" value="{{ auth()->user()->name }}">
                                        </div>
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control border-0" id="dateto" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Change Password</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <form action="{{ route('admin.changepassword') }}" method="POST">
                                @csrf
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto d-flex justify-content-sm-start gap-2 align-items-end flex-wrap">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">New Password</label>
                                            <input type="password" placeholder="Enter your new password" name="newpassword" class="form-control" id="datefrom">
                                        </div>
                                        <div>
                                            <label for="exampleInputdate" class="form-label">Confirm Password</label>
                                            <input type="password" placeholder="Confirm password" name="newpassword_confirmation" class="form-control" id="dateto">
                                        </div>
                                        <div>
                                            <button type="submit" style="background-color: #0E5478" class="btn text-white add-btn datebtn">Change password</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
