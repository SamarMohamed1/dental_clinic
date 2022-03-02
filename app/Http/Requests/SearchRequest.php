<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'phone'=>'regex:/^01[0-2,5]{1}[0-9]{8}$/'
        ];
    }

    public function messages()
    {
        return [
            'phone.regex'=>'please enter valid phone number'
        ];
    }
}
