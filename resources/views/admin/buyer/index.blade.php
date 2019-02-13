@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.session_message')
<div class="content">
  <a class="btn btn-success pull-right" href="{{route('buyer.create')}}" >Add New User</a><br>
  <h2>User Data</h2>
  <div class="table-responsive">          
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.N</th>
          <th>Name</th>
          <th>Address</th>
          <th>email</th>
          <th>Image</th>
          <th>Details</th>
          <th>phone</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
          @if($buyers->count())
            @foreach($buyers as $buyer)
               <tr>
                <td>{{$buyer->id}}</td>
                <td>{{$buyer->name}}</td>
                <td>{{$buyer->address}}</td>
                <td>{{auth()->user()->email}}</td>
                <td><img src="{{asset("images/$buyer->image")}}" alt="" height="40px"></td>
                <td>{{$buyer->details}}</td>
                <td>{{$buyer->phone_no}}</td>
                <td>
                  <a class="btn btn-primary" href="{{route('buyer.edit',['id'=>$buyer->id])}}">Edit</a>

                  <form style="display: none;" id="delete-form-{{$buyer->id}}"  action="{{route('buyer.destroy',['buyer'=>$buyer->id])}}" method="post">
                        @csrf
                        {{ method_field('delete') }}                                    
                    </form>
                    <a onclick="event.preventDefault(); document.getElementById('delete-form-{{$buyer->id}}').submit();" href="{{route('buyer.destroy',['buyer'=>$buyer->id])}}" class="btn btn-danger">Delete</a>     <a class="btn btn-success" href="{{route('buyer.show',['id'=>$buyer->id])}}">Show</a>
            @endforeach
           @else
       <tr>
       <td colspan="7">NO post available</span></td>
       </tr>
     @endif
      </tbody>
    </table>
  </div>
</div>
@endsection