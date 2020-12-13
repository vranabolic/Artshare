@extends('layouts.app')

@section('content')
<div>
<h3>Role detail</h3>
<ul classs="list-unstyled">
<li>Role: {{$Role->name}}</li>
<li><p>  <p></li>
</ul>
<a href="{{url()->previous() }}" class="btn-outline-primary">Back</a>
</div>
@endsection