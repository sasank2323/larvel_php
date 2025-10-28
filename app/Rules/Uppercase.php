<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //php artisan make:rule Uppercase
        if(strtoupper($value) !== $value){
            $fail('The :attribute must be uppercase letters.');
        }
        // here attribute is field name and value is field value in css and html form
        // for example if field name is username and value is john then
        // $attribute = username and $value = john
        $attribute = $attribute;
        $value = $value;
        echo "Attribute: ".$attribute." Value: ".$value;

    }
}
