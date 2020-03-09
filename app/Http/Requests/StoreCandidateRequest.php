<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCandidateRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'email' => 'required|email|unique:candidates,email',
            'phone_number' => 'required|numeric|unique:candidates,phone_number',
            'identify_number' => 'required|numeric|unique:candidates,identify_number',
            'password'  => 'required|confirmed',
            'priority' => 'required',
            'admission' => 'required',
            'highschool_name' => 'required',
            'province' => 'required',
            'district' => 'required',
            'ward' => 'required',
        ];
    }
}
