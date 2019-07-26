<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variabel;

class VariabelController extends Controller
{
    public function index()
    {
        $variabels = Variabel::query()
            ->select("id", "nama")
            ->get();

        return view('variabel.index', compact("variabels"));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function edit(Variabel $variabel)
    {
    }

    public function update(Variabel $variabel)
    {
    }

    public function delete(Variabel $variabel)
    {
    }
}
