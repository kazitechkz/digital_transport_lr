<?php

namespace App\Http\Requests\SidewalkOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class SidewalkOnRoadwayCreateRequest extends FormRequest
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
            'length_m' => 'required|numeric',
            'width_start_m' => 'required|numeric',
            'width_end_m' => 'required|numeric',
            'square_m' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'side_id' => 'required|exists:sides,id',
            'coverage_type_id' => 'required|exists:coverage_types,id',
            'position_id' => 'required|exists:positions,id',
        ];
    }
}
