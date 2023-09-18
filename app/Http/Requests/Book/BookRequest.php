<?php

namespace App\Http\Requests\Book;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:200'],
            'code' => ['required', 'string', 'max:100'],
            'author' => ['required', 'string', 'max:100'],
            'publishing' => ['required', 'string', 'max:100'],
            'year' => ['required', 'string', 'max:4'],
            'country_man' => ['required', 'string', 'max:30'],
            'country_reg' => ['required', 'string', 'max:30'],
            'pages_numb' => ['required', 'string', 'max:5'],
            'weight' => ['required', 'string', 'max:30'],
            'format' => ['required', 'string', 'max:30'],
            'price' => ['required', 'string', 'max:30']
        ];
    }
}
