@extends('admin.layouts.master', ['title' => __('messages.admin.sidebar.create_book')])

@section('content')
    <!-- Blank Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>{{ __('messages.admin.books.create.create_book') }}</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>{{ __('messages.admin.sidebar.books') }}</li>
                        <li>{{ __('messages.admin.sidebar.create_book') }}</li>
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
                    <h2>{{ __('messages.admin.books.create.create_book') }}</h2>
                </div>
                <!-- END Form Validation Title -->

                <!-- Form Validation Form -->
                <form action="{{ route('books.store') }}" id="form-validation"  method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-bookname">{{ __('messages.admin.books.create.book_name') }} <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="val-bookname" name="bookName" class="form-control" value="{{ old('bookName') }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-author">{{ __('messages.admin.books.create.author') }} <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="val-author" name="author" class="form-control" value="{{ old('author') }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-bookmaker">{{ __('messages.admin.books.create.bookmaker') }} <span class="text-danger">*</span></label>
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
                        <label class="col-md-3 control-label" for="range">{{ __('messages.admin.books.create.count') }} <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="number" id="val-range" name="count" class="form-control" value="{{ old('count') }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-category">{{ __('messages.admin.books.create.category') }} <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <select id="val-category" name="category" class="form-control">
                                <option value="">{{ __('messages.admin.books.create.please_select') }}</option>
                                @foreach(\App\BookCategory::all() as $category)
                                <option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif>{{ $category->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-ed_year">{{ __('messages.admin.books.create.edition_year') }} <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" id="val-ed_year" name="ed_year" class="form-control" value="{{ old('ed_year') }}" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-description">{{ __('messages.admin.books.create.description') }} </label>
                        <div class="col-md-9">
                            <textarea id="val-description" name="description" rows="7" class="form-control" >{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">{{ __('messages.admin.books.create.create_book') }}</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">{{ __('messages.admin.books.create.reset_form') }}</button>
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
