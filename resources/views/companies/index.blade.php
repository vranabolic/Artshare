@extends('layouts.app')
@section('content')
<a href="{{ route('companies.create')}}" class="btn btn-prymary mt-5">Add</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Company name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>   
   @foreach ($companies->items() as $company) 
   <tr>
   <td>{{$company->id}}</td>
   <td>{{$company->name}}</td>
   <td>
   <a class ="btn-outline-primary" href="{{ route('companies.show',['company' => $company->id])}}">Details</a>
   <a class ="btn-outline-primary" href="{{ route('companies.edit',['company' => $company->id])}}">Edit</a>
   </td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection