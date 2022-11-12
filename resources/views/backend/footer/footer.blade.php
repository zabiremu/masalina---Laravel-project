@extends('backend.dashboard_master')

@section('content')
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Footer Page</h4>
                <form class="forms-sample" action="{{ route('footer.store') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="number" class="col-sm-3 col-form-label">Number</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="title" placeholder="Number" name="number"
                                value="{{ $data->number }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="shortTitle" class="col-sm-3 col-form-label">Short Details</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="shortTitle" placeholder="Short Details" name="shortTitle"
                                value="{{ $data->shortTitle }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address_title" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address_title" placeholder="Address"
                                name="address_title" value="{{ $data->address }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address_details" class="col-sm-3 col-form-label">Address Details</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address_details" placeholder="Address Details"
                                name="address_details" value="{{ $data->address_details }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" placeholder="Email"
                                name="email" value="{{ $data->email }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="socially" class="col-sm-3 col-form-label">Socially Connect</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="socially" placeholder="Socially Connect"
                                name="socially" value="{{ $data->socially }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fb" class="col-sm-3 col-form-label">Facebook Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fb" placeholder="Facebook Link"
                                name="fb" value="{{ $data->fb }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="twitter" class="col-sm-3 col-form-label">Twitter Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="twitter" placeholder="Twitter Link"
                                name="twitter" value="{{ $data->twitter  }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="behance" class="col-sm-3 col-form-label">Behance Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="behance" placeholder="Behance Link"
                                name="behance" value="{{ $data->behance }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="linkedin" class="col-sm-3 col-form-label">Linkedin Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="linkedin" placeholder="Linkedin Link"
                                name="linkedin" value="{{ $data->linkedin }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="instagram" class="col-sm-3 col-form-label">Instagram Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="instagram" placeholder="instagram Link"
                                name="instagram" value="{{ $data->instagram }}" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
