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
                        Change Your Password
                    </h3>
                    <div class="card-body">
                        <form action="{{route('user.password.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="info-title">Current Password</label>
                                <div class="controls">
                                    <input type="password" name="oldpassword" id="current_password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="info-title">New Password</label>
                                <div class="controls">
                                    <input type="password" name="password" id="password" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="info-title">Confirm Password</label>
                                <div class="controls">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                                        required>
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