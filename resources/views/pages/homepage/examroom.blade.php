@extends('layouts.app')

@section('title', 'Exam Room')

@section('content')

    @include('components.homepage.navbar-homepage')

    @include('components.homepage.sidemenu-homepage')

    @include('components.homepage.examroom')

@endsection
