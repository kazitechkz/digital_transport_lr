<?php

namespace App\Http\Requests\RoadSign;

use Illuminate\Foundation\Http\FormRequest;

class RoadSignUpdateRequest extends FormRequest
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
            'title_kk' => 'required|string',
            'title_en' => 'nullable|string',
            'normative_act' => 'required|string',
            'sign_number' => 'required|string',
        ];
    }
}
