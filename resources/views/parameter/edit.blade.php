@extends('shared.layout-admin')
@section('title', 'Ubah Parameter')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('variabel-parameter.index', $parameter->variabel_id) }}" class="text-blue font-bold"> Parameter </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Ubah Parameter '{{ $parameter->nama }}' </li>
        </ol>
    </nav>

    @include('shared.alert')

    <h1 class="text-5xl mb-5"> Ubah Parameter </h1>

    <div class="w-full max-w-md">
        <form method="POST" action="{{ route('parameter.update', $parameter) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                    Parameter
                </label>
                <input
                    value="{{ old("nama", $parameter->nama)}}"
                    name="nama"
                    type="text"
                    class="shadow appearance-none border {{ $errors->has("nama") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="nama" type="nama" placeholder="Parameter" />
                    @if ($errors->has("nama"))
                        <p class="text-red-500 text-xs italic"> {{ $errors->first("nama") }} </p>
                    @endif
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Ubah Parameter
                </button>
            </div>
        </form>
    </div>
@endsection
