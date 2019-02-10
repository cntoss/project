@extends('layouts.admin.index')
@section('content')

@include('layouts.admin.snippets.session_message')

<div class="content">
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
    <a class="btn btn-danger" href="{{route('category.destroy',['id'=>$category->id])}}">delete</a>
   </td>
 </tr>

    @endforeach
  </tbody>
</table>
</div>
  @endsection
