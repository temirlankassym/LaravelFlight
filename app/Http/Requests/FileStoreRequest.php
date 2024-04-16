<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightStoreRequest extends FormRequest
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
            'iata_code' => 'required|string|max:3',
            'departure_location' => 'required|exists:locations,id',
            'arrival_location' => 'required|exists:locations,id',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date',
        ];
    }
}
