@extends('admin.layouts.master', ['title' => 'New user '])

@section('content')
    <!-- Page Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Add new user </h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Manage Users</li>
                        <li>Add new user </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

            @include('admin.layouts.errors')
            @include('admin.layouts.messages')

            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2>Add new user </h2>
                </div>
                <!-- END Form Validation Title -->

                <!-- Form Validation Form -->
                <form action="{{ route('users.store') }}" id="form-validation" method="post" class="form-horizontal form-bordered">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-first-name">First Name<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-first-name" name="first-name" class="form-control" value="{{ old('first-name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-last-name">Last Name <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-last-name" name="last-name" class="form-control" value="{{ old('last-name') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-email">Email</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="val-email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-national-code">Username<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-national-code" name="national-code" class="form-control" value="{{ old('national-code') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-tel">Phone Number<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-tel" name="tel" class="form-control" value="{{ old('tel') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-address">Address<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <textarea id="val-address" name="address" rows="7" class="form-control">{{ old('address') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" name="submit" class="btn btn-effect-ripple btn-primary" style="overflow: hidden; position: relative;">Submit</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger" style="overflow: hidden; position: relative;">Refresh</button>
                        </div>
                    </div>
                </form>
                <!-- END Form Validation Form -->

            </div>			
            <!-- END Form Validation Block -->
        </div>
    </div>
    <!-- END Form Validation Content -->
@endsection

@section('scripts')
    <script src="/js/pages/userCreate.js"></script>
    <script>$(function(){ FormsValidation.init(); });</script>
@endsection