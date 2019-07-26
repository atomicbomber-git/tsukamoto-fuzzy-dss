<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parameter;

class ParameterFungsiController extends Controller
{
    public function index(Parameter $parameter)
    {
        $parameter->load("fungsi_parameters");
        return view("parameter-fungsi.index", compact("parameter"));
    }
}
