@extends('backend.dashboard_master')

@section('content')
    @push('cssLink')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @endpush
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Service</h4>
                <form class="forms-sample" action="{{ route('service.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="Tile" name="title"
                                value="" required>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="id" value="">
                    <div class="form-group row">
                        <label for="shortTitle" class="col-sm-3 col-form-label">Short Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="shortTitle" placeholder="Short Title"
                                name="shortTitle" value="" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="shortDesc" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea id="summernote" name="description" required></textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Service Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="service_image">
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

        <script>
            $(document).ready(function() {
                $('#summernote').summernote();
            });
        </script>
    @endpush
@endsection
