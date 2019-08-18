<p class="text-2xl mt-5">
    {{ $mesinInferensi->labelOutput() }} =
    <span class="text-red-900 font-bold"> {{ $hasil }} {{ $mesinInferensi->satuanOutput() }} </span>
</p>

<h2 class="text-2xl font-bold mt-5">
    Saran Menu Diet untuk Penyakit Ginjal {{ $kategori }}
</h2>

<p>
    {!! $saran !!}
</p>
