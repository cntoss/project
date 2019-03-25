@extends('layouts.admin.index')
@section('content')
<div class="content">
  <div class="container-fluid">
  <a class="btn btn-success pull-right" href="{{route('product.edit',['id'=>$product->id])}}">Edit</a>
  <div class="panel-heading">
    <h2>Posted Data</h2>
    </div>
  <div class="panel-body">
    <div class="table-responsive">          
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td>S.N:</td> 
            <td>{{$product->id}}</td>
          </tr>
          <tr>
            <td>Name</td> 
            <td>{{$product->name}}</td>
          </tr>
          <tr>
            <td>Price:</td> 
            <td>{{$product->price}}</td>
          </tr>
          <tr>
            <td>Image:</td> 
            <td><img src="{{asset("images/$product->featured_image")}}" alt="" height="200px"></td>
          </tr>
          <tr>
            <td>Status</td>
            <td>
              @if($product->status==1)
              <span class="level level-success">In Stock</span>
              @else
              <span class="level level-info">Out Of stock</span>
              @endif
            </td>
          </tr>
          <tr>
            <td>Discount:</td>               
            <td>{{$product->discount}}</td>
          </tr>
          <tr>
            <td>Description:</td>                
            <td>{!! $product->description !!}</td>
          </tr> 
          <tr>
            <td>Brand</td>
            <td>{{$product->brandn->name}}</td>
          </tr>
           <tr>
            <td>Category</td>
            <td>{{$product->categoryn->name}}</td>
          </tr>     
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
