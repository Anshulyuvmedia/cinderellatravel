{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
<x-app-layout>
    @section('title', $data->blogname)
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
        <!-- Form Section -->
        <div class="row">
            <div class="col-lg-12">

                <form action="#" method="POST" enctype="multipart/form-data" id="blogform">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Add Blog Information</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label">Name</label>
                                            <input type="text" placeholder="Blog Name" value="{{$data->blogname}}" name="blogname" class="form-control" required>
                                            <input type="hidden" name="blogid" value="{{$data->id}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Category</label>
                                            <select name="categories[]" class="select2 form-control" multiple="multiple">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->label }}" {{ in_array($category->label, $data->blogcategories ?? []) ? 'selected' : '' }}>
                                                    {{ $category->label }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col mt-3">
                                        <label class="form-label">Tags</label>
                                        <input type="text" name="tags" class="form-control" id="tagsinput" placeholder="Type & press Enter">
                                    </div>
                                    <div class="col mt-3">
                                        <label class="form-label">Blog Description</label>
                                        <div class="snow-editor" style="height: 300px;"></div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="col">
                                        <label class="form-label">Blog Thumbnail</label>
                                        <div class="dropzone">
                                            <div class="fallback">
                                                <input name="blogthumbnail" type="file">
                                            </div>
                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                </div>

                                                <h4>Drop Image here or click to upload.</h4>
                                                <small class="text-danger fs-6">Set the blog thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted.</small>
                                            </div>
                                        </div>
                                        @if(!empty($data->blogthumbnail))
                                        <div class="mb-3">
                                            <div style="border: 1px solid #ddd; padding: 8px; border-radius: 6px; display: inline-block;">
                                                <img src="{{ asset('adminAssets/images/Blogs/' . $data->blogthumbnail) }}" alt="Blog Thumbnail" style="max-width: 150px; max-height: 150px; border-radius: 6px;">
                                            </div>
                                        </div>
                                        @endif
                                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                                            <li class="mt-2" id="dropzone-preview-list">
                                                <!-- This is used as the file preview template -->
                                                <div class="border rounded">
                                                    <div class="d-flex p-2">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm bg-light rounded">
                                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="{{asset('adminAssets/images/Blogs/'.$data->blogthumbnail)}}" alt="Dropzone-Image" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="pt-1">
                                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col mt-3">
                                        <label class="form-label">Meta Keywords</label>
                                        <input type="text" name="metakeywords" class="form-control" id="metakeywordsinput" placeholder="Type & press Enter">
                                    </div>
                                    <div class="col mt-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control" placeholder="Enter Meta Description" name="metadescription" id="exampleFormControlTextarea5" rows="3">{{$data->metadescription}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-outline-success  waves-effect waves-light">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            let tagsTagify, metaKeywordsTagify;

            tagsTagify = new Tagify(document.getElementById('tagsinput'), {
                originalInputValueFormat: valuesArr => valuesArr.map(item => item.value) // now an array
            });

            metaKeywordsTagify = new Tagify(document.getElementById('metakeywordsinput'), {
                originalInputValueFormat: valuesArr => valuesArr.map(item => item.value) // now an array
            });

            $('.select2').select2({
                placeholder: "Select Categories"
                , allowClear: true
                , width: '100%'
            });

            $('#blogform').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                // Blog Description (Quill)
                let blogDescription = $('.snow-editor .ql-editor').html();
                formData.append('blogdescription', blogDescription);

                //Blog Thumbnail
                let dz = Dropzone.forElement(".dropzone");
                if (dz.files.length > 0) {
                    formData.append('blogthumbnail', dz.files[0]);
                }

                // Tagify values as array
                formData.set('tags', JSON.stringify(tagsTagify.value.map(item => item.value)));
                formData.set('metakeywords', JSON.stringify(metaKeywordsTagify.value.map(item => item.value)));

                // Select2 multiple categories
                let categories = $('select[name="categories[]"]').val() || [];
                formData.set('categories', JSON.stringify(categories));

                $.ajax({
                    url: "{{ route('admin.updateblog') }}"
                    , method: 'POST'
                    , data: formData
                    , processData: false
                    , contentType: false
                    , success: function(response) {
                        if (response.success == true) {
                            console.log(response);
                            Swal.fire({
                                icon: 'success'
                                , title: 'Success!'
                                , text: 'Blog Updated successfully.'
                                , showConfirmButton: true
                                , timer: 2000
                            }).then((result) => {
                                if (result.isConfirmed) {
                                   window.location.href = "/admin/blogs/";
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error'
                                , title: 'Error'
                                , text: response.message || 'Something went wrong!'
                            , });
                        }
                    }
                    , error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });

    </script>
    <script src="{{asset('adminAssets/libs/dropzone/dropzone-min.js')}}"></script>
    <script src="{{asset('adminAssets/libs/quill/quill.min.js')}}"></script>
    <script>
        // Initialize the Quill editor
        var quill = new Quill('.snow-editor', {
            theme: 'snow'
        });

        // Inject content from Laravel
        const content = @json($data['blogdescription']);
        console.log(content);
        // Check if content exists and populate the editor
        if (content) {
            quill.clipboard.dangerouslyPasteHTML(content);
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script>
        // Laravel JSON encoded array
        let Storedmetawords = @json($data -> metakeywords);
        let tags = @json($data -> tags);

        // Convert to Tagify format
        let keywordsdata = Storedmetawords.map(keyword => ({
            value: keyword
        }));

        let tagData = tags.map(tag => ({
            value: tag
        }));

        // Initialize Tagify
        var input = document.getElementById('metakeywordsinput');
        var tagify = new Tagify(input, {
            originalInputValueFormat: valuesArr => JSON.stringify(valuesArr.map(item => item.value))
        });

        // Initialize Tagify
        var inputtags = document.getElementById('tagsinput');
        var tagifytags= new Tagify(inputtags, {
            originalInputValueFormat: valuesArr => JSON.stringify(valuesArr.map(item => item.value))
        });

        // Preload tags
        tagify.addTags(keywordsdata);
        tagifytags.addTags(tagData);

    </script>
</x-app-layout>
