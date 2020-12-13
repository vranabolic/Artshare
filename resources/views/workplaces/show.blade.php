@extends('layouts.app')

@section('content')
<div>
<h3>Workplace detail</h3>
<ul classs="list-unstyled">
<li>Title: {{$workplace->title}</li>
<li><p> Job <p></li>
</ul>
<a href="{{url()->previous() }}" class="btn-outline-primary">Back</a>
</div>
@endsection