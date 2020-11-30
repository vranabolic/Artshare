@extends('layouts.app')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">comment</th>
      <th scope="col">posted at</th>
      <th scope="col">user id</th>
     

    </tr>
  </thead>
  <tbody>   
   @foreach ($user_comments->items() as $user_comment) 
   <tr>
   <td>{{$ser_comment->id}}</td>
   <td>{{$ser_comment->comment}}</td>
   <td>{{$ser_comment->posted_at}}</td>
   <td>{{$user_comment->user_id}}</td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection