@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <!-- BEGIN: Header-->
    @include('components.homepage.navbar-homepage')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu -->
    @include('components.homepage.sidemenu-homepage')
    <!-- End: Main Menu -->

    <!-- BEGIN: Start Ecommerce-->
    @include('components.homepage.templatedokter-homepage')
    <!-- BEGIN: End Ecommerce-->

@endsection
