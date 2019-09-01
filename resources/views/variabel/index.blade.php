@extends('shared.layout-admin')
@section('title', 'Variabel')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Variabel </li>
        </ol>
    </nav>

    @include('shared.image-front')

    <h1 class="text-2xl font-bold mb-5"> Variabel </h1>

    <table class="border">
        <thead class="font-semibold bg-red-700 text-gray-100">
            <tr>
                <th class="px-1 text-center w-10"> # </th>
                <th class="px-3 text-left"> Nama </th>
                <th class="px-3 text-center"> Kendali </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($variabels as $variabel)
            <tr>
                <td class="border px-1 py-1 text-center"> {{ $loop->iteration }} </td>
                <td class="border px-3 py-1"> {{ $variabel->nama }} </td>
                <td class="border px-3 py-1 text-center">
                    <a href="{{ route('variabel-parameter.index', $variabel) }}" class="inline-block  bg-teal-500 hover:bg-teal-700 text-white text-sm py-1 px-2 rounded">
                        Parameter
                        <i class="fa fa-list-alt"></i>
                    </a>

                    <a href="{{ route('variabel.edit', $variabel) }}" class="inline-block  bg-gray-500 hover:bg-gray-700 text-white text-sm py-1 px-2 rounded">
                        Ubah
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
