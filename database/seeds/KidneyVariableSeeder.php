<?php

use Illuminate\Database\Seeder;
use App\Variabel;
class KidneyVariabelSeeder extends Seeder
{
    const VARIABELS = [
        [
            "nama" => "Berat Badan",
            "parameters" => [
                "Berat Badan 1" => [
                    ["syarat" => "x <= 50", "formula" => "1",],
                    ["syarat" => "(x >= 50) && (x <= 55)", "formula" => "(x - 50) / (55 - 50)",],
                    ["syarat" => "x >= 55", "formula" => "0",],
                ],

                "Berat Badan 2" => [
                    ["syarat" => "x < 55", "formula" => "0",],
                    ["syarat" => "(x >= 55) && (x <= 60)", "formula" => "(x - 55) / (60 - 55)",],
                    ["syarat" => "(x >= 60) && (x <= 65)", "formula" => "(65 - x) / (65 - 60)",],
                    ["syarat" => "x > 65", "formula" => "0",],
                ],

                "Berat Badan 3" => [
                    ["syarat" => "x < 60", "formula" => "0",],
                    ["syarat" => "(x >= 60) && (x < 65)", "formula" => "(x - 60) / (65 - 60)",],
                    ["syarat" => "x >= 65", "formula" => "1",],
                ],
            ]
        ],
        [
            "nama" => "Kreatinin",
            "parameters" => [
                "Dialisis" => [
                    ["syarat" => "x <= 15", "formula" => "1",],
                    ["syarat" => "(x >= 15) && (x <= 20)", "formula" => "(20 - x) / (20 - 15)",],
                    ["syarat" => "x > 20", "formula" => "0",],
                ],

                "Kronik" => [
                    ["syarat" => "x < 15", "formula" => "0",],
                    ["syarat" => "(x >= 15) && (x <= 20)", "formula" => "(x - 15) / (20 - 15)",],
                    ["syarat" => "(x >= 20) && (x <= 25)", "formula" => "(25 - x) / (25 - 20)",],
                    ["syarat" => "x > 25", "formula" => "0",],
                ],

                "Sehat" => [
                    ["syarat" => "x < 20", "formula" => "0",],
                    ["syarat" => "(x >= 20) && (x <= 25)", "formula" => "(25 - x) / (25 - 20)",],
                    ["syarat" => "x >= 25", "formula" => "1",],
                ],
            ]
        ],

        [
            "nama" => "Protein",
            "parameters" => [
                "Protein 1" => [
                    ["syarat" => "x <= 30", "formula" => "1",],
                    ["syarat" => "(x >= 30) && (x <= 32.5)", "formula" => "(32.5 - x) / (32.5 - 30)",],
                    ["syarat" => "x >= 32.5", "formula" => "0",],
                ],

                "Protein 2" => [
                    ["syarat" => "x < 32.5", "formula" => "0",],
                    ["syarat" => "(x >= 32.5) && (x <= 35)", "formula" => "(x - 32.5) / (35 - 32.5)",],
                    ["syarat" => "(x >= 35) && (x <= 37.5)", "formula" => "(37.5 - x) / (37.5 - 35)",],
                    ["syarat" => "x > 37.5", "formula" => "0",],
                ],

                "Protein 3" => [
                    ["syarat" => "x < 37.5", "formula" => "0",],
                    ["syarat" => "(x >= 37.5) && (x <= 40)", "formula" => "(40 - x) / (40 - 37.5)",],
                    ["syarat" => "x >= 40", "formula" => "1",],
                ],

                "Protein 4" => [
                    ["syarat" => "x <= 60", "formula" => "1",],
                    ["syarat" => "(x >= 60) && (x <= 62.5)", "formula" => "(62.5 - x) / (62.5 - 60)",],
                    ["syarat" => "x >= 62.5", "formula" => "0",],
                ],

                "Protein 5" => [
                    ["syarat" => "x < 62.5", "formula" => "0",],
                    ["syarat" => "(x >= 62.5) && (x <= 65)", "formula" => "(x - 62.5) / (65 - 62.5)",],
                    ["syarat" => "(x >= 65) && (x <= 67.5)", "formula" => "(67.5 - x) / (67.5 - 65)",],
                    ["syarat" => "x > 67.5", "formula" => "0",],
                ],

                "Protein 6" => [
                    ["syarat" => "x < 67.5", "formula" => "0",],
                    ["syarat" => "(x >= 67.5) && (x <= 70)", "formula" => "(x - 67.5) / (70 - 67.5)",],
                    ["syarat" => "x >= 70", "formula" => "1",],
                ],
            ]
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::VARIABELS as $variabel) {
            $newVariabel = Variabel::create(["nama" => $variabel["nama"]]);

            foreach ($variabel["parameters"] as $parameter => $fungsiParameters) {
                $newParameter = $newVariabel->parameters()
                    ->create(["nama" => $parameter]);

                foreach ($fungsiParameters as $fungsiParameter) {
                    $newParameter->fungsi_parameters()
                        ->create($fungsiParameter);
                }
            }
        }
    }
}
