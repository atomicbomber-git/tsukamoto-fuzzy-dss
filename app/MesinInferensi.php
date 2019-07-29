<?php

namespace App;

class MesinInferensi
{
    public function namaMesin()
    {
        return "Diet Protein Penderita Penyakit Ginjal";
    }

    public function namaInputs()
    {
        return [
            "Kreatinin",
            "Berat Badan",
        ];
    }

    public function namaOutput()
    {
        return "Protein";
    }

    public function labelOutput()
    {
        return "Kadar Protein Harian";
    }

    public static function satuanOutput()
    {
        return "Gram";
    }
}
