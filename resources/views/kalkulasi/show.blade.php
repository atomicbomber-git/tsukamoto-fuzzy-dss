@extends('shared.layout-admin')
@section('title', 'Hasil Kalkulasi')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('kalkulasi.create') }}" class="text-blue font-bold"> Kalkulasi </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Hasil Kalkulasi </li>
        </ol>
    </nav>

    <h1 class="text-2xl font-bold mb-5"> Hasil Kalkulasi </h1>


    <table class="border">
        <thead class="font-semibold bg-red-700 text-gray-100">
            <tr>
                <th class="px-1 text-center w-10"> # </th>

                @foreach ($input_values as $name => $value)
                <th class="px-3 text-left"> {{ $name }} ({{ $value }}) </th>
                @endforeach

                <th class="px-1 text-right"> Alfa Predikat </th>
                <th class="px-1 text-right"> Zi </th>
                <th class="px-1 text-right"> Alfa Predikat * Zi </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hasil_kalkulasis as $hasil_kalkulasi)
            <tr>
                <td class="border px-1 py-1 text-center"> {{ $loop->iteration }} </td>
                @foreach ($input_values as $name => $value)
                <td class="border px-1 py-1 text-right"> {{ $hasil_kalkulasi["inputs"][$name] }} </td>
                @endforeach
                <td class="border px-1 py-1 text-right">
                    {{ $hasil_kalkulasi["alfa_predikat"] }}
                </td>
                <td class="border px-1 py-1 text-right">
                    {{ $hasil_kalkulasi["zi"] }}
                </td>
                <td class="border px-1 py-1 text-right">
                    {{ $hasil_kalkulasi["alfa_predikat_kali_zi"] }}
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <td></td>
            @foreach ($input_values as $input_value)
            <td></td>
            @endforeach
            <td class="text-right"> {{ $total_alfa_predikat }} </td>
            <td> </td>
            <td class="text-right"> {{ $total_alfa_predikat_kali_zi }} </td>
        </tfoot>
    </table>

    @inject('mesinInferensi', 'App\MesinInferensi')

    <p class="text-2xl mt-5">
        {{ $mesinInferensi->namaMesin() }} = {{ $total_alfa_predikat_kali_zi }} / {{ $total_alfa_predikat }} =
        <span class="text-red-900 font-bold"> {{ $hasil }} </span>
    </p>
@endsection
