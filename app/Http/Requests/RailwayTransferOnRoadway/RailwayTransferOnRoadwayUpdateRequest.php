<?php

namespace App\Http\Requests\RailwayTransferOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class RailwayTransferOnRoadwayUpdateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'order' => 'required|integer',
            'location_m' => 'required|numeric',
            'location_km' => 'required|numeric',
            'path_qty' => 'required|numeric',
            'visible_distance_length' => 'required|integer',
            'street_id' => 'required|exists:streets,id',
            'barrier_type_id' => 'required|exists:barrier_types,id',
            'floor_condition_id' => 'required|exists:flooring_conditions,id',
        ];
    }
}
