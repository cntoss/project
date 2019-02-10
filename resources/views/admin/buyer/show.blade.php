@extends('layouts.admin.index')
@section('content')
	  <div class="content">
	  	      <a class="btn btn-success pull-right" href="{{route('buyer.edit',['id'=>$buyer->id])}}" >Edit buyer</a><br>
         <br>
         <table style="width: 75%">
         <tr>
	     <td> <img class="img-circle" src="{{asset("images/$buyer->image")}}" alt="" height="200px" ></td>
		  <td style="padding: 50px;">{{$buyer->details}}</td>		    
	     </tr>
	      </table>
	      <div class="table-responsive">          
		    <table class="table table-bordered">
		      <tbody>
		               <tr>
		               	<td>Id</td>
		                <td>{{$buyer->id}}</td>
		               </tr>
		               <tr>
		               	<td>Name</td>
		                <td>{{$buyer->name}}</td>
		               	</tr>
		               	<tr>
		               	<td>Email</td>
		                <td>{{$buyer->email}}</td>
		               	</tr>
		               	<tr>
		               	<td>Phone</td>
		                <td>{{$buyer->phone}}</td>
		               	</tr>
		      </tbody>
		    </table>
	      </div>
      </div>
    </div>
  </div>
 @endsection