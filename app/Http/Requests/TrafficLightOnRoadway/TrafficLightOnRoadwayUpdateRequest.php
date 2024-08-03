<?php

namespace App\Http\Requests\TrafficLightOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class TrafficLightOnRoadwayUpdateRequest extends FormRequest
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
            'on_axis' => 'required|numeric',
            'have_controller' => 'nullable',
            'traffic_light_qty' => 'required|integer',
            'pedestrian_traffic_light_qty' => 'required|integer',
            'rotary_section_qty' => 'required|integer',
            'have_column' => 'nullable',
            'street_id' => 'required|exists:streets,id',
            'side_id' => 'required|exists:sides,id',
            'traffic_light_type_id' => 'required|exists:type_traffic_lights,id',
        ];
    }
}
