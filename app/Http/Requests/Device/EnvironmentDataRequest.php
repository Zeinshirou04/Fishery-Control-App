<?php

namespace App\Http\Requests\Device;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class EnvironmentDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'water_ph' => ['required', 'numeric', 'between:0,14'],
            'water_temp' => ['required', 'numeric'],
            'water_humid' => ['required', 'numeric', 'between:0,100'],
            'device_id' => ['required', 'uuid']
        ];
    }
}
