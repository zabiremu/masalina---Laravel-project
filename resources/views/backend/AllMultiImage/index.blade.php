@extends('backend.dashboard_master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Images</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>About Images</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataSave as $key => $data)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td><img src="{{ url($data->image_url) }}" alt=""></td>
                                            <td>
                                                <label class="badge badge-info"> <a
                                                        href="{{ route('about.image.edit', $data->id) }}"
                                                        class="text-decoration-none text-white">Edit</a></label>
                                            </td>
                                            <td>
                                                <label class="">
                                                    <form action="{{ route('about.image.delete', $data->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button
                                                            class="button text-decoration-none text-white btn btn-danger btn-sm">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </label>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="4">No Image</td>
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
