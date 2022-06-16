<form action="/" method="POST"> 
<label for="">Nhập tên sản phẩm</label>
<br> 
<input type="text" name="product_name" placeholder="Nhập tên sản phẩm">
<br>
@error('product_name')
<span style="color: red"> {{$message}}</span>
@enderror
<br> 
<label for="">Nhập giá sản phẩm</label>
<br> 
<input type="text" name="product_price" placeholder="Nhập giá sản phẩm">
<br>
@error('product_price')
<span style="color: red"> {{$message}}</span>
@enderror
<br>
<button type="submit"> Thêm mới</button>
@csrf
</form>          
@if (isset($product_name) && isset($product_price) )
    <p>Name_product: {{$product_name}}</p>
    <p>Price_product: {{$product_price}}</p>
@endif

{{-- @php
    dd($errors -> all())
@endphp --}}