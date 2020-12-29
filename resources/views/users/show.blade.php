@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')

<div class="mt-5">
    <h1 class="text-center">{{ $user->name }}</h1>
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">
    
    <div class="btn-group mt-5" role="group">
        <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>

        <!-- admin svima mijenja password, korisnik samo sebi -->
        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
        <a class="btn btn-primary" href="{{ route('change_password.edit', ['user' => $user]) }}">Change Password</a>
        @endif

        <!-- admin svima deaktivira račun, korisnik može samo sebi -->
        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <form class="form-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Deactivate</button>
        </form>
        @endif
    </div>
    <h1 class="h3 mt-4">Followers</h1>
    <div class="row">
        @foreach($followers as $follower)
        <div class="col-sm-2">
            <a href="{{ route('users.show', ['user' => $friend->id]) }}">
                <img src="https://picsum.photos/{{ rand(95, 105) }}" alt="profile image" class="d-block mx-auto rounded-circle">
                <div>{{ $follower->name }}</div>
            </a>
        </div>
        @endforeach
    </div>
    @endsection