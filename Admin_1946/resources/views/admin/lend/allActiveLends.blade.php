@extends('admin.layouts.master', ['title' => 'Lends'])

@section('content')
    <!--
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>لیست کامل امانت های جاری</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>امانت</li>
                        <li>لیست کامل امانت های جاری</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

    @if($lends->count())
        
        <div class="col-lg-12">
            
            <div class="block">
                
                <div class="table-responsive">
                    <table class="table table-borderless table-hover table-vcenter">
                        <thead>
                        <tr>
                            <th>نام کتاب</th>
                            <th>نویسنده</th>
                            <th>امانت گیرنده</th>
                            <th>تاریخ امانت</th>
                            @can('users-admin')
                                <th style="width: 80px;" class="text-center"><i class="fa fa-flash"></i></th> @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lends as $lend)
                            <tr>
                                <td>{{ $lend->book->name }}</td>
                                <td>{{ $lend->book->author }}</td>
                                <td>{{ $lend->user->fullName }}</td>
                                <td><span class="label label-success">{{ get_date($lend->created_at) }}</span></td>
                                @can('users-admin')
                                    <td class="text-center">
                                        <a href="{{ route('users.activeLends', ['user' => $lend->user_id]) }}"
                                           data-toggle="tooltip" data-placement="top" title="امانت های جاری"
                                           class="btn btn-effect-ripple btn-xs btn-success"
                                           style="overflow: hidden; position: relative;"><i class="fa fa-eye"></i></a>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>
       
    @else
        <div class="block full">
           
            لیست امانت های جاری خالی می باشد.
            
        </div>
    @endif
-->
@endsection
