<?php

use Illuminate\Database\Seeder;
use App\Variabel;
use App\Rule;

class RuleSeeder extends Seeder
{
    const INPUT_VARIABLE_NAME_POSITION_MAP = [
        0 => "Berat Badan",
        1 => "Istirahat" ,
        2 => "Umur" ,
    ];

    const OUTPUT_VARIABLE_NAME = "Kalori Harian";

    const RULES = [
        ["inputs" => ["Sangat Kurus", "Istirahat", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Istirahat", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Istirahat", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Istirahat", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Ringan", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Ringan", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Ringan", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Ringan", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Sedang", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Sedang", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Sedang", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Sedang", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Berat", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Berat", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Berat", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Berat", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Sangat Berat", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Sangat Berat", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Sangat Berat", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Sangat Kurus", "Sangat Berat", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Istirahat", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Istirahat", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Istirahat", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Istirahat", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Ringan", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Ringan", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Ringan", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Ringan", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Sedang", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Sedang", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Sedang", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Sedang", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Berat", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Berat", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Berat", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Berat", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Sangat Berat", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Sangat Berat", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Sangat Berat", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Kurus", "Sangat Berat", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Istirahat", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Istirahat", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Istirahat", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Istirahat", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Ringan", "Muda"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Ringan", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Ringan", "Tua"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Ringan", "Sangat Tua"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Sedang", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Sedang", "Parobaya"], "output" => "Banyak"],
        ["inputs" => ["Normal", "Sedang", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Sedang", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Berat", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Berat", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Berat", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Berat", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Sangat Berat", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Sangat Berat", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Sangat Berat", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Normal", "Sangat Berat", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Istirahat", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Istirahat", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Istirahat", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Istirahat", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Ringan", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Ringan", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Ringan", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Ringan", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Sedang", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Sedang", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Sedang", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Sedang", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Berat", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Berat", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Berat", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Berat", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Sangat Berat", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Sangat Berat", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Sangat Berat", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Gemuk", "Sangat Berat", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Istirahat", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Istirahat", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Istirahat", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Istirahat", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Ringan", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Ringan", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Ringan", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Ringan", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Sedang", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Sedang", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Sedang", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Sedang", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Berat", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Berat", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Berat", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Berat", "Sangat Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Sangat Berat", "Muda"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Sangat Berat", "Parobaya"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Sangat Berat", "Tua"], "output" => "Sedikit"],
        ["inputs" => ["Sangat Gemuk", "Sangat Berat", "Sangat Tua"], "output" => "Sedikit"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::transaction(function() {
            $variabels = Variabel::query()
                ->with("parameters")
                ->get()
                ->keyBy("nama")
                ->map(function ($variabel) {
                    $variabel->parameters =
                        $variabel->parameters
                            ->keyBy("nama");
                    return $variabel;
                });

            foreach (self::RULES as $rule) {
                $newRule = Rule::create([
                    "output_parameter_id" => $variabels[self::OUTPUT_VARIABLE_NAME]["parameters"][$rule["output"]]->id
                ]);

                foreach ($rule["inputs"] as $key => $input_name) {
                    $newRule->inputs()->create([
                        "rule_id" => $newRule->id,
                        "parameter_id" => $variabels[self::INPUT_VARIABLE_NAME_POSITION_MAP[$key]]["parameters"][$input_name]->id,
                    ]);
                }
            }
        });
    }
}
