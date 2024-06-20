<!DOCTYPE html>
<html x-data="data()" lang="en">

    <head>
        @include('includes.homepage.meta-homepage')

        <title>@yield('title')</title>

        @stack('before-style')

        @include('includes.homepage.style-homepage')

        @stack('after-style')
    </head>

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="">

        @yield('content')

        @stack('before-script')

        @include('includes.homepage.script-homepage')

        @stack('after-script')


    </body>

</html>
