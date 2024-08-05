<?php

namespace App\Http\Requests\StreetDocument;

use Illuminate\Foundation\Http\FormRequest;

class StreetDocumentCreateRequest extends FormRequest
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
            'street_id' => 'required|exists:streets,id',
            'document_type_id' => 'required|exists:document_types,id',
            'description' => 'nullable',
            'file_id' => 'required|exists:files,id'
        ];
    }
}
