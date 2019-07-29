@inject('mesinInferensi', 'App\MesinInferensi')
@extends('shared.layout-guest')
@section('title', 'Hasil Kalkulasi')
@section('content')
    <div class="max-w-md w-full mt-5 shadow-lg mx-auto p-5">
        <h1 class="text-2xl font-bold mb-5"> Hasil Kalkulasi {{ $mesinInferensi->namaMesin() }} </h1>


        <p class="text-2xl mt-5">
            {{ $mesinInferensi->labelOutput() }} =
            <span class="text-red-900 font-bold"> {{ $hasil }} {{ $mesinInferensi->satuanOutput() }} </span>
        </p>
    </div>
@endsection
