@extends('admin.layouts.master', ['title' => 'Profile'])

@section('content')
<div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

            <div class="block">
                <!-- General Elements Title -->
                <div class="block-title">
                    <h2>Your Profile</h2>
                </div>

                <!-- END General Elements Title -->

                <!-- General Elements Content -->
                <form method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">Photo : </label>
                        <div class="col-md-7">
                            <div class="widget">
                                <img src="{{ $user->getImage }}" style="border-radius: 10px;width:100px;height:100px;" alt="avatar" class="img-circle">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">First name : </label>
                        <div class="col-md-7">
                            <p class="form-control-static">{{ $user->firstName }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">Last name : </label>
                        <div class="col-md-7">
                            <p class="form-control-static">{{ $user->lastName }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">Username : </label>
                        <div class="col-md-7">
                            <p class="form-control-static">{{ $user->username }}</p>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">Phone : </label>
                        <div class="col-md-7">
                            <p class="form-control-static">{{ $user->tel }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">Email : </label>
                        <div class="col-md-7">
                            <p class="form-control-static">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 col-md-offset-1">Address </label>
                        <div class="col-md-7">
                            <p class="form-control-static">{{ $user->address }}</p>
                        </div>
                    </div>
                </form>
                <!-- END General Elements Content -->
            </div>
        </div>
    </div>
@endsection
