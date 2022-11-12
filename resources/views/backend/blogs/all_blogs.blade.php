@extends('backend.dashboard_master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Blogs</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Blogs Categroy</th>
                                        <th>Blogs title</th>
                                        <th>Blogs Description</th>
                                        <th>Blogs Image</th>
                                        <th>Blogs Tags</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($allData as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->blogCategory->blog_category }}</td>
                                        <td>{{ Str::limit($data->blog_title, 10, '...')  }}</td>
                                        <td>{!! Str::limit($data->blog_details, 20, '...')  !!}</td>
                                        <td><img src="{{ url($data->blog_image_url) }}" alt=""></td>
                                        <td>{{ $data->blog_tags }}</td>
                                        <td>
                                            <a href="{{ route('edit.blog',$data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('delete.blog',$data->id) }}" method="post" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                             No Post
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
