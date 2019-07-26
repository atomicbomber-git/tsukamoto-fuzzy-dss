<?php

use Illuminate\Database\Seeder;
use App\Variabel;
class VariabelSeeder extends Seeder
{
    const VARIABELS = [
        [
            "nama" => "Umur",
            "parameters" => [
                "Muda" => [
                    ["syarat" => "x < 25", "formula" => "1",],
                    ["syarat" => "25 <= x <= 40", "formula" => "(40 - x) / (40 - 25)",],
                    ["syarat" => "x > 40", "formula" => "0"]
                ],
                "Parobaya" => [
                    ["syarat" => "x < 35", "formula" => "0"],
                    ["syarat" => "35 < x <= 40", "formula" => "(x - 35) / (40 - 35)",],
                    ["syarat" => "40 < x <= 60", "formula" => "(60 - x) / (60 - 40)",],
                    ["syarat" => "x > 160", "formula" => "0"],
                ],
                "Tua" => [
                    ["syarat" => "x < 35", "formula" => "0"],
                    ["syarat" => "55 < x <= 60", "formula" => "(x - 55) / (60 - 55)",],
                    ["syarat" => "60 < x <= 70", "formula" => "(70 - x) / (70 - 60)",],
                    ["syarat" => "x > 70", "formula" => "0"],
                ],
                "Sangat Tua" => [
                    ["syarat" => "x < 65", "formula" => "0",],
                    ["syarat" => "65 <= x <= 70", "formula" => "(x - 65) / (70 - 65)",],
                    ["syarat" => "x > 70", "formula" => "1"]
                ],
            ]
        ],
        [
            "nama" => "Berat Badan",
            "parameters" => [
                "Sangat Kurus" => [
                    ["syarat" => "x <= 16.5", "formula" => "0",],
                    ["syarat" => "16.5 < x < 17.5", "formula" => "(x - 16.5) / (17 - 16.5)",],
                    ["syarat" => "x >= 17", "formula" => "0"]
                ],
                "Kurus" => [
                    ["syarat" => "x <= 16.5", "formula" => "0"],
                    ["syarat" => "16.5 < x <= 17", "formula" => "(x - 16.5) / (17 - 16.5)",],
                    ["syarat" => "17 < x <= 18", "formula" => "1",],
                    ["syarat" => "18 < x <= 18.5", "formula" => "(18.5 - x) / (18.5 - 18)"],
                    ["syarat" => "x > 18.5", "formula" => "0"],
                ],
                "Normal" => [
                    ["syarat" => "x <= 18", "formula" => "0"],
                    ["syarat" => "18 < x <= 17", "formula" => "(x - 18) / (18.5 - 18)",],
                    ["syarat" => "18.5 < x <= 24.5", "formula" => "1",],
                    ["syarat" => "24.5 < x <= 25", "formula" => "(25 - x) / (25 - 24.5)"],
                    ["syarat" => "x > 25", "formula" => "0"],
                ],
                "Gemuk" => [
                    ["syarat" => "x <= 24.5", "formula" => "0"],
                    ["syarat" => "24.5 < x <= 25", "formula" => "(x - 24.5) / (25 - 24.5)",],
                    ["syarat" => "25 < x <= 26.5", "formula" => "1",],
                    ["syarat" => "26.5 < x <= 27", "formula" => "(26.5 - x) / (27 - 26.5)"],
                    ["syarat" => "x > 27", "formula" => "0"],
                ],
                "Sangat Gemuk" => [
                    ["syarat" => "x <= 26.5", "formula" => "0",],
                    ["syarat" => "26.5 < x < 27", "formula" => "(x - 26.5) / (27 - 26.5)",],
                    ["syarat" => "x >= 27", "formula" => "1"]
                ],
            ]
        ],
        [
            "nama" => "Istirahat",
            "parameters" => [
                "Istirahat" => [
                    ["syarat" => "x <= 2", "formula" => "0",],
                    ["syarat" => "2 < x < 4", "formula" => "(4 - x) / (4 - 2)",],
                    ["syarat" => "x >= 4", "formula" => "0"]
                ],
                "Ringan" => [
                    ["syarat" => "x <= 3", "formula" => "0"],
                    ["syarat" => "3 < x <= 4", "formula" => "(x - 3) / (4 - 3)",],
                    ["syarat" => "4 < x <= 5", "formula" => "(5 - x) / (5 - 4)"],
                    ["syarat" => "x > 5", "formula" => "0"],
                ],
                "Sedang" => [
                    ["syarat" => "x <= 4", "formula" => "0"],
                    ["syarat" => "3 < x <= 4", "formula" => "(x - 3) / (4 - 3)",],
                    ["syarat" => "4 < x <= 5", "formula" => "(5 - x) / (5 - 4)"],
                    ["syarat" => "x > 8", "formula" => "0"],
                ],
                "Berat" => [
                    ["syarat" => "x <= 7", "formula" => "0"],
                    ["syarat" => "7 < x <= 8", "formula" => "(x - 7) / (8 - 7)",],
                    ["syarat" => "8 < x <= 9", "formula" => "(9 - x) / (9 - 8)"],
                    ["syarat" => "x > 9", "formula" => "0"],
                ],
                "Sangat Berat" => [
                    ["syarat" => "x <= 8", "formula" => "0",],
                    ["syarat" => "8 < x < 10", "formula" => "(x - 8) / (10 - 8)",],
                    ["syarat" => "x >= 10", "formula" => "1"]
                ],
            ]
        ],
        [
            "nama" => "Kalori Harian",
            "parameters" => [
                "Sedikit" => [
                    ["syarat" => "x < 1300", "formula" => "1"],
                    ["syarat" => "1300 <= x <= 2500", "formula" => "(2500 - x) / (2500 - 1300)"],
                    ["syarat" => "x > 2500", "formula" => "0"],
                ],

                "Banyak" => [
                    ["syarat" => "x < 1300", "formula" => "0"],
                    ["syarat" => "1300 <= x <= 2500", "formula" => "(x - 1300) / (2500 - 1300)"],
                    ["syarat" => "x > 2500", "formula" => "1"],
                ],
            ],
        ]
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
