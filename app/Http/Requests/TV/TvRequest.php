<?php

namespace App\Http\Requests\TV;

use Illuminate\Foundation\Http\FormRequest;

class TvRequest extends FormRequest
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
            'expansion' => ['required', 'string', 'max:50'],
            'refresh_rate' => ['required', 'string', 'max:3'],
            'contrast' => ['required', 'string', 'max:7'],
            'technologies' => ['required', 'string', 'max:100'],
            'response_time' => ['required', 'string', 'max:30'],
            'brightness' => ['required', 'string', 'max:4'],
            'ram_total' => ['required', 'string', 'max:3'],
            'storage' => ['required', 'string', 'max:30'],
            'audio_system' => ['required', 'string', 'max:30'],
            'sound_tech' => ['required', 'string', 'max:50'],
            'video_formats' => ['required', 'string', 'max:200'],
            'audio_formats' => ['required', 'string', 'max:200'],
            'img_formats' => ['required', 'string', 'max:200'],
            'os' => ['required', 'string', 'max:30'],
            'add_connect' => ['required', 'string', 'max:200'],
            'wifi' => ['required', 'string', 'max:100'],
            'bluetooth' => ['required', 'string', 'max:30'],
            'dim_with_stand' => ['required', 'string', 'max:30'],
            'dim_without_stand' => ['required', 'string', 'max:30'],
            'weight_with_stand' => ['required', 'string', 'max:30'],
            'weight_without_stand' => ['required', 'string', 'max:30'],
            'country' => ['required', 'string', 'max:30'],
            'kit' => ['required', 'string', 'max:200'],
            'guarantee' => ['required', 'string', 'max:3'],
            'price' => ['required', 'string', 'max:30'],
        ];
    }
}
