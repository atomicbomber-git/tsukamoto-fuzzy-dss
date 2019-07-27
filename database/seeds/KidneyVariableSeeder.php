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
                    ["syarat" => "x <= 55", "formula" => "1",],
                    ["syarat" => "x > 55", "formula" => "0",],
                ],

                "Berat Badan 2" => [
                    ["syarat" => "x < 55", "formula" => "0",],
                    ["syarat" => "(x >= 55) || (x <= 62.5)", "formula" => "1",],
                    ["syarat" => "x > 62.5", "formula" => "0",],
                ],

                "Berat Badan 3" => [
                    ["syarat" => "x < 62.5", "formula" => "0",],
                    ["syarat" => "x >= 62.5", "formula" => "1",],
                ],
            ]
        ],
        [
            "nama" => "Kreatinin",
            "parameters" => [
                "Dialisis" => [
                    ["syarat" => "x <= 15", "formula" => "1",],
                    ["syarat" => "x > 15", "formula" => "0",],
                ],

                "Kronik" => [
                    ["syarat" => "x < 15", "formula" => "0",],
                    ["syarat" => "(x >= 15) && (x <= 25)", "formula" => "1",],
                    ["syarat" => "x > 25", "formula" => "0",],
                ],

                "Sehat" => [
                    ["syarat" => "x < 25", "formula" => "0",],
                    ["syarat" => "x >= 25", "formula" => "1",],
                ],
            ]
        ],

        [
            "nama" => "Diet",
            "parameters" => [
                "Diet 1" => [
                    ["syarat" => "x <= 32.5", "formula" => "1",],
                    ["syarat" => "x > 32.5", "formula" => "0",],
                ],

                "Diet 2" => [
                    ["syarat" => "x < 32.5", "formula" => "0",],
                    ["syarat" => "(x >= 32.5) && (x <= 37.5)", "formula" => "1",],
                    ["syarat" => "x > 37.5", "formula" => "0",],
                ],

                "Diet 3" => [
                    ["syarat" => "x < 37.5", "formula" => "0",],
                    ["syarat" => "x >= 37.5", "formula" => "1",],
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
