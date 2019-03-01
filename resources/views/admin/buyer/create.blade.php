@extends('layouts.admin.index')
@section('content')
 @include('layouts.admin.snippets.error_message')
 <div class="content">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="card-title">Add Buyer</h3>
         <br>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('buyer.store')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
        <div class="form-group ">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Enter name of categories" name="name">
        </div>   
        <div class="form-group">
        <label for="inputFile">Image</label>
        <input type="file" name="image" class="form-control" placeholder="upload image file">
        </div>
        <div class="form-group">
        <label for="inputSelect">Details</label>
        <textarea name="details" class="form-control">Describe yourself</textarea>
        </div>
        <div class="form-group">
        <label for="inputSelect">phone</label>
        <input type="number" name="phone_no" class="form-control" placeholder="insert phone number">
        </div>
        <div class="form-group">
        <label for="inputSelect">address</label>
        <input type="text" name="address" class="form-control" placeholder="enter address" >
        </div>
        <div class="form-group">
         <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection
@section('js')
    <script>
        CKEDITOR.replace( 'details' );
    </script>
@append