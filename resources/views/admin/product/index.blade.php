@extends('layouts.admin.index')
@section('content')
  <br>
  <a class="btn btn-success pull-right" href="{{route('product.create')}}" >Add New product</a>
  <br>
<div class="content">
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2>Current Product</h2>
          </div>
        <div class="panel-body">
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
                      <td><img src="{{asset("images/$product->featured_image")}}" alt="" height="40px"></td>
                      <td>
                        @if($product->status==1)
                        <span class="level level-success">In Stock</span>
                        @else
                        <span class="level level-info">Out Stock</span>
                        @endif
                      </td>
                      <td>{{$product->discount}}</td>
                      <td>{!! str_limit($product->description,100) !!}</td>
                      <td>
                        <a class="btn btn-primary" href="{{route('product.edit',['id'=>$product->id])}}">Edit</a>
                        <a class="btn btn-success" href="{{route('product.show',['id'=>$product->id])}}">Show</a>
                         <form style="display: none;" id="delete-form-{{$product->id}}"  action="{{route('product.destroy',['product'=>$product->id])}}" method="post">
                              @csrf
                              {{ method_field('delete') }}                                    
                          </form>
                          <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$product->id}}').submit();" href="{{route('product.destroy',['product'=>$product->id])}}" class="btn btn-danger">Delete</a>                </td>
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
      </div>
    </div>
</div>
@endsection
