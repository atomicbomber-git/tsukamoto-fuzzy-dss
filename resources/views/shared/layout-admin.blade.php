@extends('shared.layout')

@section('head-bottom')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('body-bottom')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('body-main')
    @include('shared.navbar-admin')
    <div class="md:flex md:w-3/4 md:mx-auto">
        <div id="sidebar" class="border-b pb-3 pl-3 hidden md:block md:pb-0 md:border-b-0 md:w-2/12 pt-5">
            @include('shared.sidebar-admin')
        </div>

        <div class="md:w-10/12 pt-5">
            <div class="px-3">
                @yield('content')
            </div>
        </div>
    </div>
@endsection

@section('extra-scripts')
<script>
    let menuCollapseButton = document.querySelector("#collapse-menu")
    let sidebar = document.querySelector("#sidebar")

    menuCollapseButton.addEventListener('click', function() {
        if (sidebar.classList.contains("hidden")) {
            sidebar.classList.remove("hidden")
        }
        else {
            sidebar.classList.add("hidden")
        }
    })
</script>
@endsection
