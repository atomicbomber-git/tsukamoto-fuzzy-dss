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

    <h1 class="text-5xl mb-5"> Rule </h1>

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
                        -
                    </td>
                </tr>
            @endforeach



            {{-- @foreach ($variabels as $variabel)
            <tr>
                <td class="border px-1 py-1 text-center"> {{ $loop->iteration }} </td>
                <td class="border px-3 py-1"> {{ $variabel->nama }} </td>
                <td class="border px-3 py-1 text-center">
                    <a href="{{ route('variabel-parameter.index', $variabel) }}" class="bg-teal-500 hover:bg-teal-700 text-white text-sm py-1 px-2 rounded">
                        Parameter
                    </a>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
@endsection
