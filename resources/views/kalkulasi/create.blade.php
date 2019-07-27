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

            @foreach ($inputs as $inputName => $inputVarname)
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="{{ $inputVarname }}">
                    {{ $inputName }}
                </label>
                <input
                    value="{{ old($inputVarname) }}"
                    name="{{ $inputVarname }}"
                    type="text"
                    class="shadow appearance-none border {{ $errors->has($inputVarname) ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="{{ $inputVarname }}" type="{{ $inputVarname }}" placeholder="{{ $inputName }}" />
                    @if ($errors->has($inputVarname))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first($inputVarname) }} </p>
                    @endif
            </div>
            @endforeach

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Lakukan Kalkukasi Kalori
                </button>
            </div>
        </form>
    </div>
@endsection
