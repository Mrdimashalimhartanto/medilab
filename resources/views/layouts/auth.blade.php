<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('includes.auth.meta-auth')

        <title>@yield('title')</title>

        @stack('before-style')

        @include('includes.auth.style-auth')

        @stack('after-style')
    </head>

    <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="blank-page">

        @yield('content')

        @stack('before-script')

        @include('includes.auth.script-auth')

        @stack('after-script')

    </body>

</html>
