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
        $guess_value = 0;
        $step = $initial_step;
        do {
            $current_distance = abs($this->evaluasiNilai(["x" => $guess_value]) - $nilai);
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
