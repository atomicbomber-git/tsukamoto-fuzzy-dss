@extends('shared.layout-admin')
@section('title', 'Variabel')
@section('content')

    <nav class="bg-gray-100 p-3 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Variabel </li>
        </ol>
    </nav>

    <h1 class="text-5xl mb-5"> Variabel </h1>

    <table class="w-full border">
        <thead class="font-semibold bg-red-700 text-gray-100">
            <tr>
                <th class="pl-1 text-center w-10"> # </th>
                <th class="pl-3 text-left"> Nama </th>
                <th class="pl-3 text-center"> Kendali </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($variabels as $variabel)
            <tr>
                <td class="border pl-1 py-1 text-center"> {{ $loop->iteration }} </td>
                <td class="border pl-3 py-1"> {{ $variabel->nama }} </td>
                <td class="border pl-3 py-1 text-center">
                    <a href="{{ route('variabel-parameter.index', $variabel) }}" class="bg-teal-500 hover:bg-teal-700 text-white text-sm py-1 px-2 rounded">
                        Parameter
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
