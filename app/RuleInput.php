<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuleInput extends Model
{
    public $fillable = [
        "parameter_id"
    ];

    public function parameter()
    {
        return $this->belongsTo(Parameter::class);
    }
}
