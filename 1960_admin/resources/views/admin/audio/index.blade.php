@extends('admin.layouts.master', ['title' => __('messages.admin.sidebar.books_list')])

@section('content')
    <!-- Blank Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>{{ __('messages.admin.books.index.audios_list') }}</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>{{ __('messages.admin.sidebar.audios') }}</li>
                        <li>{{ __('messages.admin.sidebar.audios_list') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Blank Header -->

    @if($audios->isEmpty())
        <div class="block full">
            <!-- Get Started Content -->
            {{ __('messages.admin.audios.index.audios_list_is_empty') }}
            <!-- END Get Started Content -->
        </div>
    @else
        <div class="row">
            <div class="col-lg-12">
                @include('admin.layouts.messages')

                <!-- Row Styles Block -->
                <div class="block">
                    <!-- Row Styles Content -->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vcenter table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 50px;">ID</th>
                                    <th>{{ __('messages.admin.audios.index.book_name') }}</th>
                                    <th>{{ __('messages.admin.audios.index.author') }}</th>
                                    <th>{{ __('messages.admin.audios.index.bookmaker') }}</th>
                                    <th class="text-center">{{ __('messages.admin.audios.index.status') }}</th>
                                    <th style="width: 80px;" class="text-center"><i class="fa fa-flash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($audios as $audio)
                                    <tr>
                                        <td class="text-center">{{ $audio->id }}</td>
                                        <td><strong>{{ $audio->name }}</strong></td>
                                        <td>{{ $audio->author }}</td>
                                        <td>{{ $audio->bookmaker }}</td>

                                        @if(isExtant($audio->id))
                                            <td class="text-center"><span class="label label-success">{{ __('messages.admin.audios.index.status_available') }}</span></td>
                                        @else
                                            <td class="text-center"><span class="label label-danger">{{ __('messages.admin.audios.index.status_notavailable') }}</span></td>
                                        @endif
                                        <td class="text-center">
                                            <a href="{{ route('audios.show', ['audio' => $audio->id]) }}" title="{{ __('messages.admin.audios.index.view') }}" data-toggle="tooltip" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END Row Styles Content -->
                </div>
                <!-- END Row Styles Block -->

            </div>
        </div>
    @endif
@endsection
