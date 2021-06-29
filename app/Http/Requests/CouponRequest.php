<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'discount' => 'required',
            'status' => 'required',
            'min_amount' => 'required'
        ];
        /*         if ($this->type == 'fixed') {
            $rules = array_merge($rules, [
                'value' => 'required'
            ]);
        } else {
            $rules = array_merge($rules, [
                'percent_off' => 'required'
            ]);
        } */

        return  $rules;
    }
}
