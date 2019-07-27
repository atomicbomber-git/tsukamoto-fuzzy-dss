<?php

namespace App\Http\Controllers;

use App\Variabel;
use App\Rule;

class RuleController extends Controller
{
    public function index()
    {
        $input_variabels = Variabel::query()
            ->whereIn("nama", ["Berat Badan", "Umur", "Istirahat"])
            ->with("parameters:id,nama,variabel_id")
            ->select("id", "nama")
            ->get();

        $output_variabel = Variabel::query()
            ->whereIn("nama", ["Kalori Harian"])
            ->with("parameters:id,nama,variabel_id")
            ->select("id", "nama")
            ->first();

        $rules = Rule::query()
            ->select("id", "output_parameter_id")
            ->with([
                "inputs:id,rule_id,parameter_id",
                "inputs.parameter:id,nama,variabel_id",
                "output_parameter:id,nama",
            ])
            ->orderBy("id")
            ->get()
            ->map(function ($rule) {
                $rule->inputs = $rule->inputs->keyBy("parameter.variabel_id");
                return $rule;
            });

        return view("rule.index", compact("input_variabels", "output_variabel", "rules"));
    }
}
