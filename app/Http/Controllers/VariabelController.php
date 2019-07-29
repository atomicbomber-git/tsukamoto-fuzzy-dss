<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variabel;
use Illuminate\Validation\Rule;

class VariabelController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $variabels = Variabel::query()
            ->select("id", "nama")
            ->get();

        return view('variabel.index', compact("variabels"));
    }

    public function edit(Variabel $variabel)
    {
        return view("variabel.edit", compact("variabel"));
    }

    public function update(Variabel $variabel)
    {
        $data = $this->validate(request(), [
            "nama" => ["required", "min:1", "max:100", Rule::unique("variabels")->ignore($variabel->id)],
        ]);

        $variabel->update($data);

        return back()
            ->with("message-state", "success")
            ->with("message-text", __("messages.update.success"));
    }
}
