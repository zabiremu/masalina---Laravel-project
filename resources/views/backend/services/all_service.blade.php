@extends('backend.dashboard_master')

@section('content')
    {{-- {{ dd($allData) }} --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Service</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service title</th>
                                        <th>Service short title</th>
                                        <th>Service Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($service as $key => $item)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ Str::limit($item->title, 16, '...') }}</td>
                                            <td>{{ Str::limit($item->shot_title, 20, '...') }}</td>
                                            <td>{!! Str::limit($item->details, 30, '...') !!}</td>
                                            <td>
                                                @if (isset($item->image))
                                                    <img src="{{ asset($item->image_url) }}" alt="">
                                                @else
                                                    <img src="{{ asset('uploads/istockphoto-1147544807-612x612.jpg') }}"
                                                        alt="">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('service.edit', $item->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm button" type="submit">Delete</button>
                                                <form action="{{ route('service.delete', $item->id) }}" method="post"
                                                    class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('customJs')
        <script>
            let button = $('.button')
            button.on('click', function() {
                let form = $(this).next('form');
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: '<h2 style="color:#545454">Are you sure?</h2>',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        form.submit()
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })
            })
        </script>
    @endpush
@endsection
