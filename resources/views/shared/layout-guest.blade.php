@extends('shared.layout')

@section('head-bottom')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('body-bottom')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('body-main')
    @include('shared.navbar-guest')
    <div class="md:flex md:w-3/4 md:mx-auto">
        @yield('content')
    </div>
@endsection

@section('extra-scripts')
<script>
    let menuCollapseButton = document.querySelector("#collapse-menu")
    let navmenu = document.querySelector("#navmenu");

    menuCollapseButton.addEventListener("click", function () {
        navmenu.classList.toggle("hidden")
    })
</script>
@endsection
