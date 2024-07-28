<?php

namespace App\Http\Requests\ArchitecturalFormOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class ArchitecturalFormOnRoadwayCreateRequest extends FormRequest
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
            'square_m' => 'required|numeric',
            'perim_m' => 'required|numeric',
            'feature' => 'nullable|string',
            'street_id' => 'required|exists:streets,id',
            'side_id' => 'required|exists:sides,id',
            'architectural_form_id' => 'required|exists:architectural_forms,id',
        ];
    }
}
