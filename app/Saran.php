<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    // public $table = "menu_diets";

    public $fillable = [
        "variabel_id",
        "batas_atas",
        "batas_bawah",
        "konten",
    ];

    public static function getFromValue($value)
    {
        return Saran::query()
            ->select("konten")
            ->where("batas_bawah", "<=", $value)
            ->where("batas_atas", ">=", $value)
            ->value("konten");
    }
}
