@extends('shared.layout-admin')
@section('title', 'Fungsi')
@section('content')

    <nav class="bg-gray-100 p-3 rounded font-sans w-full">
        <ol class="list-reset flex flex-wrap text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('variabel.index') }}"  class="text-blue font-bold">
                    Variabel '{{ $parameter->variabel->nama }}'
                </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('variabel-parameter.index', $parameter->variabel) }}"  class="text-blue font-bold">
                    Parameter '{{ $parameter->nama }}'
                </a>
            </li>
            <li><span class="mx-2">/</span></li>

            <li> Fungsi </li>
        </ol>
    </nav>

    <h1 class="text-5xl mb-5"> Fungsi </h1>

    <div class="overflow-x-auto">
        <table class="border">
            <thead class="font-semibold bg-red-700 text-gray-100">
                <tr>
                    <th class="px-1 text-center w-10"> # </th>
                    <th class="px-3 text-center"> Syarat </th>
                    <th class="px-3 text-center"> Formula </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parameter->fungsi_parameters as $fungsi_parameter)
                <tr>
                    <td class="border px-1 py-1 text-center"> {{ $loop->iteration }} </td>
                    <td class="border px-3 py-1 text-center font-mono"> {{ $fungsi_parameter->syarat }} </td>
                    <td class="border px-3 py-1 text-center font-mono"> {{ $fungsi_parameter->formula }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
