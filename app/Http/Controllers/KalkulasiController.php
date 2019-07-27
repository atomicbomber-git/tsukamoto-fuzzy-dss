<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variabel;
use App\Rule;

class KalkulasiController extends Controller
{
    public function create()
    {
        return view("kalkulasi.create");
    }

    public function show()
    {
        $data = $this->validate(request(), [
            "umur" => "required|numeric|gte:1,lte:200",
            "berat_badan" => "required|numeric|gte:1,lte:1000",
            "tinggi_badan" => "required|numeric|gte:1,lte:1000",
            "aktivitas" => "required|numeric|gte:1,lte:20",
        ]);

        $indeks_massa_tubuh = pow($data["berat_badan"] / $data["tinggi_badan"], 2);

        $rules = Rule::query()
            ->select("id", "output_parameter_id")
            ->with([
                "inputs:id,rule_id,parameter_id",
                "output_parameter:id,nama",
                "output_parameter.fungsi_parameters:id,parameter_id,syarat,formula",
                "inputs.parameter:id,nama,variabel_id",
                "inputs.parameter.variabel:id,nama",
                "inputs.parameter.fungsi_parameters:id,parameter_id,syarat,formula",
            ])
            ->get()
            ->map(function ($rule) {
                $rule->inputs = $rule->inputs->keyBy("parameter.nama");
                return $rule;
            });

        $input_values = [
            "Umur" => $data["umur"],
            "Berat Badan" => $indeks_massa_tubuh,
            "Istirahat" => $data["aktivitas"],
        ];

        $data = [];

        foreach ($rules as $rule) {
            $temp = [];
            foreach ($rule->inputs as $input) {
                $temp[$input->parameter->variabel->nama] =
                    $input->parameter->evaluasiNilai([
                        "x" => $input_values[$input->parameter->variabel->nama]
                    ]);
            }

            $data[] = [
                "inputs" => $temp,
                "alpha" => min($temp),
            ];
            // foreach ($input_values as $key => $value) {

            // }
        }


        // return $rules->take(4);

        // return view("welcome");
        return $data;
    }
}
