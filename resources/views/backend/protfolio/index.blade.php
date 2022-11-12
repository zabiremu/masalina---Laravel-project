@extends('backend.dashboard_master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Portfolio</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Portfolio title</th>
                                        <th>Protfolio short title</th>
                                        <th>Portfoilo Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ Str::limit($data->short_title, 10, '...')  }}</td>
                                        <td>{!! Str::limit($data->short_details, 20, '...')  !!}</td>
                                        <td><img src="{{ url($data->image_url) }}" alt=""></td>
                                        <td>
                                            <a href="{{ route('portfolio.edit', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('portfolio.delete',$data->id) }}" method="post" class="d-inline-block">
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
