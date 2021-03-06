<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FloorRequest extends FormRequest
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
            'floor_name'          => 'required|unique:floor,floor_name',
        ];
    }
    public function messages()
    {
        return [
            'floor_name.required' => 'Vui lòng nhập tên tầng',
            'floor_name.unique' => 'Tên tầng đã tồn tại',
        ];
    }
}
