{{-- #---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏---------------------------” --}}
<x-app-layout>
    @section('title', 'Master')
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
        <!-- Page Title Section -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">dashboard</a></li>&nbsp;/
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('storemaster') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-2">
                                    <label for="typeid">Select Part</label>
                                    <select class="form-select" name="type" id="typeid" required>
                                        <option value="Master">--select a parent category--</option>
                                        @foreach ($data as $row)
                                        <option value="{{ $row->label}}">{{ $row->label}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <label for="labelid">Label Name</label>
                                    <input class="form-control" placeholder="enter form label name" name="label" type="text" id="labelid" required>
                                </div>
                                <div class="col-lg-4 d-flex align-items-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Label</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($masterdata as $index => $rows)
                                <tr>
                                    <td>{{ $index + 1}}</td>
                                    <td>{{ $rows->label}}</td>
                                    <td>
                                        @if($rows->type == 'Master')
                                        <span class="badge bg-secondary">Parent Category</span>
                                        @else
                                        <span class="badge bg-success">{{ $rows->type}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" data-car-list='@json($rows)'
                                                     class="btn btn-outline-secondary btn-border editbtnmodal"><i class="ri-edit-2-fill" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-soft-danger btn-border" onclick="confirmDelete('{{ $rows->id }}')">
                                                    <i class="ri-delete-bin-5-fill"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fadeInRight" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded-2">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel fs-5 fw-bold text-black">Edit Master</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="{{ route('updatemaster') }}" method="POST">
                        @csrf
                        <div class="modal-body" id="modalbodyedit">

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn  text-white rounded-2 waves-effect waves-light" style="background-color: #222222">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                    title: "Are you sure?"
                    , html: "You want to delete?"
                    , icon: "warning"
                    , showCancelButton: true
                    , confirmButtonColor: "#222222"
                    , cancelButtonColor: "#d33"
                    , confirmButtonText: "Yes, delete it!"
                    , cancelButtonText: "Cancel"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/admin/deletemaster/" + id;
                    }
                });
        }
    </script>
    <script>
        // DataTable Initialization
        $(document).ready(function() {
            $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                },

            });
        });


        $('#table-body').on('click', '.editbtnmodal', function() {
        const carlist = $(this).data('car-list');

        let optionsHtml = '<option value="Master">--select a parent category--</option>';
        @foreach ($data as $row)
            optionsHtml += `<option value="{{ $row->label }}" ${carlist.type === "{{ $row->label }}" ? 'selected' : ''}>{{ $row->label }}</option>`;
        @endforeach

        $('#modalbodyedit').html(`
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Label Name</label>
                    <input class="form-control" name="label" type="text" value="${carlist.label ?? ''}" required>
                    <input type="hidden" name="masterid" value="${carlist.id}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="mb-2">Category</label>
                    <select name="type" class="form-select" data-placeholder="Choose a Category" tabindex="1">
                        ${optionsHtml}
                    </select>
                </div>
            </div>
        `);
    });


    </script>
</x-app-layout>
