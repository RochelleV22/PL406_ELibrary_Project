@extends('auth.master')

@section('content')
<!--
    <div id="login-container">
        
        <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
            <i class="fa fa-history"></i> <strong>بازگردانی گذرواژه</strong>
        </h1>
       

        <div class="animation-fadeInQuickInv">
            @include('admin.layouts.errors')
        </div>

        
        <div class="block animation-fadeInQuickInv">
            
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="{{ route('login') }}" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="right" title="" style="overflow: hidden; position: relative;" data-original-title="بازگشت به صفحه ورود"><i class="fa fa-user"></i></a>
                </div>
                <h2>یادآور</h2>
            </div>
            

            
            <form action="{{ route('password.email') }}" id="form-reminder" method="post" class="form-horizontal" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="text" id="reminder-email" name="email" class="form-control" placeholder="ایمیل خود را وارد کنید..">
                    </div>
                </div>
                <input type="hidden" name="submit">
                <div class="form-group form-actions">
                    <div class="col-xs-12 text-right">
                        <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary" style="overflow: hidden; position: relative;"><i class="fa fa-check"></i> ارسال ایمیل بازگردانی</button>
                    </div>
                </div>
            </form>
            
        </div>
        <

        @include('auth.footer')

    </div>
-->
@endsection
