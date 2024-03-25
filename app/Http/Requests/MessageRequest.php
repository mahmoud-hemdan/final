<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
    public function rules()
    {
        return [
           "name"=>"required|min:5|max:255",
           "email"=>"required|email|min:5|max:255",
           "message"=>"required|min:7|max:255",
        ];
    }
}
