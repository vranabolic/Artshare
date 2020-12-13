@extends('layouts.app')

@section('content')
<div>
<h3>Country detail</h3>
<ul classs="list-unstyled">
<li>Name: {{$country->name}}</li>
<li> <a href="https://en.wikipedia.org/w/index.php?search = {{$country->name}"></a> Wiki link</li>
</ul>
<a href="{{url()->previous() }}" class="btn-outline-primary">Back</a>
</div>
@endsection