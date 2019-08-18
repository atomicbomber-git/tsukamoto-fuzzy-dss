<?php

namespace App\Http\Controllers;

use App\Saran;

class SaranController extends Controller
{
    public function index()
    {
        $sarans = Saran::query()
            ->select("id", "batas_atas", "batas_bawah", "konten")
            ->get();

        return view("saran.index", compact("sarans"));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function edit(Saran $saran)
    {
        return view("saran.edit", compact("saran"));
    }

    public function update(Saran $saran)
    {
        $data = $this->validate(request(), [
            "batas_atas" => ["required", "numeric", "gte:0"],
            "batas_bawah" => ["required", "numeric", "gte:0"],
            "konten" => ["required", "max:20000"],
        ]);

        $saran->update($data);

        return redirect()
            ->route("saran.edit", $saran)
            ->with("message-state", "success")
            ->with("message-text", __("messages.update.success"));
    }

    public function delete(Saran $saran)
    {
    }
}
