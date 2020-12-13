@extends('layouts.app')
@section('content')
<a href="{{ route('roles.create')}}" class="btn btn-prymary mt-5">Add</a>
<a href="{{ route('workplaces.create')}}" class="btn btn-prymary mt-5">Add</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">started at</th>
      <th scope="col">ended at</th>
      <th scope="col">company id</th>
      <th scope="col">user id</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>   
   @foreach ($workplaces->items() as $workplace) 
   <tr>
   <td>{{$workplace->id}}</td>
   <td>{{$workplace->title}}</td>
   <td>{{$workplace->started_at}}</td>
   <td>{{$workplace->ended_at}}</td>
   <td>{{$workplace->company_id}}</td>
   <td>{{$workplace->user_id}}</td>
   <td>
   <a class ="btn-outline-primary" href="{{ route('workplaces.show',['workplace' => $workplace->id])}}">Details</a>
   <a class ="btn-outline-primary" href="{{ route('workplaces.update',['workplace' => $workplace->id])}}">Edit</a>
   </td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection