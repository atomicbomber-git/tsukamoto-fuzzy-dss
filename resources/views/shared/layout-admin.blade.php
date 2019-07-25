@extends('shared.layout')

@section('head-bottom')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('body-bottom')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('body-main')
    @include('shared.navbar-admin')
    @yield('content')
@endsection
