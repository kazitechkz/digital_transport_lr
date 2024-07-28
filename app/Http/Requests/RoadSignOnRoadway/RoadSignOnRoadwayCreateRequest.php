<?php

namespace App\Http\Requests\RoadSignOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class RoadSignOnRoadwayCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'order' => 'required|integer',
            'location_km' => 'required|numeric',
            'location_m' => 'required|numeric',
            'has_left_adjunctions_location' => 'required|boolean',
            'has_left_direct_location' => 'required|boolean',
            'has_left_reverse_location' => 'required|boolean',
            'has_right_adjunctions_location' => 'required|boolean',
            'has_right_direct_location' => 'required|boolean',
            'has_right_reverse_location' => 'required|boolean',
            'has_berm' => 'required|boolean',
            'street_id' => 'required|exists:streets,id',
            'road_sign_id' => 'required|exists:road_signs,id',
            'road_sign_condition_id' => 'required|exists:road_sign_conditions,id',
        ];
    }
}
