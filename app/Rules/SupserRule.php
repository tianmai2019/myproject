<?php

namespace App\Rules;

use App\Mobile\Yonghu;
use Illuminate\Contracts\Validation\Rule;

class SupserRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Yonghu::query()->where('id',$value)->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '您填写的推荐人不存在';
    }
}
