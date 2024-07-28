<?php

namespace App\Http\Requests\RoadSignMaterial;

use Illuminate\Foundation\Http\FormRequest;

class RoadSignMaterialCreateRequest extends FormRequest
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
            'title_ru'=>"required|max:2000",
            'title_kk'=>"required|max:2000",
            'title_en'=>"max:2000"
        ];
    }
}
