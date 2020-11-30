@extends('layouts.app')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">path</th>
      <th scope="col">user id</th>
      
    </tr>
  </thead>
  <tbody>   
   @foreach ($documents->items() as $document) 
   <tr>
   <td>{{$document->id}}</td>
   <td>{{$document->path}}</td>
   <td>{{$document->user_id}</td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection