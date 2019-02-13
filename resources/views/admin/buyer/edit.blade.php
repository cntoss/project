@extends('layouts.admin.index')
@section('content')
 @include('layouts.admin.snippets.error_message')
 <div class="content">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="card-title">Add User</h3>
         <br>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('buyer.update',['id'=>auth()->user()->id])}}" enctype="multipart/form-data">
        {{@csrf_field()}}
        @method('PATCH')
        <div class="form-group ">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputEmail4"  name="name" value="{{$buyer->name}}">
        </div>  
        <div class="form-group">
        <label for="inputSelect">address</label>
        <input type="text" name="address" class="form-control" value="{{$buyer->address}}">
        </div>            
        <div class="form-group">
        <label for="inputFile">Image</label>
        <input type="file" name="image" class="form-control" >
        </div>
        <div class="form-group">
        <label for="inputSelect">details</label>
        <textarea name="details" class="form-control">{{$buyer->details}}</textarea>
        </div>
        <div class="form-group">
        <label for="inputSelect">phone</label>
        <input type="number" name="phone" class="form-control" value="{{$buyer->phone}}">
        </div>
        
        <div class="form-group">
         <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection