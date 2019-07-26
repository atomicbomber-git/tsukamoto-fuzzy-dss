@extends('shared.layout-admin')
@section('title', 'Parameter')
@section('content')

    <nav class="bg-gray-100 p-3 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('variabel.index') }}"  class="text-blue font-bold">
                    Variabel '{{ $variabel->nama }}'
                </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Parameter </li>
        </ol>
    </nav>

    <h1 class="text-5xl mb-5"> Parameter </h1>

    <table class="border">
        <thead class="font-semibold bg-red-700 text-gray-100">
            <tr>
                <th class="px-1 text-center w-10"> # </th>
                <th class="px-3 text-left"> Nama </th>
                <th class="px-3 text-center"> Kendali </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($variabel->parameters as $parameter)
            <tr>
                <td class="border px-1 py-1 text-center"> {{ $loop->iteration }} </td>
                <td class="border px-3 py-1"> {{ $parameter->nama }} </td>
                <td class="border px-3 py-1 text-center">
                    <a href="{{ route('parameter-fungsi.index', $parameter) }}" class="bg-teal-500 hover:bg-teal-700 text-white text-sm py-1 px-2 rounded">
                        Fungsi
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
