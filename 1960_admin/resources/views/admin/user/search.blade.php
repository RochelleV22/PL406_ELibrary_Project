@extends('admin.layouts.master', ['title' => 'Search'])

@section('content')

    <!-- Search Results Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="header-section">
                    <form action="{{ route('users.search') }}" id="form-validation">
                        <div class="form-group">
                            <input type="text"  name="search" class="form-control" placeholder="Name or surname" value="{{{ request('search') }}}" >
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-effect-ripple btn-effect-ripple btn-primary">Search</button>
                        </div>
                    </form>
                </div>
                @include('admin.layouts.messages')
            </div>
        </div>
    </div>
    <!-- END Search Results Header -->

    @if(count($usersChunk))

        <!-- Tables Row -->
        <div class="col-lg-12">

            <!-- Row Styles Block -->
            <div class="block">
                <!-- Users Results -->
                <div class="tab-pane" id="search-tab-users">
                    <div class="row">
                        @foreach($usersChunk as $users)
                            <div class="col-sm-6">
                                <table class="table table-striped table-borderless table-hover table-vcenter">
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr class="animation-fadeInQuickInv">
                                            <td class="text-center" style="width: 100px;"><img src="{{ $user->getImage }}" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar"></td>
                                            <td><strong>{{ $user->fullName }}</strong></td>
                                            <td class="text-center" style="width: 100px;">
                                                <a href="{{ route('users.show', ['user' => $user->id]) }}" data-toggle="tooltip" title="View" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END Users Results -->
            </div>
            <!-- END Row Styles Block -->
        </div>
        <!-- END Tables Row -->
    @endif

    @if(request('search') && !count($usersChunk))
        <!-- END Tables Row -->
        <div class="block full">
            <!-- Get Started Content -->
            No results found!
            <!-- END Get Started Content -->
        </div>
    @endif

@endsection