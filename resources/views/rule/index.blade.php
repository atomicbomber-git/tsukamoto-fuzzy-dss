@extends('shared.layout-admin')
@section('title', 'Rule')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Rule </li>
        </ol>
    </nav>

    @include('shared.alert')

    <h1 class="text-2xl font-bold mb-5"> Rule </h1>

    <div class="inline-block">
        <div class="flex justify-end my-3">
            <a href="{{ route('rule.create') }}" class="inline-block  bg-teal-500 hover:bg-teal-700 text-white text-sm py-1 px-2 rounded">
                Tambah Rule
                <i class="fa fa-plus"></i>
            </a>
        </div>

        <table class="border">
            <thead class="font-semibold bg-red-700 text-gray-100">
                <tr>
                    <th class="px-1 text-center w-10"> # </th>

                    @foreach ($input_variabels as $variabel)
                    <th class="px-3 text-left"> {{ $variabel->nama }} </th>
                    @endforeach
                    <th class="px-3 text-left"> {{ $output_variabel->nama }} </th>
                    <th class="px-3 text-center"> Kendali </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rules as $rule)
                    <tr>
                        <td class="border px-1 py-1 text-center"> {{ $loop->iteration }} </td>
                        @foreach ($input_variabels as $variabel)
                        <td class="border px-3 py-1">
                            {{ $rule->inputs[$variabel->id]->parameter->nama }}
                        </td>
                        @endforeach

                        <td class="border px-3 py-1">
                            {{ $rule->output_parameter->nama }}
                        </td>

                        <td class="border px-3 py-1">
                            <a href="{{ route('rule.edit', $rule) }}" class="inline-block  bg-gray-500 hover:bg-gray-700 text-white text-sm py-1 px-2 rounded">
                                Ubah
                                <i class="fa fa-pencil"></i>
                            </a>

                            <a href="{{ route('rule.delete', $rule) }}" class="inline-block  bg-gray-800 hover:bg-gray-900 text-white text-sm py-1 px-2 rounded">
                                Hapus
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
