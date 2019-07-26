<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuleInput extends Model
{
    public function parameter()
    {
        return $this->belongsTo(Parameter::class);
    }
}
