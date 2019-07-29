@extends('shared.layout-guest')

@section('content')

<div class="w-full max-w-sm mx-auto block mt-4 p-5 shadow-xl">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Nama Pengguna
            </label>
            <input
                value="{{ old("username")}}"
                name="username"
                type="text"
                class="shadow appearance-none border {{ $errors->has("username") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="username" type="username" placeholder="Nama Pengguna" />
                @if ($errors->has("username"))
                    <p class="text-red-500 text-xs italic"> {{ $errors->first("username") }} </p>
                @endif
        </div>

        <div class="mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Kata Sandi
            </label>
            <input
                value="{{ old("password")}}"
                name="password"
                type="password"
                class="shadow appearance-none border {{ $errors->has("password") ? "border-red-500" : "" }} rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                id="password" type="password" placeholder="Kata Sandi" />
                @if ($errors->has("password"))
                    <p class="text-red-500 text-xs italic"> {{ $errors->first("password") }} </p>
                @endif
        </div>

        <div class="flex mt-8 justify-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Masuk
                <i class="fa fa-sign-in"></i>
            </button>
        </div>
    </form>
</div>


@endsection
