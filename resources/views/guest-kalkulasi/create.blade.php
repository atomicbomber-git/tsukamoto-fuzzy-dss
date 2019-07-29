@extends('shared.layout-guest')
@section('title', 'Kalkulasi')

@inject('mesinInferensi', 'App\MesinInferensi')
@section('content')

    <div class="max-w-md w-full mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-5"> Kalkulasi {{ $mesinInferensi->namaMesin() }} </h1>

        <div class="shadow-lg">
            <form action="{{ route('guest-kalkulasi.show') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @include("kalkulasi.form-fields")
            </form>
        </div>
    </div>
@endsection
