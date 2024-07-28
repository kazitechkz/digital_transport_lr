<?php

namespace App\Http\Requests\FencingAndGuideOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class FencingAndGuideOnRoadwayUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'order' => 'required|integer',
            'start_m' => 'required|numeric',
            'end_m' => 'required|numeric',
            'qty' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'side_id' => 'required|exists:sides,id',
            'fencing_guide_type_id' => 'required|exists:fencing_and_guide_types,id',
            'unit_id' => 'required|exists:units,id',
        ];
    }
}
