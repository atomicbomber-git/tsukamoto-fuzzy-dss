<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class FormulaFungsi implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
            (new ExpressionLanguage())->evaluate($value, ["x" => 10]);
            return true;
        }
        catch (\Throwable $throwable) {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Formula wajib berupa ekspresi aritmatika yang: Mengandung variabel `x`. Contoh: `(x + 10) / 2`, atau berupa angka saja seperti `0`.';
    }
}
