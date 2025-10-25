{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
<x-app-layout>
    @section('title', 'All Users')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: left !important;
        }

    </style>
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
                            <h4 class="card-title mb-0">Filter</h4>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#registerusermodal" class="btn btn-success waves-effect waves-light">
                                <i class="bx bx-user-plus align-middle me-2"></i>Add New User
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <form>
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto d-flex justify-content-sm-start gap-2 align-items-end flex-wrap">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">From</label>
                                            <input type="date" name="datefrom" class="form-control" id="datefrom">
                                        </div>
                                        <div>
                                            <label for="exampleInputdate" class="form-label">To</label>
                                            <input type="date" name="dateto" class="form-control" id="dateto">
                                        </div>
                                        <div>
                                            <button type="button" style="background-color: #0E5478" class="btn text-white add-btn datebtn"><i class="ri-search-eye-line align-bottom me-1"></i>Search</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto d-flex justify-content-sm-start gap-2 align-items-end flex-wrap">
                                        <label class="">Filter By Mobile Number</label>
                                        <select id="SelExample" class="form-select" onchange="filterUsersByMobile(this.value)">
                                            <option value="" selected>--select number--</option>
                                            @foreach ($vendors as $row)
                                            <option value="{{ $row->mobilenumber }}">+91-{{ $row->mobilenumber }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered border-light hover dt-responsive nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Registered On.</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Profile Activation Status</th>
                                        <th>Activation Request</th>
                                        <th>Verification Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @foreach ($vendors as $index => $data)
                                    <tr>
                                        <th><a href="{{ route('admin.userprofile',['id'=> $data->id])}}">#User-{{ $data->id }}</a></th>
                                        <th>{{ $data->created_at->format('d M Y | h:i A') }}</th>
                                        <td>{{ $data->username }}</td>
                                        <td>+91-{{ $data->mobilenumber }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>
                                            <div class="form-check form-switch form-switch-custom form-switch-success">
                                                <input data-id="{{ $data->id }}" class="form-check-input activatestatus" type="checkbox" role="switch" id="square-switch{{ $data->id }}" {{ $data->activationstatus == 'activate' ? 'checked' : '' }} switch="bool">
                                            </div>
                                        </td>
                                        <td>
                                            @if ($data->activationRequest == 'Pending')
                                            <span class="badge badge-label bg-warning fs-6"><i class="mdi mdi-circle-medium"></i> Pending</span>
                                            @else
                                            <span class="badge badge-label bg-success fs-6"><i class="mdi mdi-circle-medium"></i> Completed</span>
                                            @endif
                                        </td>
                                       <td>
                                        @if($data->registrationstatus == 'verify')
                                            <span class="badge bg-success px-3 py-2 rounded-pill">
                                                Verified
                                            </span>
                                        @else
                                            <select class="form-select registrationstatus" 
                                                    data-id="{{ $data->id }}" 
                                                    name="part" 
                                                    id="registerdrop" 
                                                    required>
                                                <option value="verify" {{ $data->registrationstatus == 'verify' ? 'selected' : '' }}>Verify</option>
                                                <option value="pending" {{ $data->registrationstatus == 'pending' ? 'selected' : '' }}>Pending</option>
                                            </select>
                                        @endif
                                        </td>

                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('admin.userprofile',['id'=> $data->id])}}" class="btn btn-outline-primary btn-sm rounded-3">View Roles</a>
                                                <a onclick="confirmDelete('{{ $data->id }}','{{ addslashes($data->username) }}')"  href="#" class="btn btn-outline-danger btn-sm rounded-3">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal flip" id="registerusermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('newAdduserAdmin')}}" method="POST">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-xxl-4 col-md-6">
                                <div>
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="username" class="form-control" placeholder="Enter Password" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div>
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" name="mobilenumber" accept="number" maxlength="10" class="form-control" placeholder="Enter Mobile Number" required>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-md-6">
                                <div>
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 d-flex align-items-end justify-content-end">
                                <div class="">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Activation Status-->
        <script>
            $(document).ready(function() {
            // Disable select if status is verify
                $('.registrationstatus').each(function() {
                    if ($(this).val() === 'verify') {
                        $(this).prop('disabled', true);
                    }
                });
                $(document).on('change', '.registrationstatus', function() {
                    var userid = $(this).data('id');
                    var status = $(this).val();

                    $.ajax({
                        url: "{{ route('updateactivationstatus') }}",
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: userid,
                            status: status
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    title: "Success!",
                                    text: "Status Updated..!",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                }).then(function(result) {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            } else {
                                Swal.fire("Error", "Failed to update Activation status.", "error");
                            }
                        },
                        error: function() {
                            Swal.fire("Error", "An error occurred.", "error");
                        }
                    });
                });
            });
    </script>


    <!-- Date Filter Code -----------------------DEKHA Bhul gaya naa tu aagaya naa main kaam -- -->
    <script>
        $(document).ready(function() {
            var dataTableCustomer = $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });
            $(document).ready(function() {
                $("#SelExample").select2();
            });

            $('.datebtn').on('click', function() {
                var datefrom = $('#datefrom').val();
                var dateto = $('#dateto').val();

                $.ajax({
                    url: '/admin/filterusersbydate', // Update this to your vendors filter route
                    method: 'POST'
                    , data: {
                        datefrom: datefrom
                        , dateto: dateto
                        , _token: '{{ csrf_token() }}'
                    }
                    , success: function(response) {
                        // Destroy and clear DataTable
                        dataTableCustomer.clear().destroy();
                        $('#table-body').empty();

                        if (Array.isArray(response) && response.length > 0) {
                            response.forEach(function(row, idx) {
                                var dateObj = new Date(row.created_at);
                                var formattedDate = dateObj.toLocaleDateString('en-GB', {
                                    day: '2-digit'
                                    , month: 'short'
                                    , year: 'numeric'
                                });
                                var formattedTime = dateObj.toLocaleTimeString('en-US', {
                                    hour: '2-digit'
                                    , minute: '2-digit'
                                    , hour12: true
                                });

                                var verifystatus = row.verifystatus == '1' ?
                                    '<span class="badge bg-success fs-6">Verified</span>' :
                                    '<span class="badge bg-danger fs-6">Not Verified</span>';

                                var activationChecked = row.activationstatus == 'activate' ? 'checked' : '';

                                var html = `
                                <tr>
                                    <th><a href="/admin/userprofile/${row.id}">#User-${row.id}</a></th>
                                    <th>${formattedDate} | ${formattedTime}</th>
                                    <td>${row.username ?? ''}</td>
                                    <td>+91 - ${row.mobilenumber ?? ''}</td>
                                    <td>${row.email ?? ''}</td>
                                    <td>${verifystatus}</td>
                                    <td>
                                        <div class="form-check form-switch form-switch-custom form-switch-success">
                                            <input data-id="${row.id}" class="form-check-input"
                                                type="checkbox" role="switch"
                                                id="square-switch${row.id}"
                                                ${activationChecked}
                                                switch="bool">
                                        </div>
                                        <input type="hidden" data-id="userid-${row.id}"
                                            name="userid" value="${row.id}">
                                    </td>
                                    <td>
                                        ${row.activationRequest === 'Pending'
                                            ? '<span class="badge badge-label bg-warning fs-6"><i class="mdi mdi-circle-medium"></i> Pending</span>'
                                            : '<span class="badge badge-label bg-success fs-6"><i class="mdi mdi-circle-medium"></i> Completed</span>'
                                        }
                                    </td>
                                </tr>
                            `;
                                $('#table-body').append(html);
                            });
                        } else {
                            $('#table-body').html('<tr><td colspan="7">No vendors found for the selected date range.</td></tr>');
                        }

                        // Reinitialize DataTable
                        dataTableCustomer = $('#example').DataTable({
                            layout: {
                                topStart: {
                                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                                }
                            }
                        });
                    }
                    , error: function(error) {
                        $('#table-body').html('<tr><td colspan="7">Error fetching data.</td></tr>');
                    }
                });
            });

            // Delegate activation status change for dynamically loaded rows
            $('#table-body').on('change', 'input[type="checkbox"]', function() {
                var userid = $(this).data('id');
                var status = $(this).is(':checked') ? 'activate' : 'deactivate';

                $.ajax({
                    url: "{{ route('updateactivationstatus') }}"
                    , type: 'POST'
                    , data: {
                        _token: '{{ csrf_token() }}'
                        , id: userid
                        , status: status
                    }
                    , success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Success!"
                                , text: "Status Updated..!"
                                , icon: "success"
                                , confirmButtonText: "OK"
                            })
                        } else {
                            Swal.fire("Error", "Failed to update Activation status.", "error");
                        }
                    }
                    , error: function() {
                        Swal.fire("Error", "An error occurred.", "error");
                    }
                });
            });
        });

    </script>

    <script>
        function filterUsersByMobile(mobileNumber) {
            var datefrom = $('#datefrom').val();
            var dateto = $('#dateto').val();

            $.ajax({
                url: '/admin/filteruserbymobile'
                , method: 'POST'
                , data: {
                    datefrom: datefrom
                    , dateto: dateto
                    , mobilenumber: mobileNumber
                    , _token: '{{ csrf_token() }}'
                }
                , success: function(response) {
                    console.log(response);
                    // Destroy and clear DataTable
                    if (typeof dataTableCustomer !== 'undefined') {
                        dataTableCustomer.clear().destroy();
                    }
                    $('#table-body').empty();

                    if (Array.isArray(response) && response.length > 0) {
                        response.forEach(function(row, idx) {
                            var dateObj = new Date(row.created_at);
                            var formattedDate = dateObj.toLocaleDateString('en-GB', {
                                day: '2-digit'
                                , month: 'short'
                                , year: 'numeric'
                            });
                            var formattedTime = dateObj.toLocaleTimeString('en-US', {
                                hour: '2-digit'
                                , minute: '2-digit'
                                , hour12: true
                            });

                            var verifystatus = row.verifystatus == '1' ?
                                '<span class="badge bg-success fs-6">Verified</span>' :
                                '<span class="badge bg-danger fs-6">Not Verified</span>';

                            var activationChecked = row.activationstatus == 'activate' ? 'checked' : '';

                            var html = `
                                <tr>
                                    <th><a href="/admin/userprofile/${row.id}">#User-${row.id}</a></th>
                                    <th>${formattedDate} | ${formattedTime}</th>
                                    <td>${row.username ?? ''}</td>
                                    <td>+91 - ${row.mobilenumber ?? ''}</td>
                                    <td>${row.email ?? ''}</td>
                                    <td>${verifystatus}</td>
                                    <td>
                                        <div class="form-check form-switch form-switch-custom form-switch-success">
                                            <input data-id="${row.id}" class="form-check-input"
                                                type="checkbox" role="switch"
                                                id="square-switch${row.id}"
                                                ${activationChecked}
                                                switch="bool">
                                        </div>
                                        <input type="hidden" data-id="userid-${row.id}"
                                            name="userid" value="${row.id}">
                                    </td>
                                     <td>
                                        ${row.activationRequest === 'Pending'
                                            ? '<span class="badge badge-label bg-warning fs-6"><i class="mdi mdi-circle-medium"></i> Pending</span>'
                                            : '<span class="badge badge-label bg-success fs-6"><i class="mdi mdi-circle-medium"></i> Completed</span>'
                                        }
                                    </td>

                                </tr>
                            `;
                            $('#table-body').append(html);
                        });
                    } else {
                        $('#table-body').html('<tr><td colspan="7">No vendors found for the selected filter.</td></tr>');
                    }
                }
                , error: function() {
                    $('#table-body').html('<tr><td colspan="7">Error fetching data.</td></tr>');
                }
            });
        }

        // Bind onchange event to mobile number select
        $('#SelExample').on('change', function() {
            var mobileNumber = $(this).val();
            filterUsersByMobile(mobileNumber);
        });

    </script>

    <script>
        function confirmDelete(id, title) {
            Swal.fire({
                    title: "Are you sure?"
                    , html: "You want to delete Course <strong style='color: red;'>" + title + "</strong> ?"
                    , icon: "warning"
                    , showCancelButton: true
                    , confirmButtonColor: "#222222"
                    , cancelButtonColor: "#d33"
                    , confirmButtonText: "Yes, delete it!"
                    , cancelButtonText: "Cancel"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ url('admin/deleteUser') }}/" + id;
                    }
                });
        }

    </script>
</x-app-layout>
