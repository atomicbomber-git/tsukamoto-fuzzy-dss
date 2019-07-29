@extends('shared.layout-admin')
@section('title', 'Kalkulasi')

@inject('mesinInferensi', 'App\MesinInferensi')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Kalkulasi </li>
        </ol>
    </nav>

    <h1 class="text-2xl font-bold mb-5"> Kalkulasi {{ $mesinInferensi->namaMesin() }} </h1>

    <div class="w-full max-w-md">
        <form action="{{ route('kalkulasi.show') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @include("kalkulasi.form-fields")
        </form>
    </div>
@endsection
