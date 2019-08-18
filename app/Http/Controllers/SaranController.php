<?php

namespace App\Http\Controllers;

use App\MesinInferensi;
use App\Saran;
use App\Variabel;

class SaranController extends Controller
{
    public function index()
    {
        $sarans = Saran::query()
            ->select("id", "batas_atas", "batas_bawah")
            ->get();

        return view("saran.index", compact("sarans"));
    }

    public function create()
    {
        return view("saran.create");
    }

    public function store()
    {
        $data = $this->validate(request(), [
            "batas_atas" => ["required", "numeric", "gte:0"],
            "batas_bawah" => ["required", "numeric", "gte:0"],
            "konten" => ["required", "max:500000"],
        ]);

        $mesinInferensi = app(MesinInferensi::class);
        $variabelOuput = Variabel::query()
            ->where("nama", $mesinInferensi->namaOutput())
            ->first();

        Saran::create(array_merge($data, [
            "variabel_id" => $variabelOuput->id,
        ]));

        return redirect()
            ->route("saran.index")
            ->with("message-state", "success")
            ->with("message-text", __("messages.create.success"));
    }

    public function edit(Saran $saran)
    {
        // return $saran;
        return view("saran.edit", compact("saran"));
    }

    public function update(Saran $saran)
    {
        $data = $this->validate(request(), [
            "batas_atas" => ["required", "numeric", "gte:0"],
            "batas_bawah" => ["required", "numeric", "gte:0"],
            "konten" => ["required", "max:500000"],
        ]);

        $saran->update($data);

        return redirect()
            ->route("saran.edit", $saran)
            ->with("message-state", "success")
            ->with("message-text", __("messages.update.success"));
    }

    public function delete(Saran $saran)
    {
        $saran->delete();

        return redirect()
            ->route("saran.index")
            ->with("message-state", "success")
            ->with("message-text", __("messages.delete.success"));
    }
}
