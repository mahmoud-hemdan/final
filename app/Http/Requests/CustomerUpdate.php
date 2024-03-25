<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdate extends FormRequest
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
            
            "customer_name"=>"min:5|max:255",
            "email"=>"email|min:5|max:255",
            "phone"=>"min:5|max:255",
            "city"=>"|min:5|max:255",
        ];
    }
}
