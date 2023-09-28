<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Auth::user()->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'category_id' => ['required'],
            'name' => ['required', 'string', 'max:50'],
            'code' => ['required', 'string', 'max:30'],
            'price' => ['required', 'string', 'max:30'],
            'discount' => ['required', 'string', 'max:30']
        ];
    }
}
