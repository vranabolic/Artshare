@extends('layouts.app')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">started at</th>
      <th scope="col">ended at</th>
      <th scope="col">company id</th>
      <th scope="col">user id</th>

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
   </tr>
   @endforeach
  </tbody>
</table>
@endsection