@extends('layouts.admin.index')
@section('content')

@include('layouts.admin.snippets.session_message')

<div class="content">
<span class="pull-left clickable panel-toggle"><a class="btn btn-success" href="{{route('brand.create')}}">create new</a></span>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Status</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
     @foreach($brands as $brand)
      <tr>
        <th scope="row">{{$brand->id}}</th>
        <td>{{$brand->name}} </td>
        <td>{{$brand->status}}</td>
        <td>
        <a class="btn btn-success" href="{{route('brand.edit',['id'=>$brand->id])}}">edit</a>
        <form style="display: none;" id="delete-form-{{$brand->id}}"  action="{{route('brand.destroy',['brand'=>$brand->id])}}" method="post">
            @csrf
            {{ method_field('delete') }}                                    
        </form>
        <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$brand->id}}').submit();" href="{{route('brand.destroy',['category'=>$brand->id])}}" class="btn btn-danger">Delete</a>        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
