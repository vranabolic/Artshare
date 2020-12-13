@extends('layouts.app')
@section('content')
<a href="{{ route('followers.create')}}" class="btn btn-prymary mt-5">Follow</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
 
      <th scope="col">since</th>
      <th scope="col">user id</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>   
   @foreach ($followers->items() as $follower) 
   <tr>
 
   <td>{{$follower->since}}</td>
   <td>{{$follower->user_id}</td>
   <td>
   <a class ="btn-outline-primary" href="{{ route('followers.show',['follower' => $follower->id])}}">Details</a>
   <a class ="btn-outline-primary" href="{{ route('followers.destroy',['follower' => $follower->id])}}">Remove</a>
   </td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection