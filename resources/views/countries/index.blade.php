@extends('layouts.app')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Country name</th>
      
    </tr>
  </thead>
  <tbody>   
   @foreach ($countries->items() as $country) 
   <tr>
   <td>{{$country->id}}</td>
   <td>{{$country->name}}</td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection

 