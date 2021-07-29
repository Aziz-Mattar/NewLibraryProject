<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublisherRequest extends FormRequest
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
            'name' => 'required|string',
            'country' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ];
    }

    public function messages () {
        return [
            'name.required' => 'Name is required',
            'country.required' => 'Country is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'name.string' => 'Name must be a string',
            'email.email' => 'The field of Email is a Email',
            'phone.numeric' => 'The field of Phone is a number',
        ];
    }
}
