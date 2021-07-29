<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'Language' => 'required|string',
            'release_year' => 'required|numeric',
            'edition_number' => 'required|numeric',
            'author' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'pages' => 'required|numeric',
            'image' => 'required'
        ];
    }

    public function messages () {
        return [

            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
            'Language.required' => 'Language is required',
            'release_year.required' => 'Release Year is required',
            'edition_number.required' => 'Edition Number is required',
            'author.required' => 'Author is required',
            'publisher.required' => 'Publisher is required',
            'category.required' => 'Category is required',
            'pages.required' => 'Pages is required',
            'name.string' => 'Name must be a string',
            'description.string' => 'Description must be a string',
            'Language.string' => 'Language must be a string',
            'release_year.numeric' => 'The field of Release Year is a number',
            'edition_number.numeric' => 'The field of Edition Number is a number',
            'pages.numeric' => 'The field of Pages is a number',
            'image.required' => 'You must send an image',
        ];
    }
}
