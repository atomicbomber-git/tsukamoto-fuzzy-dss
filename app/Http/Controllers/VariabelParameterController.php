<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variabel;

class VariabelParameterController extends Controller
{
    public function index(Variabel $variabel)
    {
        $variabel->load("parameters:id,variabel_id,nama");
        return view("variabel-parameter.index", compact("variabel"));
    }
}
