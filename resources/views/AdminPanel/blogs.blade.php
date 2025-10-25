{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
<x-app-layout>
    @section('title', 'Blogs')
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
                    <div class="card-header align-items-center d-flex justify-content-between">
                        <h4 class="card-title mb-0">Blogs - ({{$blocnt}})</h4>
                        <a href="{{ route('addnewblog') }}">
                            <button type="button" class="btn btn-outline-success  waves-effect waves-light"><i class="ri-article-line"></i> Add New Blog</button>
                        </a>
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
                                        <th>Blog</th>
                                        <th>Categories</th>
                                        <th>Description</th>
                                        <th>Meta Keywords</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @foreach ($allblogs as $index => $blog)
                                    <tr>
                                        <th>{{ $index + 1 }}</th>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('adminAssets/images/Blogs/' . $blog->blogthumbnail) }}" alt="{{ $blog->blogname }}" class="rounded me-2" style="width: 60px; height: 60px; object-fit: cover;">
                                                <div>
                                                    <div class="fw-bold">{{ Str::limit($blog->blogname,20) }}</div>
                                                    <small class="text-muted">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-wrap">
                                            @foreach ($blog->blogcategories as $category)
                                            <span class="badge badge-label bg-secondary fs-6"><i class="mdi mdi-circle-medium"></i> {{ $category }}</span>
                                            @endforeach

                                        </td>
                                        <td>
                                            {{ strip_tags(Str::limit($blog->blogdescription,40)) }}
                                        </td>
                                        <td class="text-wrap mb-3">
                                            @foreach ($blog->metakeywords as $words)
                                            <span class="badge badge-label bg-secondary fs-6"><i class="mdi mdi-circle-medium"></i> {{ $words }}</span>
                                            @endforeach

                                        </td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="{{route('admin.editBlog',["id" => $blog->id])}}" class="btn btn-outline-secondary btn-border editbtnmodal">
                                                        <i class="ri-edit-2-fill" data-bs-toggle="tooltip" title="Edit"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button type="button" class="btn btn-soft-danger btn-border" onclick="confirmDelete('{{ $blog->id }}')">
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
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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

    </script>
    <script>
        function confirmDelete(id, title) {
            Swal.fire({
                    title: "Are you sure?"
                    , html: "You want to delete User <strong style='color: red;'>" + title + "</strong> ?"
                    , icon: "warning"
                    , showCancelButton: true
                    , confirmButtonColor: "#222222"
                    , cancelButtonColor: "#d33"
                    , confirmButtonText: "Yes, delete it!"
                    , cancelButtonText: "Cancel"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/deleteblog/" + id;
                    }
                });
        }

    </script>
</x-app-layout>
