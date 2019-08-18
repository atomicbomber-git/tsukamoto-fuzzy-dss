@extends('shared.layout-admin')
@section('title', 'Ubah Saran')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('saran.index') }}" class="text-blue font-bold"> Saran </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Ubah Saran </li>
        </ol>
    </nav>

    @include('shared.alert')

    <h1 class="text-2xl font-bold mb-5"> Ubah Saran </h1>

    <div class="w-full max-w-md">
        <form method="POST" action="{{ route('saran.update', $saran) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="batas_bawah">
                    Batas Bawah
                </label>
                <input
                    value="{{ old("batas_bawah", $saran->batas_bawah)}}"
                    name="batas_bawah"
                    type="text"
                    class="shadow appearance-none border {{ $errors->has("batas_bawah") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="batas_bawah" type="batas_bawah" placeholder="Batas Bawah" />
                    @if ($errors->has("batas_bawah"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("batas_bawah") }} </p>
                    @endif
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="batas_atas">
                    Batas Atas
                </label>
                <input
                    value="{{ old("batas_atas", $saran->batas_atas)}}"
                    name="batas_atas"
                    type="text"
                    class="shadow appearance-none border {{ $errors->has("batas_atas") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="batas_atas" type="batas_atas" placeholder="Batas Atas" />
                    @if ($errors->has("batas_atas"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("batas_atas") }} </p>
                    @endif
            </div>

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="konten">
                    Konten
                </label>
                <textarea
                    name="konten"
                    type="text"
                    rows="10"
                    class="shadow appearance-none border {{ $errors->has("konten") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="konten" type="konten" placeholder="Konten">{{ old("konten", $saran->konten)}}</textarea>
                    @if ($errors->has("konten"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("konten") }} </p>
                    @endif
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Ubah Saran
                </button>
            </div>
        </form>
    </div>
@endsection
