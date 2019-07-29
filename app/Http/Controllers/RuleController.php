<?php

namespace App\Http\Controllers;

use App\Variabel;
use App\Rule;
use Illuminate\Support\Facades\DB;
use App\MesinInferensi;

class RuleController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

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
            "data" => [function ($attribute, $value, $fail) {
                $countQuery = Rule::query()
                    ->where("output_parameter_id", $value["output_parameter_id"]);

                foreach ($value["input_parameter_ids"] as $input_parameter_id) {
                    $countQuery->whereHas("inputs", function ($query) use ($input_parameter_id) {
                        $query->where("parameter_id", $input_parameter_id);
                    });
                }

                if ($countQuery->count() > 0) {
                    $fail("Rule ini telah ada pada daftar rule.");
                }
            }],
            "data.input_parameter_ids" => "required|array",
            "data.input_parameter_ids.*" => "exists:parameters,id",
            "data.output_parameter_id" => "exists:parameters,id",
        ]);

        DB::transaction(function() use ($data) {
            $rule = Rule::create([
                "output_parameter_id" => $data["data"]["output_parameter_id"],
            ]);

            foreach ($data["data"]["input_parameter_ids"] as $input_parameter_id) {
                $rule->inputs()->create([
                    "parameter_id" => $input_parameter_id,
                ]);
            }
        });

        return redirect()
            ->route("rule.index")
            ->with("message-state", "success")
            ->with("message-text", __("messages.create.success"));
    }

    public function edit(Rule $rule)
    {
        $rule->load([
            "inputs:id,rule_id,parameter_id",
            "inputs.parameter:id,variabel_id,nama",
            "inputs.parameter.variabel:id,nama",
            "output_parameter:id,variabel_id,nama",
        ]);
        $rule->inputs = $rule->inputs->keyBy("parameter.variabel.nama");

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

        return view("rule.edit", compact("inputVariabels", "outputVariabel", "rule"));
    }

    public function update(Rule $rule)
    {
        $data = $this->validate(request(), [
            "data.input_parameter_ids" => "required|array",
            "data.input_parameter_ids.*" => "exists:parameters,id",
            "data.output_parameter_id" => "exists:parameters,id",
        ]);

        DB::transaction(function() use ($data, $rule) {
            $rule->update([
                "output_parameter_id" => $data["data"]["output_parameter_id"],
            ]);

            $rule->inputs()->delete();
            foreach ($data["data"]["input_parameter_ids"] as $input_parameter_id) {
                $rule->inputs()->create([
                    "parameter_id" => $input_parameter_id,
                ]);
            }
        });

        return back()
            ->with("message-state", "success")
            ->with("message-text", __("messages.update.success"));
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
