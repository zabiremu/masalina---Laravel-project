@extends('backend.dashboard_master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Home Slide Page</h4>
                <form class="forms-sample" action="{{ route('update.slide', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                                value="{{ $data->title }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="shortTitle" class="col-sm-3 col-form-label">Short Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="shortTitle" placeholder="Short Title" name="shortTitle"
                                value="{{ $data->short_title }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="videoUrl" class="col-sm-3 col-form-label">Video Url</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="videoUrl" placeholder="Video Url"
                                name="videoUrl" value="{{  $data->video }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Home Silde Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="profile_image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="profileImage" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-6">

                            <img src="{{ !empty($data->image_url) ? url($data->image_url) : asset('backend/assets/images/Placeholder_view_vector.svg.png') }}"
                                class=" w-25 mt-3 mb-3 ml-4" alt="..."
                                style="border-radius: 50%; object-fit:cover; object-position:center;" id="profileImage">

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
                    $('#profileImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
@endsection
