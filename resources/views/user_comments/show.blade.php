@extends('layouts.app')

@section('content')
<div>
<h3>comment detail</h3>
<ul classs="list-unstyled">
<li>Comment: {{$user_comment->comment}}</li>
<li><p> comment <p></li>
</ul>
<a href="{{url()->previous() }}" class="btn-outline-primary">Back</a>
</div>
@endsection