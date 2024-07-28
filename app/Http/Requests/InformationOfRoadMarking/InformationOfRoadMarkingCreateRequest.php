<?php

namespace App\Http\Requests\InformationOfRoadMarking;

use Illuminate\Foundation\Http\FormRequest;

class InformationOfRoadMarkingCreateRequest extends FormRequest
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
            'road_width_sm' => 'required|numeric',
            'road_length_m' => 'required|numeric',
            'road_square_m' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'road_marking_id' => 'required|exists:road_markings,id',
            'road_marking_material_id' => 'nullable|exists:road_marking_materials,id',
        ];
    }
}
