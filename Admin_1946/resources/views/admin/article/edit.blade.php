@extends('admin.layouts.master', ['title' => 'Edit Article'])

@section('content')
    <!-- Form Validation Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <!-- CKEditor Title -->
                <div class="block-title">

                    <h2>Edit Article</h2>
                </div>
                <!-- END CKEditor Title -->

                <!-- CKEditor Content -->
                <form action="{{ route('articles.update', ['article' => $article->slug]) }}" method="post" class="form-horizontal">
                    {!! csrf_field() !!}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{ $article->title }}">
                        </div>

                    </div>

                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea id="textarea-ckeditor" name="body" class="ckeditor" style="visibility: hidden; display: none;">{!! $article->body !!}</textarea>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-xs-12">
                            <div class="col-md-2">
                                <select name="status" class="form-control">
                                    <option value="publish" @if($article->status == 'publish') selected @endif>Publish</option>
                                    <option value="draft" @if($article->status == 'draft') selected @endif>Draft</option>
                                </select>
                            </div>
                            <input type="hidden" name="submit">
                            <button type="submit" class="btn btn-effect-ripple btn-primary" style="overflow: hidden; position: relative;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Form Validation Content -->
    @include('admin.layouts.errors')
    @include('admin.layouts.messages')

@endsection

@section('scripts')
    <script src="/js/plugins/ckeditor/ckeditor.js"></script>
@endsection