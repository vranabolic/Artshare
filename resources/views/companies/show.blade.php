@extends('layouts.app')

@section('content')
<div>
<h3>Company detail</h3>
<ul classs="list-unstyled">
<li>Name: {{$company->name}}</li>
<li><p> Company <p></li>
</ul>
<a href="{{url()->previous() }}" class="btn-outline-primary">Back</a>
</div>
@endsection