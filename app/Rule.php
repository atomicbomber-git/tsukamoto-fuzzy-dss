<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    public function inputs()
    {
        return $this->hasMany(RuleInput::class);
    }

    public function output_parameter()
    {
        return $this->belongsTo(Parameter::class);
    }
}
