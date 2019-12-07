<?php

namespace App\Rules;

use App\Mobile\Yonghu;
use Illuminate\Contracts\Validation\Rule;

class Hadexistence implements Rule
{
    public $attributename;
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
        $flag = Yonghu::query()->where('id','!=',session()->get('id'))
            ->where($attribute,$value)->exists();
        if ($flag){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '您修改的数据已存在存在，请再次核实';
    }
}
