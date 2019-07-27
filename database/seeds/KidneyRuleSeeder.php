<?php

use Illuminate\Database\Seeder;
use App\Variabel;
use App\Rule;

class KidneyRuleSeeder extends Seeder
{
    const INPUT_VARIABLE_NAME_POSITION_MAP = [
        0 => "Berat Badan",
        1 => "Kreatinin" ,
    ];

    const OUTPUT_VARIABLE_NAME = "Diet";

    const RULES = [
        ["inputs" => ["Berat Badan 1", "Dialisis",], "output" => "Diet 1"],
        ["inputs" => ["Berat Badan 2", "Dialisis",], "output" => "Diet 2"],
        ["inputs" => ["Berat Badan 3", "Dialisis",], "output" => "Diet 3"],
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
