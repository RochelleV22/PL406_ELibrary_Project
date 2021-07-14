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
        <link rel="stylesheet" href="/blog/css/bootstrap.min.css">
        <link rel="stylesheet" href="/blog/css/plugins.css">
        <link rel="stylesheet" href="/blog/css/main.css">
        <link rel="stylesheet" href="/blog/css/themes.css">
        <!-- END Stylesheets -->
        <script src="/blog/js/vendor/modernizr-3.3.1.min.js"></script>
    </head>
    <body>
        <!-- Page Container -->
        <div id="page-container" class="boxed">

            @include('article.layouts.header')

            @yield('content')

            @include('article.layouts.footer')

        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-arrow-up"></i></a>

        @include('article.layouts.footer-scripts')

    </body>
</html>
