@extends('layouts.app')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
 
      <th scope="col">since</th>
      <th scope="col">user id</th>
      
    </tr>
  </thead>
  <tbody>   
   @foreach ($followers->items() as $follower) 
   <tr>
 
   <td>{{$follower->since}}</td>
   <td>{{$follower->user_id}</td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection