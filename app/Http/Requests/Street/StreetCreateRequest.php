<?php

namespace App\Http\Requests\Street;

use Illuminate\Foundation\Http\FormRequest;

class StreetCreateRequest extends FormRequest
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
            'geo_position' => 'required|json',
            'geo_color' => 'nullable|string',
            'is_active' => 'required|boolean',
        ];
    }
}
