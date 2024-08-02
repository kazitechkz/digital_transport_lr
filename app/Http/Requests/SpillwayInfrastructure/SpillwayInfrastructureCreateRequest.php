<?php

namespace App\Http\Requests\SpillwayInfrastructure;

use Illuminate\Foundation\Http\FormRequest;

class SpillwayInfrastructureCreateRequest extends FormRequest
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
            'on_axis_m' => 'required|numeric',
            'from_axis_m' => 'required|numeric',
            'is_on_the_roadway' => 'nullable',
            'is_on_the_sidewalk' => 'nullable',
            'is_on_the_lawn' => 'nullable',
            'note' => 'nullable|string',
            'street_id' => 'required|exists:streets,id',
            'side_id' => 'required|exists:sides,id',
            'well_type_id' => 'required|exists:wells_types,id',
        ];
    }
}
