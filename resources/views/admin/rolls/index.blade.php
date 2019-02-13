@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.session_message')

<div class="content">
<span class="pull-left clickable panel-toggle"><a class="btn btn-success" href="{{route('rolls.create')}}">create new</a></span>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Roll Name</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
     @foreach($rolls as $roll)
      <tr>
        <th scope="row">{{$roll->id}}</th>
        <td>{{$roll->name}} </td>
        <td>
        <a class="btn btn-success" href="{{route('rolls.edit',['id'=>$roll->id])}}">edit</a>
        <a class="btn btn-danger" href="{{route('rolls.destroy',['id'=>$roll->id])}}">delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
