<?php

namespace App\Http\Requests\CommunicationWithinTheBandOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class CommunicationWithinTheBandOnRoadwayUpdateRequest extends FormRequest
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
            'location_start_km' => 'required|numeric',
            'location_start_m' => 'required|numeric',
            'location_end_km' => 'required|numeric',
            'location_end_m' => 'required|numeric',
            'distance_edge_left_m' => 'required|numeric',
            'distance_edge_right_m' => 'required|numeric',
            'place_of_intersection_km' => 'required|numeric',
            'place_of_intersection_m' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'ctype_id' => 'required|exists:communication_types,id',
        ];
    }
}
