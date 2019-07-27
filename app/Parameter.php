<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    public function variabel()
    {
        return $this->belongsTo(Variabel::class);
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
            if ($fungsi_parameter->periksaSyarat(["x" => 55])) {
                $value = $fungsi_parameter->evaluasiNilai($arguments);
                break;
            }
        }

        if ($value === null) {
            throw new \Exception("No matching FungsiParameter syarat found.");
        }

        return $value;
    }

    public function selesaikanPersamaan($nilai)
    {
        $this->loadMissing("fungsi_parameters:id,parameter_id,syarat,formula");

        $value = null;
        foreach ($this->fungsi_parameters as $fungsi_parameter) {
            try {
                $value = $fungsi_parameter->selesaikanPersamaan($nilai);
            } catch (\Throwable $exception) {
                /* Ignore exceptions */
            }
        }

        if ($value === null) {
            throw new \Exception("Failed to solve equation.");
        }

        return $value;
    }
}
