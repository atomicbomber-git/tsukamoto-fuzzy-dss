<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;

class SyaratFungsi implements Rule
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
            return is_bool((new ExpressionLanguage())->evaluate($value, ["x" => 10]));
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
        return 'Syarat fungsi wajib berupa ekspresi logika boolean yang mengandung variabel `x` seperti `x + 10 > 5` atau `x == 10`.';
    }
}
