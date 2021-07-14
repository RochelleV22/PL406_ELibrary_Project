@extends('admin.layouts.master', ['title' => 'سابقه امانت های من'])

@section('content')
    <!-- 
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>سابقه امانت</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>امانت های من</li>
                        <li>سابقه امانت</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    

    <div class="row">

        
        <div class="col-lg-12">
            @if ($lends->isEmpty())

                <div class="block full">
                    
                    سابقه امانت های شما خالی می باشد.
                    
                </div>
            @else
            
                <div class="block">
                    <div class="block-title">
                        <h2>سابقه امانت های {{ auth()->user()->fullname }}</h2>
                    </div>

                  
                    <div class="table-responsive">
                        <table class="table table-borderless table-vcenter table-hover">
                            <thead>
                            <tr>
                                <th>نام کتاب</th>
                                <th>نویسنده</th>
                                <th class="text-center">تاریخ امانت</th>
                                <th class="text-center">تاریخ بازگشت</th>
                                <th class="text-center">روزهای تاخیر</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lends as $lend)
                                <tr>
                                    <td>{{ $lend->book->name }}</td>
                                    <td>{{ $lend->book->author }}</td>
                                    <td class="text-center">{{ get_date($lend->created_at) }}</td>
                                    <td class="text-center">{{ get_date($lend->updated_at) }}</td>
                                    <td class="text-center">{{ $lend->delay }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
            @endif
        </div>
    </div>
     -->
@endsection
