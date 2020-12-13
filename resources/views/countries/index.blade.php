@extends('layouts.app')
@section('content')
<a href="{{ route('countries.create')}}" class="btn btn-prymary mt-5">Add</a>
<table class="table table-striped table-dark mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Country name</th>
      <th>Actions</th>
      
    </tr>
  </thead>
  <tbody>   
   @foreach ($countries->items() as $country) 
   <tr>
   <td>{{$country->id}}</td>
   <td>{{$country->name}}</td>
   <td>
   <a class ="btn-outline-primary" href="{{ route('countries.show',['country' => $country->id])}}">Details</a>
   <a class ="btn-outline-primary" href="{{ route('countries.edit',['country' => $country->id])}}">Edit</a>
   </td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection

 