<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class FungsiParameter extends Model
{
    public $fillable = [
        "syarat", "formula"
    ];

    public function parameter()
    {
        return $this->belongsTo(Parameter::class);
    }

    public function periksaSyarat($arguments)
    {
        return (new ExpressionLanguage())
            ->evaluate($this->syarat, $arguments);
    }

    public function evaluasiNilai($arguments)
    {
        return (new ExpressionLanguage())
            ->evaluate($this->formula, $arguments);
    }

    public function selesaikanPersamaan($nilai, $initial_step=1)
    {
        if ($nilai < 0 || $nilai > 1) {
            throw new \Exception("Rentang nilai wajib berada diantara `0` dan `1`.");
        }

        try {
            /*
                Try evaluating the formula without any argument to see if
                it's a formula that doesn't contain any variable
                like "0" or "1."
            */
            $value = $this->evaluasiNilai([]);
            throw new \Exception("Formula `$this->formula` tidak mengandung variabel `x`.", 122);
        }
        catch (\Exception $exception) {
            if ($exception->getCode() === 122) {
                throw $exception;
            }
        }

        $guess_value = 0;
        $step = $initial_step;
        do {
            $current_distance = abs($this->evaluasiNilai(["x" => $guess_value]) - $nilai);

            if ($current_distance === 0) {
                return $guess_value;
            };

            $new_distance = abs($this->evaluasiNilai(["x" => ($guess_value + $step)]) - $nilai);

            if ($new_distance < $current_distance) {
                $step *= 1.9;
                $guess_value += $step;
            }
            else if ($new_distance > $current_distance) {
                $step /= 1.9;
                $guess_value -= $step;
            }
            else {
                throw new \Exception("Guessing values for x doesn't work.");
            }

        } while ($new_distance > 0.0000000000001);

        return round($guess_value, 4);
    }
}
