<?php

namespace App\Http\Requests\RoadMarking;

use Illuminate\Foundation\Http\FormRequest;

class RoadMarkingCreateRequest extends FormRequest
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
            'title_ru' => 'required|string',
            'title_kk' => 'nullable|string',
            'title_en' => 'nullable|string',
            'line_of_number' => 'required|string',
            'normative_document' => 'nullable|string',
        ];
    }
}
