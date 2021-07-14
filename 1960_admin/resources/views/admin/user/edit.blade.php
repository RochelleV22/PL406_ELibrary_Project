@extends('admin.layouts.master', ['title' => 'User Description'])

@section('content')

    <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

            @include('admin.layouts.errors')
            @include('admin.layouts.messages')

            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2>Editing user information</h2>
                </div>
                <!-- END Form Validation Title -->

                <!-- Form Validation Form -->
                <form action="{{ route('users.update', ['user' => $user->id]) }}" id="form-validation" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    {!! csrf_field() !!}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <label class="col-md-3 control-label">Current image:</label>
                        <div class="col-md-8">
                            <div class="widget">
                                <img src="{{ $user->getImage }}" style="border-radius: 10px;width:100px;height:100px;" alt="avatar" class="img-circle">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="file">New image</label>
                        <div class="col-md-9">
                            <input type="file" id="file" name="file">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> </label>
                        <div class="col-md-9">
                            <p class="well well-sm"><strong>Tip : </strong><br>User image must be in jpeg format with a size of less than 500 KB.<br><small>(The best size 128*128 )</small></p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-first-name">First Name<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-first-name" name="first-name" class="form-control" value="{{ $user->firstName }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-last-name">Last name<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-last-name" name="last-name" class="form-control" value="{{ $user->lastName }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-email">Email</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="val-email" name="email" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-national-code">Username<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-national-code" name="national-code" class="form-control" value="{{ $user->username }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-tel">Phone number <span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="val-tel" name="tel" class="form-control" value="{{ $user->tel }}">
                        </div>
                    </div>

                    @if($user->level != 'creator')
                        @can('roles-admin')
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="role_id">Authorities</label>
                                <div class="col-md-6">
                                    <select id="role_id" name="role_id[]" class="select-chosen" data-placeholder="Select" style="width: 250px;" multiple>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endcan
                    @endif

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-address">Address<span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <textarea id="val-address" name="address" rows="7" class="form-control">{{ $user->address }}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" name="submit" class="btn btn-effect-ripple btn-primary" style="overflow: hidden; position: relative;">Submit</button>
                            <a href="{{ route('users.show', ['user' => $user->id]) }}"><button type="button" class="btn btn-effect-ripple btn-warning" style="overflow: hidden; position: relative;"><i class="gi gi-redo"></i>Return to profile page</button></a>
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
    <script src="/js/pages/userEdit.js"></script>
    <script>$(function(){ FormsValidation.init(); });</script>
@endsection