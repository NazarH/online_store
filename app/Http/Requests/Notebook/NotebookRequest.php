<?php

namespace App\Http\Requests\Notebook;

use Illuminate\Foundation\Http\FormRequest;

class NotebookRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'code' => ['required', 'string', 'max:50'],
            'diagonal' => ['required', 'string', 'max:30'],
            'type' => ['required', 'string', 'max:30'],
            'expansion' => ['required', 'string', 'max:30'],
            'refresh_rate' => ['required', 'string', 'max:3'],
            'series' => ['required', 'string', 'max:30'],
            'marking' => ['required', 'string', 'max:30'],
            'ram_memory' => ['required', 'string', 'max:3'],
            'slots' => ['required', 'string', 'max:1'],
            'ram_type' => ['required', 'string', 'max:30'],
            'ssd' => ['required', 'string', 'max:30'],
            'hdd' => ['required', 'string', 'max:30'],
            'sata' => ['required', 'string', 'max:1'],
            'video_memory' => ['required', 'string', 'max:2'],
            'video_card' => ['required', 'string', 'max:30'],
            'weight' => ['required', 'string', 'max:5'],
            'battery' => ['required', 'string', 'max:3'],
            'guarantee' => ['required', 'string', 'max:3'],
            'price' => ['required', 'string', 'max:30']
        ];
    }
}
