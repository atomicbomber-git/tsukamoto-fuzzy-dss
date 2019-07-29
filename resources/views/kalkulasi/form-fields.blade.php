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
