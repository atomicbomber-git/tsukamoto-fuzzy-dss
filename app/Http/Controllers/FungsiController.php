<?php

namespace App\Http\Controllers;

use App\FungsiParameter;
use App\Rules\SyaratFungsi;
use App\Rules\FormulaFungsi;

class FungsiController extends Controller
{
    public function edit(FungsiParameter $fungsi)
    {
        return view("fungsi.edit", compact("fungsi"));
    }

    public function update(FungsiParameter $fungsi)
    {
        $data = $this->validate(request(), [
            "syarat" => ["required", "string", new SyaratFungsi],
            "formula" => ["required", "string", new FormulaFungsi],
        ]);

        $fungsi->update($data);

        return back()
            ->with("message-state", "success")
            ->with("message-text", __("messages.update.success"));
    }
}
