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
                                        <th>Subject</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Budget</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $key => $data)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $data->subject }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{!! $data->email  !!}</td>
                                        <td>{!! $data->budget  !!}</td>
                                        <td>{!! $data->message  !!}</td>
                                        <td>{{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <form action="{{ route('delete.contact',$data->id) }}" method="post" class="d-inline-block">
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
