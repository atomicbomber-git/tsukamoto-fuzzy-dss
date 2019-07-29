<?php

namespace App\Http\Controllers;

use App\Rule;
use App\MesinInferensi;
use Illuminate\Support\Str;

class KalkulasiController extends Controller
{
    private $mesinInferensi;

    public function __construct(MesinInferensi $mesinInferensi)
    {
        $this->mesinInferensi = $mesinInferensi;
    }

    private function getInputs() {
        return collect($this->mesinInferensi->namaInputs())->mapWithKeys(function ($namaInput) {
            return [$namaInput => Str::snake($namaInput)];
        });
    }

    public function create()
    {
        $inputs = $this->getInputs();
        return view("kalkulasi.create", compact("inputs"));
    }

    public function show()
    {
        $data = $this->validate(request(), $this->getInputs()->mapWithKeys(function ($inputVarname) {
            return [$inputVarname => "required"];
        })->toArray());

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
            "Berat Badan" => $data["berat_badan"],
            "Kreatinin" => $data["kreatinin"],
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
