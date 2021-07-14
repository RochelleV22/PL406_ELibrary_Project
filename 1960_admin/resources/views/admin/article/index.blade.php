@extends('admin.layouts.master', ['title' => 'Articles'])

@section('content')
    <!-- Page Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Articles</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Manage Articles</li>
                        <li>Articles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    @if($articles->isEmpty())

        <div class="block full">
            <!-- Get Started Content -->
            No Articles
            <!-- END Get Started Content -->
        </div>

    @else

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <!-- Tickets Block -->
                <div class="block">
                    <!-- Tickets List -->
                    <div class="table-responsive">

                        <table class="table table-hover table-vcenter table-borderless">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Writer</th>
                                    <th class="text-center">Release date</th>
                                    <th class="text-center"><i class="fa fa-comments"></i></th>

                                    <th style="width: 80px;" class="text-center"><i class="fa fa-flash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td><a href="{{ route('article.show', ['article' => $article->slug]) }}" target="_blank"><strong>{{ $article->title }}</strong></a></td>

                                        <td>{{ $article->user->firstName.' '.$article->user->lastName }}</td>

                                        <td class="text-center">{{ $article->created_at }}</td>

                                        <td class="text-center"><span class="badge">{{ $article->comments->count() }}</span></td>
                                        @if($article->status == 'publish')
                                            <td class="text-center"><span class="label label-success">Publish</span></td>
                                        @else
                                            <td class="text-center"><span class="label label-danger">Draft</span></td>
                                        @endif
                                        <td class="text-center">
                                            <a href="{{ route('articles.edit', ['article' => $article->slug]) }}" title="Edit" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-pencil"></i></a>
                                            <a onclick="document.getElementById('deleteForm').action='{{ route('articles.destroy', ['article' => $article->slug]) }}'" href="#modal-fade" data-toggle="modal" title="Delete" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <form action="#" id="deleteForm" method="post">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                    </form>

                    <div id="modal-fade" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3 class="modal-title"><strong>Title</strong></h3>
                                </div>
                                <div class="modal-body">
                                    Description
                                </div>
                                <div class="modal-footer">
                                    <button onclick="document.getElementById('deleteForm').submit();" type="button" class="btn btn-effect-ripple btn-danger" style="overflow: hidden; position: relative;">Yes</button>
                                    <button type="button" class="btn btn-effect-ripple btn-success" data-dismiss="modal" style="overflow: hidden; position: relative;">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        {!! $articles->render() !!}
                    </div>

                </div>
                <!-- END Tickets Block -->
                @include('admin.layouts.messages')
            </div>
        </div>
    @endif
@endsection
