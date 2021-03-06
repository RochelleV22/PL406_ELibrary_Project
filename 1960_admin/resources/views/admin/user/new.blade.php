@extends('admin.layouts.master', ['title' => 'New User'])

@section('content')

    <!-- Page Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>New User</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Manage Users</li>
                        <li>New User</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    @if($users->isEmpty())

        <div class="block full">
            <!-- Get Started Content -->
            No Users
            <!-- END Get Started Content -->
        </div>

    @else

        <div class="row">
            <!-- Tables Row -->
            <div class="col-lg-12">
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
                                    <th>Email</th>
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
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('users.confirm', ['user' => $user->id]) }}" data-toggle="tooltip" class="btn btn-effect-ripple btn-xs btn-success" style="overflow: hidden; position: relative;" data-original-title="??????????"><i class="fa fa-check"></i></a>
                                        <a onclick="document.getElementById('deleteUserForm').action='{{ route('users.destroy', ['user' => $user->id]) }}'" href="#modal-fade" data-toggle="modal" title="Delete" class="btn btn-effect-ripple btn-xs btn-danger" style="overflow: hidden; position: relative;"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <form id="deleteUserForm" action="#" method="post">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                        </form>
                        <div id="modal-fade" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                                        <h3 class="modal-title"><strong>Warning</strong></h3>
                                    </div>
                                    <div class="modal-body">Do you want to delete the user?</div>
                                    <div class="modal-footer">
                                        <button onclick="document.getElementById('deleteUserForm').submit();" type="button" class="btn btn-effect-ripple btn-danger" style="overflow: hidden; position: relative;">Yes</button>
                                        <button type="button" class="btn btn-effect-ripple btn-success" data-dismiss="modal" style="overflow: hidden; position: relative;">No</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Row Styles Content -->
                </div>
                <!-- END Row Styles Block -->
            </div>
        </div>
        
        @include('admin.layouts.messages')
    @endif

@endsection
