<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('includes.dashboard.meta-dashboard')

        <title>@yield('title')</title>

        @stack('before-styles')

        @include('includes.dashboard.style-dashboard')

        @stack('after-style')
    </head>

    <body class="index-page">

        @include('includes.dashboard.header-dashboard')

        @yield('content')

        @stack('before-script')

        @include('includes.dashboard.script-dashboard')

        @stack('after-script')

    </body>

</html>
