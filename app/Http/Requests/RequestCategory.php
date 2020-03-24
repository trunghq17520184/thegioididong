<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
            //
            'categoryName' => 'required|unique:categories,c_name,' . $this->id,
        ];
    }
    public function messages()
    {
        return [
            'categoryName.required' => 'Tên danh mục là trường bắt buộc',
            'categoryName.unique' => 'Danh mục đã tồn tại',
        ];
    }
}
