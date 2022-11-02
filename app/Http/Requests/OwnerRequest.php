<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
        'Name'=>['required','string','unique:owners'],
        'Facebook_Account'=>['nullable','string','unique:owners'],
        'Twitter_Account'=>['nullable','string','unique:owners'],
        'Linkedln'=>['nullable','string','unique:owners'],
        'Phone_Number'=>['required','string','max:11','min:11','unique:owners'],
        'Gmail_Account'=>['required','unique:owners','email'],
        'Office_Address'=>['required'],
            
        ];
        
    }
}
