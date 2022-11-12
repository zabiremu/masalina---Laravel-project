@extends('backend.dashboard_master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Change Password</h4>
                <form class="forms-sample" action="{{ route('change.password') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Old Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" placeholder="Old Password"
                                name="password">
                            @error('password')
                                <span class="text-danger text-medium d-block mt-3">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" placeholder="New Password"
                                name="NewPassword">
                            @error('NewPassword')
                                <span class="text-danger text-medium d-block mt-3">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" placeholder="Confirm Password"
                                name="confirmPassword">
                            @error('confirmPassword')
                                <span class="text-danger text-medium d-block mt-3">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript"></script>
@endsection
