<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variabel extends Model
{
    public $fillable = [
        "nama",
    ];

    public function parameters()
    {
        return $this->hasMany(Parameter::class);
    }
}
