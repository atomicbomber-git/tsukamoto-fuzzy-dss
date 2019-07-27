<?php

namespace App\Http\Controllers;

use App\Variabel;
use App\Rule;
use Illuminate\Support\Facades\DB;
use App\MesinInferensi;

class RuleController extends Controller
{
    public function index()
    {
        $mesinInferensi = app(MesinInferensi::class);

        $input_variabels = Variabel::query()
            ->whereIn("nama", $mesinInferensi->namaInputs())
            ->with("parameters:id,nama,variabel_id")
            ->select("id", "nama")
            ->get();

        $output_variabel = Variabel::query()
            ->where("nama", $mesinInferensi->namaOutput())
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

    public function create()
    {
        $mesinInferensi = app(MesinInferensi::class);

        $inputVariabels = Variabel::query()
            ->select("id", "nama")
            ->with("parameters:id,variabel_id,nama")
            ->whereIn("nama", $mesinInferensi->namaInputs())
            ->get();

        $outputVariabel = Variabel::query()
            ->select("id", "nama")
            ->with("parameters:id,variabel_id,nama")
            ->where("nama", $mesinInferensi->namaOutput())
            ->first();

        return view("rule.create", compact("inputVariabels", "outputVariabel"));
    }

    public function store()
    {
        $data = $this->validate(request(), [
            "data.input_parameter_ids" => "required|array",
            "data.input_parameter_ids.*" => "exists:parameters,id",
            "data.output_parameter_id" => "exists:parameters,id",
        ]);

        // DB::transaction(function() {
        //     $rule = Ru

        // });

        // return $data;

        return "sdsdsd";
    }

    public function delete(Rule $rule)
    {
        DB::transaction(function() use($rule) {
            $rule->inputs()->delete();
            $rule->delete();
        });

        return back()
            ->with("message-state", "success")
            ->with("message-text", __("messages.delete.success"));
    }
}
