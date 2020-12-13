@extends('layouts.app')
@section('content')
<a href="{{ route('user_comments.create')}}" class="btn btn-prymary mt-5">Add</a>
<table class="table table-striped table-dark mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">comment</th>
      <th scope="col">posted at</th>
      <th scope="col">user id</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>   
   @foreach ($user_comments->items() as $user_comment) 
   <tr>
   <td>{{$user_comment->id}}</td>
   <td>{{$user_comment->comment}}</td>
   <td>{{$user_comment->posted_at}}</td>
   <td>{{$user_comment->user_id}}</td>
   <td>
  
   </td> <a class ="btn-outline-primary" href="{{ route('user_comments.show',['user_comment' => $user_comment->id])}}">Details</a>
   <a class ="btn-outline-primary" href="{{ route('user_comments.destroy',['user_comment' => $user_comment->id])}}">Delete</a>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection