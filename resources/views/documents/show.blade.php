@extends('layouts.app')

@section('content')
<div>
<h3>Document detail</h3>
<ul classs="list-unstyled">
<li>Name: {{$document->path}}</li>
<li><p>  <p></li>
</ul>
<a href="{{url()->previous() }}" class="btn-outline-primary">Back</a>
</div>
@endsection