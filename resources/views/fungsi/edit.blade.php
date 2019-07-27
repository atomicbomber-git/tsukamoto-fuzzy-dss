@extends('shared.layout-admin')
@section('title', 'Ubah Fungsi')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('variabel.index') }}"  class="text-blue font-bold">
                    Variabel '{{ $fungsi->parameter->variabel->nama }}'
                </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('variabel-parameter.index', $fungsi->parameter->variabel) }}"  class="text-blue font-bold">
                    Parameter '{{ $fungsi->parameter->nama }}'
                </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('parameter-fungsi.index', $fungsi->parameter_id) }}" class="text-blue font-bold"> Fungsi </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Ubah Fungsi </li>
        </ol>
    </nav>

    @include('shared.alert')

    <h1 class="text-2xl font-bold mb-5"> Ubah Fungsi </h1>

    <div class="w-full max-w-md">
        <form method="POST" action="{{ route('fungsi.update', $fungsi) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="syarat">
                    Syarat
                </label>
                <input
                    value="{{ old("syarat", $fungsi->syarat)}}"
                    name="syarat"
                    type="text"
                    class="font-mono shadow appearance-none border {{ $errors->has("syarat") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="syarat" type="syarat" placeholder="Syarat" />
                    @if ($errors->has("syarat"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("syarat") }} </p>
                    @endif
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="formula">
                    Formula
                </label>
                <input
                    value="{{ old("formula", $fungsi->formula)}}"
                    name="formula"
                    type="text"
                    class="font-mono shadow appearance-none border {{ $errors->has("formula") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="formula" type="formula" placeholder="Formula" />
                    @if ($errors->has("formula"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("formula") }} </p>
                    @endif
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Ubah Fungsi
                </button>
            </div>
        </form>
    </div>
@endsection
