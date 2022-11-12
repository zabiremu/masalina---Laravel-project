@extends('backend.dashboard_master')

@section('content')
<div class="col-lg-4 col-md-12 col-12">
    <div class="card mt-lg-5 mt-md-5 mt-5">

          <img src="{{ !empty(auth()->user()->profile_image) ? auth()->user()->image_url : asset('backend/assets/images/Placeholder_view_vector.svg.png')}}" class=" w-50 mt-5 mb-3 ml-4" alt="..." style="border-radius: 50%; object-fit:cover; object-position:center;">

        <div class="card-body">
          <h5 class="card-title">Name:  {{ $admin->name }}</h5>
          <hr>
          <h5 class="card-title">Email: {{ $admin->email }}</h5>
          <hr>
          <h5 class="card-title">User Name: {{ $admin->username }}</h5>
          <hr>
          <a href="{{ route('edit.profile') }}" class="btn btn-primary btn-fw">Edit</a>
        </div>
      </div>
</div>

@endsection