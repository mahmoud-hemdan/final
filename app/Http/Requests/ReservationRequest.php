<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            "reservations_date"=>"required",
            "reservations_time"=>"required",
            "reservations_name"=>"required|min:5|max:255",
            "email"=>"required|email|min:5|max:255",
            "phone"=>"required|min:5|max:255",
        ];
    }
}
