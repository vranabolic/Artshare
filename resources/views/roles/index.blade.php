@extends('layouts.app')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>   
   @foreach ($roles->items() as $role) 
   <tr>
   <td>{{$workplace->id}}</td>
   <td>{{$workplace->name}}</td>
   <td>
   <a class ="btn-outline-primary" href="{{ route('roles.show',['role' => $role->id])}}">Details</a>
   </td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection