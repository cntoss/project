@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.error_message')
<div class="content">
<div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="card-title">Add roll</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('roles.store')}}">
          {{@csrf_field()}}
         
         <div class="form-group">
          <label for="inputSelect">Roll Name</label>
           <select class="form-control" name="name">
               <option value="admin">Admin</option>
               <option value="seller">Seller</option>
               <option value="buyer">Buyer</option>
           </select>
          </div>              
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
         </form>
      </div>
   </div>
</div>
</div>
@endsection