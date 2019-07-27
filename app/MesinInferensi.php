<?php

namespace App;

class MesinInferensi
{
    public function namaMesin()
    {
        return "Diet Penderita Penyakit Ginjal";
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
        return "Diet";
    }
}
