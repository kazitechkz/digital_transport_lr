<?php

namespace App\Http\Requests\LandscapingOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class LandscapingOnRoadwayUpdateRequest extends FormRequest
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
            'start_location_right_km' => 'required|numeric',
            'start_location_right_m' => 'required|numeric',
            'end_location_right_km' => 'required|numeric',
            'end_location_right_m' => 'required|numeric',
            'start_location_left_km' => 'required|numeric',
            'start_location_left_m' => 'required|numeric',
            'end_location_left_km' => 'required|numeric',
            'end_location_left_m' => 'required|numeric',
            'two_row_m' => 'required|numeric',
            'three_row_m' => 'required|numeric',
            'four_row_m' => 'required|numeric',
            'five_row_m' => 'required|numeric',
            'six_row_m' => 'required|numeric',
            'eight_row_m' => 'required|numeric',
            'total_length_m' => 'required|numeric',
            'decorative_length_km' => 'required|numeric',
            'length_to_edge_m' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'landscaping_condition_id' => 'required|exists:landscaping_conditions,id',
        ];
    }
}
