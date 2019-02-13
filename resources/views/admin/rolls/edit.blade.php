@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.error_message')
<div class="content">
  <div class="panel panel-default">
      <div class="panel-heading">
         <h3>Edit Role</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('rolls.update',['id'=>$roll->id])}}">
            {{@csrf_field()}}
             @method('PATCH')
         <div class="form-group">
          <label for="inputSelect">Roll Name</label>
           <select class="form-control" name="name">
               <option value="admin">Admin</option>
               <option value="seller">Seller</option>
               <option value="buyer">Buyer</option>
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
