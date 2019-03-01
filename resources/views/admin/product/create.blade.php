@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.error_message')


<div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="card-title">Add Product</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
          {{@csrf_field()}}
          <div class="form-group ">
            <label for="inputName">Product Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter name of product" name="name">
          </div>
          <div class="form-group">
            <label> Product Description</label>
            <textarea class="form-control" name="description" placeholder="Enter description here..."></textarea>
          </div>            
         <div class="form-group ">
            <label for="inputName">Product Prrice</label>
            <input type="number" class="form-control" id="inputEmail4" placeholder="Enter product price" name="price">
          </div>
          <div class="form-group ">
            <label for="inputName">Product Discount</label>
            <input type="number" class="form-control"  placeholder="Enter discount Code" name="discount">
          </div>
           <div class="form-group">
                <label for="inputSelect">Category</label>            
                 <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                     <option value="{{$category->id}}" >{{$category->name}}</option>
                    @endforeach
                 </select>
                </div>
           <div class="form-group">
                <label for="inputSelect">Brand</label>            
                 <select class="form-control" name="category_id">
                    @foreach($brands as $brand)
                     <option value="{{$brand->id}}" >{{$brand->name}}</option>
                    @endforeach
                 </select>
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
            <input type="file" class="form-control" id="inputEmail4" placeholder="Select Product Image" name="image">
          </div>
          <div class="form-group ">
            <label for="inputName">Product Promotion</label>
            <input type="number" class="form-control"  placeholder="Enter Promotion Code" name="promotion">
          </div>
          <div class="form-group ">
            <label for="inputName">Product Coupon</label>
            <input type="number" class="form-control" placeholder="Enter product Coupon" name="coupon">
          </div>
              
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
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