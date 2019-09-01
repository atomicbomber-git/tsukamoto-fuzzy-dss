<table class="border w-full mb-10">
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

@foreach ($inputs as $inputName => $inputVarname)
<div class="mb-2">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="{{ $inputVarname }}">
        {{ $inputName }}
    </label>
    <input
        value="{{ old($inputVarname) }}"
        name="{{ $inputVarname }}"
        type="text"
        class="shadow appearance-none border {{ $errors->has($inputVarname) ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
        id="{{ $inputVarname }}" type="{{ $inputVarname }}" placeholder="{{ $inputName }}" />

        @inject('mesinInferensi', 'App\MesinInferensi')
        <p class="text-gray-500 text-xs">
            {{ $mesinInferensi->keteranganInputs()[$inputName] ?? "" }}
        </p>

        @if ($errors->has($inputVarname))
            <p class="text-red-500 text-xs italic"> {{ $errors->first($inputVarname) }} </p>
        @endif
</div>
@endforeach

<div class="flex items-center justify-between">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Lakukan Kalkukasi
    </button>
</div>
