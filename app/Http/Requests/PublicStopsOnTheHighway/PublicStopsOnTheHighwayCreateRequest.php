<?php

namespace App\Http\Requests\PublicStopsOnTheHighway;

use Illuminate\Foundation\Http\FormRequest;

class PublicStopsOnTheHighwayCreateRequest extends FormRequest
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
            'start_m' => 'required|numeric',
            'end_m' => 'required|numeric',
            'bus_stop' => 'nullable|string',
            'pavilion_qty' => 'required|integer',
            'distance_to_the_roadway_m' => 'required|numeric',
            'have_route' => 'nullable',
            'boarding_square_m' => 'required|numeric',
            'extension_square_m' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'side_id' => 'required|exists:sides,id',
        ];
    }
}
