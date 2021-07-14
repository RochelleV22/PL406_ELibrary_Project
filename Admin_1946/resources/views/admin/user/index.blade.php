@extends('admin.layouts.master', ['title' => 'Users'])

@section('content')

    <!-- Page Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>List of Users</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Manage Users</li>
                        <li>List of Users</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    @if(! $users->count())

        <div class="block full">
            <!-- Get Started Content -->
            No Users
            <!-- END Get Started Content -->
        </div>

    @else

        <div class="row">
            <!-- Tables Row -->
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
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th style="width: 80px;" class="text-center"><i class="fa fa-flash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="text-center"><strong>{{ $user->id }}</strong></td>
                                    <td>{{ $user->firstName }}</td>
                                    <td>{{ $user->lastName }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('users.show', ['user' => $user->id]) }}" data-toggle="tooltip" title="View" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-eye"></i></a>
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