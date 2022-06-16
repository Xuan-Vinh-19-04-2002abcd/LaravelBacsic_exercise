<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

 
class ProcessformRequest
{
    public function getAdd()
    {
        return view('formrequest');
    }
    public function postAdd(ProductRequest $request){
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
            return view('formrequest',compact('product_name', 'product_price'));
    }
    public function postAddUseValidator(Request $request)
    {
        $rules = [
            'product_name' => 'required |min:8',
            'product_price' => 'required'
        ];
        $messages = [
            'product_name.required' => 'Tên sản phẩmbắt buộc phải nhập',
            'product_name.min' => 'Tên sản phẩm bắt buộc phải nhập trên :min kí tự',
            'product_price.required' => ':Giá sản phẩm bắt buộc phải nhập'
        ];
        $request->validate($rules,$messages);
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        return view('formrequest', compact('product_name', 'product_price'));
    }
   
}
