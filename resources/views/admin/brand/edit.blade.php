@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.error_message')
<div class="content">
  <div class="panel panel-default">
      <div class="panel-heading">
         <h3>Edit Brand</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('brand.update',['id'=>$brand->id])}}">
            {{@csrf_field()}}
            <div class="form-group ">
              <label for="inputName">Name</label>
              <input type="text" class="form-control" id="inputEmail4" value="{{$brand->name}}" name="name">
            </div>
            <div class="form-group">
            <label for="inputSelect">Status</label>
             <select class="form-control" name="status">
                 <option value="1">Active</option>
                 <option value="0">Inactive</option>
             </select>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">update</button>
            </div>
        </form>
      </div>
  </div>
</div>
@endsection 
