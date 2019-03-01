@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.error_message')


<div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="card-title">Edit Product</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('product.update',['id'=>$product->id])}}" enctype="multipart/form-data">
          {{@csrf_field()}}
            {{ method_field('PATCH')}}

          <div class="form-group ">
            <label for="inputName">Product Name</label>
            <input type="text" class="form-control"  value="{{$product->name}}" name="name">
          </div>
          <div class="form-group">
            <label> Product Description</label>
            <textarea class="form-control" name="description" >{{$product->description}}</textarea>
          </div>            
         <div class="form-group ">
            <label for="inputName">Product Prrice</label>
            <input type="number" class="form-control"  value="{{$product->price}}" name="price">
          </div>
          <div class="form-group ">
            <label for="inputName">Product Discount</label>
            <input type="number" class="form-control"  value="{{$product->discount}}" name="discount">
          </div>
          <div class="form-group ">
            <label for="inputName">Brand</label>
            <input type="number" class="form-control"  value="{{$product->discount}}" name="discount">
          </div>
          <div class="form-group ">
            <label for="inputName">Product Discount</label>
            <input type="number" class="form-control"  value="{{$product->discount}}" name="discount">
          </div>
          
          </div>
          <div class="form-group">
          <label for="inputSelect">Status</label>
           <select class="form-control" name="status">
               <option value="1">In Stock</option>
               <option value="0">Out Of Stock</option>
           </select>
          </div>  
           <div class="form-group ">
            <label for="inputName">Feature Image</label>
            <input type="file" class="form-control"  name="image">
          </div>
          <div class="form-group ">
            <label for="inputName">Product Promotion</label>
            <input type="number" class="form-control"  value="{{$product->promotion}}" name="promotion">
          </div>
          <div class="form-group ">
            <label for="inputName">Product Coupon</label>
            <input type="number" class="form-control" value="{{$product->coupon}}" name="coupon">
          </div>
              
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
         </form>
      </div>
   </div>
</div>
</form>
@endsection
@section('js')
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@append