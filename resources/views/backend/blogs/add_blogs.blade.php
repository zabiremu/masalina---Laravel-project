@extends('backend.dashboard_master')

@section('content')
    @push('cssLink')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
            integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .bootstrap-tagsinput {
                background-color: transparent;
            }
        </style>
    @endpush
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Blog Page</h4>
                <form class="forms-sample" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <select name="categroy" name="cat" class="form-control">
                                <option disabled selected>Select Category</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->blog_category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="Tile" name="title"
                                required>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label for="shortDesc" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea id="summernote" name="description"></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Blog Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="blog_image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tags" class="col-sm-3 col-form-label">Tags</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tags" value="Laravel, React" name="tags"
                                data-role="tagsinput">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="profileImage" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-6">

                            <img src="{{ asset('backend/assets/images/Placeholder_view_vector.svg.png') }}"
                                class=" w-25 mt-3 mb-3 ml-4" alt="..."
                                style="border-radius: 50%; object-fit:cover; object-position:center;" id="aboutImage">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#aboutImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
    @push('jsLink')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"
            integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
    @endpush
@endsection
