<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'text' => ['required', 'string', 'max:50'],
<<<<<<< HEAD
            'banner_type' => ['required', 'string', 'max:5'],
=======
>>>>>>> bbcfcfb7764e40f704a2e8732ee6ce3046a23d2b
            'text_color' => ['required', 'string', 'max:30'],
            'back_color' => ['required', 'string', 'max:30'],
            'link' => ['required', 'string', 'max:30'],
        ];
    }
}
