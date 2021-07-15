@extends('admin.layouts.master', ['title' => 'Comments'])

@section('content')

    <!-- Page Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Comments</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Manage Posts</li>
                        <li>Comments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    @if($comments->isEmpty())
        <div class="block full">
            <!-- Get Started Content -->
            No Comments
            <!-- END Get Started Content -->
        </div>
    @else

        <div class="row">
            <div class="col-lg-12">
                <!-- Timeline Block -->
                <div class="block">
                    <!-- Timeline Title -->
                    <div class="block-title">
                        <h2>Comments</h2>
                    </div>
                    <!-- END Timeline Title -->

                    <!-- Timeline Content -->
                    <div class="timeline block-content-full">
                        <ul class="timeline-list">
                            @foreach($comments as $comment)
                                <li>
                                    <div class="timeline-time">{{ jdate($comment->created_at)->ago() }}</div>
                                    <img class="img-thumbnail-transparent timeline-icon" src="{{ $comment->user->getImage }}" />
                                    <div class="timeline-content">
                                        <p class="push-bit small">
                                            <a target="_blank" @can('users-admin') href="{{ route('users.show', ['user' => $comment->user->id]) }}" @endcan>{{ $comment->user->fullname }}</a> در <a target="_blank" href="{{ route('article.show', ['article' => $comment->article->slug]) }}">{{ $comment->article->title }}</a>
                                        </p>
                                        <p>{{ $comment->body }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- END Timeline Content -->
                </div>
                <!-- END Timeline Block -->
            </div>
        </div>
    @endif

@endsection
