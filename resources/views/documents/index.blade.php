@extends('layouts.app')
@section('content')
<a href="{{ route('documents.create')}}" class="btn btn-prymary mt-5">Add</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">path</th>
      <th scope="col">user id</th>
      <th>Actions</th>
      
    </tr>
  </thead>
  <tbody>   
   @foreach ($documents->items() as $document) 
   <tr>
   <td>{{$document->id}}</td>
   <td>{{$document->path}}</td>
   <td>{{$document->user_id}</td>
    <td>
    <a class ="btn-outline-primary" href="{{ route('documents.show',['documents' => $document->id])}}">Details</a>
    </td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection