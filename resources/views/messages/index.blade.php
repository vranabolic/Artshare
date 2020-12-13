@extends('layouts.app')
@section('content')
<a href="{{ route('messages.create')}}" class="btn btn-prymary mt-5">send message</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
 
      <th scope="col">id</th>
      <th scope="col">created at</th>
      <th scope="col">message</th>
      <th scope="col">user id</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>   
   @foreach ($messages->items() as $message) 
   <tr>
 
   <td>{{$message->id}}</td>
   <td>{{$message->created_at}</td>
   <td>{{$message->message_body}}</td>
   <td>{{$message->user_id}</td>
   <td>
   <a class ="btn-outline-primary" href="{{ route('messages.show',['message' => $message->id])}}">Details</a>
   </td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection