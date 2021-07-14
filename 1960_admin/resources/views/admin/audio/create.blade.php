@extends('admin.layouts.master', ['title' => __('messages.admin.sidebar.create_audio')])

@section('content')
    <!-- Blank Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>{{ __('messages.admin.audios.create.create_audio') }}</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>{{ __('messages.admin.sidebar.audios') }}</li>
                        <li>{{ __('messages.admin.sidebar.create_audio') }}</li>
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
                    <h2>{{ __('messages.admin.audios.create.create_audio') }}</h2>
                </div>
                <!-- END Form Validation Title -->

                <!-- Form Validation Form -->
                <form action="{{ route('audios.store') }}" id="form-validation"  method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-bookname">{{ __('messages.admin.audios.create.book_name') }} <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="val-bookname" name="bookName" class="form-control" value="{{ old('bookName') }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-author">{{ __('messages.admin.audios.create.author') }} <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="val-author" name="author" class="form-control" value="{{ old('author') }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-bookmaker">{{ __('messages.admin.audios.create.bookmaker') }} <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="val-bookmaker" name="bookmaker" class="form-control" value="{{ old('bookmaker') }}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-file">file <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="file" id="val-file" name="file" class="form-control" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-description">{{ __('messages.admin.audios.create.description') }} </label>
                        <div class="col-md-9">
                            <textarea id="val-description" name="description" rows="7" class="form-control" >{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">{{ __('messages.admin.audios.create.create_audio') }}</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">{{ __('messages.admin.audios.create.reset_form') }}</button>
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

@section('scripts')
    <script src="/js/pages/bookCreate.js"></script>
    <script>$(function(){ FormsValidation.init(); });</script>
@endsection
