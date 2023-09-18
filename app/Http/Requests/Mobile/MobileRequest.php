<?php

namespace App\Http\Requests\Mobile;

use Illuminate\Foundation\Http\FormRequest;

class MobileRequest extends FormRequest
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
            'processor_name' => ['required', 'string', 'max:100'],
            'core_type' => ['required', 'string', 'max:100'],
            'core_count' => ['required', 'string', 'max:2'],
            'frequency' => ['required', 'string', 'max:30'],
            'video_card' => ['required', 'string', 'max:100'],
            'os' => ['required', 'string', 'max:30'],
            'ram_memory' => ['required', 'string', 'max:2'],
            'storage' => ['required', 'string', 'max:30'],
            'card_type' => ['required', 'string', 'max:30'],
            'max_card_memory' => ['required', 'string', 'max:30'],
            'sim_count' => ['required', 'string', 'max:1'],
            'sim_size' => ['required', 'string', 'max:30'],
            'standard' => ['required', 'string', 'max:30'],
            'main_mp' => ['required', 'string', 'max:30'],
            'main_features' => ['required', 'string', 'max:100'],
            'main_video' => ['required', 'string', 'max:30'],
            'front_mp' => ['required', 'string', 'max:30'],
            'front_video' => ['required', 'string', 'max:30'],
            'battery' => ['required', 'string', 'max:5'],
            'material' => ['required', 'string', 'max:30'],
            'weight' => ['required', 'string', 'max:3'],
            'dimensions' => ['required', 'string', 'max:30'],
            'connectors' => ['required', 'string', 'max:100'],
            'guarantee' => ['required', 'string', 'max:3'],
            'price' => ['required', 'string', 'max:30']
        ];
    }
}
