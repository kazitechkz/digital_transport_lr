<?php

namespace App\Http\Requests\PedestrianCrossingOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class PedestrianCrossingOnRoadwayCreateRequest extends FormRequest
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
            'address_length_m' => 'required|numeric',
            'bus_stop_has_pedestrian' => 'required|boolean',
            'street_id' => 'required|exists:streets,id',
            'pc_type_id' => 'required|exists:pedestrian_crossing_types,id',
            'pc_position_id' => 'required|exists:pedestrian_crossing_positions,id',
        ];
    }
}
