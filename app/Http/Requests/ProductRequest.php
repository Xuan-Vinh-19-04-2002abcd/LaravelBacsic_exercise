<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required |min:8',
            'product_price' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'product_name.required' => ':attribute bắt buộc phải nhập',
            'product_name.min' => ':attribute bắt buộc phải nhập trên :min kí tự',
            'product_price.required' => ':attribute bắt buộc phải nhập'
        ];
    }
    public function attributes()
    {
        return [
            'product_name' =>"Tên sản phẩm",
            'product_price' => "Giá sản phẩm",
        ];
    }

}
