<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    public function variabel()
    {
        return $this->belongsTo(Parameter::class);
    }

    public function fungsi_parameters()
    {
        return $this->hasMany(FungsiParameter::class);
    }

    public function evaluasiNilai($arguments)
    {
        $this->loadMissing("fungsi_parameters:id,parameter_id,syarat,formula");

        $value = null;
        foreach ($this->fungsi_parameters as $fungsi_parameter) {
            if ($fungsi_parameter->periksaRange($arguments)) {
                $value = $fungsi_parameter->evaluasiNilai($arguments);
                break;
            }
        }

        if ($value === null) {
            throw new \Exception("No matching FungsiParameter syarat found.");
        }

        return $value;
    }
}
