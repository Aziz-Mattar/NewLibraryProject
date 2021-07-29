<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'description' => 'required|string',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'image' => 'required'
        ];
    }

    public function messages () {
        return [

            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'date_of_birth.required' => 'Date Of Birth is required',
            'nationality.required' => 'Nationality Year is required',
            'name.string' => 'Name must be a string',
            'description.string' => 'Description must be a string',
            'image.required' => 'You must send an image',
        ];
    }
}
