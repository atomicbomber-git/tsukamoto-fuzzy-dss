@inject('mesinInferensi', 'App\MesinInferensi')
@extends('shared.layout-guest')
@section('title', 'Hasil Kalkulasi')
@section('content')
    <div class="w-full mt-5 shadow-lg mx-auto p-5">
        <h1 class="text-2xl font-bold mb-16 text-center">
            Hasil Kalkulasi {{ $mesinInferensi->namaMesin() }}
        </h1>

        @include("shared.kalkulasi.result-component")
    </div>
@endsection
