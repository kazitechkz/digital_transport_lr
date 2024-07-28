<?php

namespace App\Http\Requests\WidthRoadwayOnHighway;

use Illuminate\Foundation\Http\FormRequest;

class WidthRoadwayOnHighwayUpdateRequest extends FormRequest
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
            'start_of_region_km' => 'required|numeric',
            'start_of_region_m' => 'required|numeric',
            'end_of_region_km' => 'required|numeric',
            'end_of_region_m' => 'required|numeric',
            'reverse_width_m' => 'required|numeric',
            'both_width_m' => 'required|numeric',
            'straight_width_m' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
        ];
    }
}
