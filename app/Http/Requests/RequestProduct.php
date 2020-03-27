<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
            'pro_name' => 'required|unique:products,pro_name,' . $this->id,
            'pro_slug' => 'required|unique:products,pro_slug,' . $this->id,
            'pro_price' => 'min:0',
        ];
    }
    public function messages()
    {
        return [
            'pro_name.required' => 'Tên sản phẩm là trường bắt buộc',
            'pro_name.unique' => 'Tên sản phẩm đã tồn tại',
            'pro_slug.required' => 'Đường dẫn là trường bắt buộc',
            'pro_slug.unique' => 'Đường dẫn đã tồn tại',
            'pro_price.min'=>'Giá sản phẩm phải lớn hơn 0'
        ];
    }
}
