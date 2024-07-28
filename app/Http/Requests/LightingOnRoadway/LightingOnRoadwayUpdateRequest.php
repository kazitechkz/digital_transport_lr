<?php

namespace App\Http\Requests\LightingOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class LightingOnRoadwayUpdateRequest extends FormRequest
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
            'lighting_target' => 'nullable|string',
            'street_id' => 'required|exists:streets,id',
            'side_id' => 'required|exists:sides,id',
        ];
    }
}
