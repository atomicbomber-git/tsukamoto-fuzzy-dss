<p class="text-2xl mt-5">
    {{ $mesinInferensi->labelOutput() }} = {{ $total_alfa_predikat_kali_zi }} / {{ $total_alfa_predikat }} =
    <span class="text-red-900 font-bold"> {{ $hasil }} {{ $mesinInferensi->satuanOutput() }} </span>
</p>

<h2 class="text-2xl font-bold mt-5">
    Saran Menu Diet
</h2>

<p>
    {!! $saran !!}
</p>
