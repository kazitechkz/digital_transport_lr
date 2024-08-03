<?php

namespace App\Http\Requests\IntersectionAndJunctionOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class IntersectionAndJunctionOnRoadwayCreateRequest extends FormRequest
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
            'order' => 'required|integer',
            'location_right_km' => 'required|numeric',
            'location_right_m' => 'required|numeric',
            'location_left_km' => 'required|numeric',
            'location_left_m' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'coverage_type_id' => 'required|exists:coverage_types,id',
        ];
    }
}
