@extends('shared.layout-admin')
@section('title', 'Kalkulasi')
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

    <h1 class="text-2xl font-bold mb-5"> Kalkulasi </h1>

    <div class="w-full max-w-md">
        <form action="{{ route('kalkulasi.show') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="umur">
                    Umur (Tahun)
                </label>
                <input
                    value="{{ old("umur")}}"
                    name="umur"
                    type="text"
                    class="shadow appearance-none border {{ $errors->has("umur") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="umur" type="umur" placeholder="Umur (Tahun)" />
                    @if ($errors->has("umur"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("umur") }} </p>
                    @endif
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="berat_badan">
                    Berat Badan (kg)
                </label>
                <input
                    value="{{ old("berat_badan")}}"
                    name="berat_badan"
                    type="text"
                    class="shadow appearance-none border {{ $errors->has("berat_badan") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="berat_badan" type="berat_badan" placeholder="Berat Badan (kg)" />
                    @if ($errors->has("berat_badan"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("berat_badan") }} </p>
                    @endif
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="tinggi_badan">
                    Tinggi Badan (cm)
                </label>
                <input
                    value="{{ old("tinggi_badan")}}"
                    name="tinggi_badan"
                    type="text"
                    class="shadow appearance-none border {{ $errors->has("tinggi_badan") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="tinggi_badan" type="tinggi_badan" placeholder="Tinggi Badan (cm)" />
                    @if ($errors->has("tinggi_badan"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("tinggi_badan") }} </p>
                    @endif
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="aktivitas">
                    Aktivitas (1 - 10), 1: Istirahat; 10: Sangat Berat
                </label>
                <input
                    value="{{ old("aktivitas")}}"
                    name="aktivitas"
                    type="text"
                    class="shadow appearance-none border {{ $errors->has("aktivitas") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="aktivitas" type="aktivitas" placeholder="Aktivitas (1 - 10), 1: Istirahat; 10: Sangat Berat" />
                    @if ($errors->has("aktivitas"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("aktivitas") }} </p>
                    @endif
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Lakukan Kalkukasi Kalori
                </button>
            </div>
        </form>
    </div>
@endsection
