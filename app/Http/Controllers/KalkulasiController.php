<?php

namespace App\Http\Controllers;

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

        $indeks_massa_tubuh = $data["berat_badan"] / pow($data["tinggi_badan"] / 100, 2);

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
            ->orderBy("id")
            ->get()
            ->map(function ($rule) {
                $rule->inputs = $rule->inputs->keyBy("parameter.nama");
                return $rule;
            });

        $input_values = [
            "Berat Badan" => $indeks_massa_tubuh,
            "Istirahat" => floatval($data["aktivitas"]),
            "Umur" => floatval($data["umur"]),
        ];

        $hasil_kalkulasis = collect();

        foreach ($rules as $rule) {
            $temp = [];
            foreach ($rule->inputs as $input) {
                $temp[$input->parameter->variabel->nama] =
                    $input->parameter->evaluasiNilai([
                        "x" => $input_values[$input->parameter->variabel->nama]
                    ]);
            }

            $alfa_predikat = min($temp);
            $zi = $rule->output_parameter->selesaikanPersamaan($alfa_predikat);

            $hasil_kalkulasis[] = [
                "inputs" => $temp,
                "alfa_predikat" => $alfa_predikat,
                "zi" => $zi,
                "alfa_predikat_kali_zi" => $alfa_predikat * $zi,
            ];
        }

        $total_alfa_predikat = $hasil_kalkulasis->sum("alfa_predikat");
        $total_alfa_predikat_kali_zi = $hasil_kalkulasis->sum("alfa_predikat_kali_zi");
        $hasil = $total_alfa_predikat_kali_zi / $total_alfa_predikat;

        return view("kalkulasi.show", compact("hasil_kalkulasis", "input_values", "total_alfa_predikat", "total_alfa_predikat_kali_zi", "hasil"));
    }
}
