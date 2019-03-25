@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.session_message')
<div class="content">
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-body">
<span class="pull-left clickable panel-toggle"><a class="btn btn-success" href="{{route('category.create')}}">create new</a></span>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
       @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}} </td>
      <td>{{$category->status}}</td>
      <td>
    <a class="btn btn-success" href="{{route('category.edit',['id'=>$category->id])}}">edit</a>
    <form style="display: none;" id="delete-form-{{$category->id}}"  action="{{route('category.destroy',['category'=>$category->id])}}" method="post">
        @csrf
        {{ method_field('delete') }}                                    
    </form>
    <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$category->id}}').submit();" href="{{route('category.destroy',['category'=>$category->id])}}" class="btn btn-danger">Delete</a>   </td>
 </tr>

    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>

  @endsection
