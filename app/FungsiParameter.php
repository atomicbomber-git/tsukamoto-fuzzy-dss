<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class FungsiParameter extends Model
{
    public function periksaRange($arguments)
    {
        return (new ExpressionLanguage())
            ->evaluate($this->syarat, $arguments);
    }

    public function evaluasiNilai($arguments)
    {
        return (new ExpressionLanguage())
            ->evaluate($this->formula, $arguments);
    }
}
