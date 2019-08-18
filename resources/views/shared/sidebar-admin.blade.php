<nav class="md:sticky md:top-0 px-3">
    <div class="font-bold text-red-900 text-lg tracking-wide">
        Master Data
    </div>
    <ul class="pl-6">
        <li class="hover:bg-red-100">
            <a href="{{ route('variabel.index') }}"> Variabel </a>
        </li>
        <li class="hover:bg-red-100">
            <a href="{{ route('rule.index') }}"> Rule </a>
        </li>
        <li class="hover:bg-red-100">
            <a href="{{ route('saran.index') }}"> Saran </a>
        </li>
    </ul>

    <div class="font-bold text-red-900 text-lg tracking-wide">
        Operasional
    </div>
    <ul class="pl-6">
        <li class="hover:bg-red-100">
            <a href="{{ route('kalkulasi.create') }}"> Kalkulasi </a>
        </li>
    </ul>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="mt-10 w-full text-white focus:outline-none focus:shadow-outline text-center bg-gray-900 hover:bg-gray-800 px-2 py-1 rounded font-bold">
            Log Out
            <i class="fa fa-sign-out"></i>
        </button>
    </form>


</nav>
