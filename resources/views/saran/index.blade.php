@extends('shared.layout-admin')
@section('title', 'Saran')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Saran </li>
        </ol>
    </nav>

    @include('shared.alert')

    <h1 class="text-2xl font-bold mb-5"> Saran </h1>

    <div class="flex justify-end my-3">
        <a href="{{ route('saran.create') }}" class="inline-block  bg-teal-500 hover:bg-teal-700 text-white text-sm py-1 px-2 rounded">
            Tambah Saran
            <i class="fa fa-plus"></i>
        </a>
    </div>

    <table class="border">
        <thead class="font-semibold bg-red-700 text-gray-100">
            <tr>
                <th class="px-1 text-center w-10"> # </th>
                <th class="px-3 text-center"> Batas Bawah </th>
                <th class="px-3 text-center"> Batas Atas </th>
                <th class="px-3 text-left" style="width: 25rem"> Konten </th>
                <th class="px-3 text-center"> Kendali </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sarans as $saran)
            <tr>
                <td class="border px-1 py-1 text-center"> {{ $loop->iteration }} </td>
                <td class="border px-3 py-1 text-center"> {{ $saran->batas_bawah }} </td>
                <td class="border px-3 py-1 text-center"> {{ $saran->batas_atas }} </td>
                <td class="border px-3 py-1"> {!! $saran->konten !!} </td>
                <td class="border px-3 py-1 text-center">
                    <a href="{{ route('saran.edit', $saran) }}" class="inline-block  bg-gray-500 hover:bg-gray-700 text-white text-sm py-1 px-2 rounded">
                        Ubah
                        <i class="fa fa-pencil"></i>
                    </a>

                    <form method="POST" class="inline-block" action="{{ route('saran.delete', $saran) }}">
                        @csrf
                        <button class="inline-block  bg-gray-800 hover:bg-gray-900 text-white text-sm py-1 px-2 rounded">
                            Hapus
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
