@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <br>
                <img class="card-img-top" style="border-radius: 50%;" height="100%" width="100%"
                    src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : asset('backend/images/user3-128x128.jpg')}}">
                <br>
                <br>
                <ul class="list-group list-group-flush">
                    <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{route('change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">Hi... </span>
                        <strong>{{Auth::user()->name}}</strong>
                        Update Your Profile
                    </h3>
                    <div class="card-body">
                        <form action="{{route('user.profile.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="info-title">Name</label>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" value="{{$user->name}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="info-title">Email</label>
                                <div class="controls">
                                    <input type="email" name="email" class="form-control" value="{{$user->email}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="info-title">Phone</label>
                                <div class="controls">
                                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="info-title">User Image</label>
                                <div class="controls">
                                    <input type="file" name="profile_photo_path" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="profile_photo_path" class="btn btn-danger" class="form-control">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection