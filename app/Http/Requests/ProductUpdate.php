<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdate extends FormRequest
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
        return [
            "produsts_image"=>"image|max:2048",
            "produsts_name"=>"min:5|max:255",
            "produsts_description"=>"min:5|max:255",
            "produsts_prise"=>"max:255",
            "produsts_quantity"=>"max:255",
        ];
    }
}
