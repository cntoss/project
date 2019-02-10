@extends('layouts.admin.index')
@section('content')
<div class="content">
  <a class="btn btn-success pull-right" href="{{route('product.create')}}" >Add New product</a>
  <h2>Posted Data</h2>
  <div class="table-responsive">          
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.N</th>
          <th>Name</th>
          <th>Price</th>
          <th>Image</th>
          <th>Status</th>
          <th>Discount</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @if($products->count()>0)
            @foreach($products as $product)
               <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><img src="{{asset("images/$product->image")}}" alt="" height="40px"></td>
                <td>
                  @if($product->status==1)
                  <span class="level level-success">Active</span>
                  @else
                  <span class="level level-info">Inactive</span>
                  @endif
                </td>
                <td>{{$product->discount}}</td>
                <td>{{$product->description}}</td>
                <td>
                  <a class="btn btn-primary" href="{{route('product.edit',['id'=>$product->id])}}">Edit</a>
                  <a class="btn btn-danger" href="{{route('product.destroy',['id'=>$product->id])}}">Delete</a>
                </td>
              </tr>
            @endforeach
           @else
             <tr>
             <td colspan="7">NO product available</span></td>
             </tr>
           @endif
      </tbody>
    </table>
  </div>
</div>
@endsection
