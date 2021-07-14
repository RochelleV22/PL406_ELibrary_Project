<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">

        <title>
            @isset($title)
                {{ $title }} |
            @endisset
            {{ config('app.name') }}
        </title>

        <meta name="description" content="Elibrary">
        <meta name="author" content="kokila">
        <meta name="robots" content="noindex, nofollow">
        <meta name="theme-color" content="#5ccdde" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <link rel="shortcut icon" href="/img/favicon.png">
        <link rel="apple-touch-icon" href="/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="/img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/plugins.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/themes.css">
        <!-- END Stylesheets -->

        <script src="/js/vendor/modernizr-3.3.1.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <div class="preloader">
                <div class="inner">
                    <!-- Animation spinner for all modern browsers -->
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
               {{-- <!-- Alternative Sidebar -->
                @include('admin.layouts.sidebar-left')
                <!-- END Alternative Sidebar -->--}}

                <!-- Main Sidebar -->
                @include('admin.layouts.sidebar')
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    
                    @include('admin.layouts.navbar')
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        @yield('content')
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/app.js"></script>
        
        <script src="/js/scripts.js"></script>
        @yield('scripts')
    </body>
</html>
