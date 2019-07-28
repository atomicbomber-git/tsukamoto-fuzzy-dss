@extends('shared.layout-admin')
@section('title', 'Ubah Rule')
@section('content')

    <nav class="bg-gray-200 p-3 mb-5 rounded font-sans w-full">
        <ol class="list-reset flex text-grey-dark">
            <li>
                <a href="{{ route('home') }}" class="text-blue font-bold"> {{ config('app.name') }} </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li>
                <a href="{{ route('rule.index') }}" class="text-blue font-bold"> Rule </a>
            </li>
            <li><span class="mx-2">/</span></li>
            <li> Ubah Rule </li>
        </ol>
    </nav>

    @include('shared.alert')

    <h1 class="text-2xl font-bold mb-5"> Ubah Rule </h1>

    <div class="w-full max-w-md">
        <form method="POST" action="{{ route('rule.update', $rule) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <h2 class="text-2xl"> Variabel Input </h2>
                <hr class="border-b mt-0 mb-3">

                @foreach ($inputVariabels as $inputVariabel)
                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        {{ $inputVariabel->nama }}
                    </label>
                    <div class="relative">
                        <select name="data[input_parameter_ids][]" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($inputVariabel->parameters as $parameter)
                            <option
                                {{
                                    $rule->inputs[$inputVariabel->nama]->parameter_id ===
                                        $parameter->id ? "selected" : ""
                                }}

                                value="{{ $parameter->id }}">
                                {{ $parameter->nama }}
                            </option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 flex right-0 items-center px-2 text-gray-700 mr-3 mb-2">
                            <i class="h-2 w-2 fa fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mb-4">
                <h2 class="text-2xl"> Variabel Output </h2>
                <hr class="border-b mt-0 mb-3">

                <div class="mb-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        {{ $outputVariabel->nama }}
                    </label>
                    <div class="relative">
                        <select name="data[output_parameter_id]" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($outputVariabel->parameters as $parameter)
                            <option value="{{ $parameter->id }}">
                                {{ $parameter->nama }}
                            </option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 flex right-0 items-center px-2 text-gray-700 mr-3 mb-2">
                            <i class="h-2 w-2 fa fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
            </div>

            @if ($errors->has("data"))
            <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 mb-3">
                <i class="fa fa-warning mr-1"></i>
                <p> {{ $errors->first("data") }} </p>
            </div>
            @endif

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Ubah Rule
                </button>
            </div>
        </form>
    </div>
@endsection
