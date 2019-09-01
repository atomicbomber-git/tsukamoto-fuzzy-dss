<nav class=" items-center bg-blue-700 py-3">
    <div class="w-full px-5 md:w-3/4 md:px-0 md:mx-auto flex flex-wrap justify-between">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a
                href="{{ route('guest-kalkulasi.create') }}"
                class="font-semibold text-xl tracking-tight">
                {{ config('app.name') }}
            </a>
        </div>
        <div class="block lg:hidden">
            <button id="collapse-menu" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div id="navmenu" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="{{ route('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Administrasi
                </a>

                <a href="{{ route('guest-kalkulasi.create') }}" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Kalkulasi
                </a>
            </div>
        </div>
    </div>
</nav>
