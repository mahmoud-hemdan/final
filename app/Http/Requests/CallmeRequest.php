<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallmeRequest extends FormRequest
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
            "callme_name"=>"required|min:5|max:255",
            "callme_email"=>"required|email|min:5|max:255",
            "callme_message"=>"required|min:5|max:255",
        ];
    }
}
