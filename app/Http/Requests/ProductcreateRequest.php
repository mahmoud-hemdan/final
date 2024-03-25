<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductcreateRequest extends FormRequest
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
            "produsts_image"=>"required|image|max:2048",
            "produsts_name"=>"required|min:3|max:255",
            "produsts_description"=>"required|min:5|max:255",
            "produsts_prise"=>"required|max:255",
            "produsts_quantity"=>"required|max:255",
        ];
    }
}
