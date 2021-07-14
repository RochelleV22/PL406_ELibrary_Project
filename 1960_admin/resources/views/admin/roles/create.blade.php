@extends('admin.layouts.master', ['title' => 'Add a new Role'])

@section('content')
    <!-- Blank Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Add a new Role</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Manage Roles</li>
                        <li>Add a new Role</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Blank Header -->
    <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

        @include('admin.layouts.errors')
        @include('admin.layouts.messages')

        <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2>Add a new role</h2>
                </div>
                <!-- END Form Validation Title -->

                <!-- Form Validation Form -->
                <form action="{{ route('roles.store') }}" id="form-validation"  method="post" class="form-horizontal form-bordered">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="permission_id">Access<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <select id="permission_id" name="permission_id[]" class="select-chosen" data-placeholder="Select" style="width: 250px;" multiple>
                                @foreach(\App\Permission::latest()->get() as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->label }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                        </div>
                    </div>
                    <input type="hidden" name="submit" />
                </form>
                <!-- END Form Validation Form -->

            </div>
            <!-- END Form Validation Block -->

        </div>
    </div>
    <!-- END Form Validation Content -->
@endsection