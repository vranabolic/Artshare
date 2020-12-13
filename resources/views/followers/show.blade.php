@extends('layouts.app')

@section('content')
<div>
<h3>Follower detail</h3>
<ul classs="list-unstyled">
<li>Name: {{$follower->user_id}}</li>
<li><p>  <p></li>
</ul>
<a href="{{url()->previous() }}" class="btn-outline-primary">Back</a>
</div>
@endsection