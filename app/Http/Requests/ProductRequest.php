<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'SKU' => 'required',
            'stock' => 'required',
            'categories' => 'required',
            'description' => 'required',
        ];
        if ($this->type == 0) {
            $rules = array_merge($rules, [
                'price' => 'required',
            ]);
        }

        return $rules;
    }
}
