<?php

use App\MesinInferensi;
use App\Saran;
use App\Variabel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);
        $mesinInferensi = app(MesinInferensi::class);

        DB::transaction(function() use($faker, $mesinInferensi) {
            $variabelId = Variabel::query()
                ->select("id")
                ->where("nama", $mesinInferensi->namaOutput())
                ->value("id");

            Saran::create([
                "variabel_id" => $variabelId,
                "batas_bawah" => 10,
                "batas_atas" => 20,
                "konten" => $faker->realText(500),
            ]);

            Saran::create([
                "variabel_id" => $variabelId,
                "batas_bawah" => 21,
                "batas_atas" => 50,
                "konten" => $faker->realText(500),
            ]);
        });
    }
}
