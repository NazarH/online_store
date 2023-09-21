<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'surname' => ['required', 'string', 'max:50'],
            'phone_number' => ['required', 'string', 'max:50'],
            'product_code' => ['required', 'string'],
            'delivery_city' => ['required', 'string', 'max:50'],
            'delivery' => ['required', 'string', 'max:50'],
            'recipient_name' => ['required', 'string', 'max:50'],
            'recipient_surname' => ['required', 'string', 'max:50'],
            'recipient_patronymic' => ['required', 'string', 'max:50'],
            'recipient_number' => ['required', 'string', 'max:50'],
            'price' => ['required', 'string', 'max:50'],
            'street' => [],
            'house' => [],
            'flat' => [],
            'mail_address' => []
        ];
    }
}
