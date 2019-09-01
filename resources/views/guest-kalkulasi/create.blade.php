@extends('shared.layout-guest')
@section('title', 'Kalkulasi')

@inject('mesinInferensi', 'App\MesinInferensi')
@section('content')

    <div class="max-w-lg w-full mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-5"> {{ config("app.name") }} </h1>

        @include('shared.image-front')

        <div class="shadow-lg bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-xl mb-5">
                Klasifikasi Penyakit Ginjal Berdasarkan Hasil Tes Kliren Kreatinin
            </h2>

            <table class="border w-full mb-16">
                <thead class="font-semibold bg-blue-700 text-gray-100">
                    <tr>
                        <th class="px-1 text-left">
                            Hasil Tes Kliren Kreatinin
                        </th>
                        <th class="px-3 text-left">
                            Jenis Penyakit Ginjal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-1 py-1">
                            Dibawah 15 mg/dl
                        </td>
                        <td class="border px-3 py-1">
                            Dialisis
                        </td>
                    </tr>

                    <tr>
                        <td class="border px-1 py-1">
                            Diantara 15 - 25 mg/dl
                        </td>
                        <td class="border px-3 py-1">
                            Kronik
                        </td>
                    </tr>
                </tbody>
            </table>

            <form action="{{ route('guest-kalkulasi.show') }}">
                @include("kalkulasi.form-fields")
            </form>
        </div>
    </div>
@endsection
