@extends('admin.layouts.master', ['title' => 'Admin Dashboard'])

@section('content')
     <div class="row">
        <div class="col-sm-6 col-lg-3">
            <a class="widget" href="{{ route('users.index') }}">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-info">
                        <i class="gi gi-user text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-info">
                        <strong><span data-toggle="counter" data-to="{{ $users_count }}"></span></strong>
                    </h2>
                    <span class="text-muted">Users</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a class="widget" href="{{ route('books.index') }}">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-success">
                        <i class="gi gi-book text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-success">
                        <strong><span data-toggle="counter" data-to="{{ $books_count }}"></span></strong>
                    </h2>
                    <span class="text-muted">Books</span>
                </div>
            </a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/pages/readyDashboard.js"></script>
    <script>$(function(){ ReadyDashboard.init(); });</script>
@endsection
