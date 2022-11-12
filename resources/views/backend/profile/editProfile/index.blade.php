@extends('backend.dashboard_master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Profile</h4>
                <form class="forms-sample" action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                value="{{ $editAdmin->name }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                value="{{ $editAdmin->email }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">User Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" placeholder="User Name"
                                name="username" value="{{ $editAdmin->username }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Profile Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="profile_image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="profileImage" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-6">

                            <img src="{{ !empty(auth()->user()->profile_image) ? auth()->user()->image_url : asset('backend/assets/images/Placeholder_view_vector.svg.png')}}"
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
