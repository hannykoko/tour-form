<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tourRequest extends FormRequest
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
            'name' => 'required|alpha',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11',
            'from' => 'required|date',
            'to' => 'required|date|after:from',
            'people' => 'required|integer|between:1,20',
            'contact' => 'required',
            'file' => 'required|mimes:pdf,xlsx,jpg,png,bmp|max:10240'
        ];
    }

    public function messages()
    {
        return [
            'name.alpha' => ':attribute should not contain any special characters.',
            'email.email' => ':attribute shoud be in email format',
            'phone.numeric' => ':attribute number should contain numbers only',
            'phone.digits' => ':attribute number should have 11 digits',
            'from.required' => 'Start date should not be empty',
            'to.required' => 'End date should not be empty',
            'to.after' => 'End date must be the date after the start date',
            'people.required' => 'Number of :attribute shuld not be empty',
            'people.between' => 'Number of :attribute must be between 1 and 20',
            'contact.required' => 'Please select a way to contact you',
            'file.mimes' => ':attribute must be of type :values',
            'file.max' => ':attribute size must not be greater than 10MB',
        ];
    }
}
