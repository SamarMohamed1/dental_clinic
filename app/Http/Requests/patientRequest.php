<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class patientRequest extends FormRequest
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
            'name'=>'required|max:30',
            'age'=>'required|max:3',
            'address'=>'required',
            'phone'=>'unique:patients,phone|regex:/^01[0-2,5]{1}[0-9]{8}$/'
        ];
    }


    public function messages()
    {
        return[
          'name.required'=>"the name is required",
          'name.max'=>"the amximum length is 30 character",
          'age.required'=>"the age is required",
          'age.max'=>"the maximum age is 999 year",
          'address.required'=>"the address is required ",
          'phone.regex'=>"invalid phone number"
        ];
    }
}
