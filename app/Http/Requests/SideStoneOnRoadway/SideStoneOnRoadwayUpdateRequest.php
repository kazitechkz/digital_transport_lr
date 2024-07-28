<?php

namespace App\Http\Requests\SideStoneOnRoadway;

use Illuminate\Foundation\Http\FormRequest;

class SideStoneOnRoadwayUpdateRequest extends FormRequest
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
            'start_m' => 'required|numeric',
            'end_m' => 'required|numeric',
            'length_m' => 'required|numeric',
            'street_id' => 'required|exists:streets,id',
            'side_id' => 'required|exists:sides,id',
            'side_stone_stamp_id' => 'required|exists:side_stone_stamps,id',
            'side_stone_type_id' => 'required|exists:side_stone_types,id',
        ];
    }
}
