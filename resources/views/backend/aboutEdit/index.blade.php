@extends('backend.dashboard_master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Multi Image Setup</h4>
                <form class="forms-sample" action="{{ route('about.image.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" class="form-control" name="id" value="{{ $dataUpdate->id }}">

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">About Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="about_image" required>
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
@endsection
