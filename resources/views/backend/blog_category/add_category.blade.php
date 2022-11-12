@extends('backend.dashboard_master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Blog Category</h4>
                <form class="forms-sample" action="{{ route('insert.blog.category') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="addCategory" class="col-sm-3 col-form-label">Add Category</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="videoUrl" placeholder="Add Category"
                                name="addCategory" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
