@extends('backend.dashboard_master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="col-md-12 grid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Blog Category</h4>
                <form class="forms-sample" action="{{ route('update.blog.category', $id->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group row">
                        <label for="addCategory" class="col-sm-3 col-form-label">Edit Category</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="videoUrl" placeholder="Edit Category"
                                name="addCategory" value="{{ $id->blog_category }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
