<?php

namespace App\Http\Requests\LengthOfTheRoadSurface;

use Illuminate\Foundation\Http\FormRequest;

class LengthOfTheRoadSurfaceUpdateRequest extends FormRequest
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
            'start' => 'required|numeric',
            'end' => 'required|numeric',
            'total_length' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'coverage_type_id' => 'required|exists:coverage_types,id',
        ];
    }
}
