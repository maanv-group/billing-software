@extends('master.dashboard')

@section('page-title', $user->name . " (@" . $user->username . ")" . " • " . " Dashboard")

@section('page-content')
    <p>Home Page</p>
    <p>{{ session('user.role') }}</p>
    <pre>
        @php
            print_r($user);
        @endphp
    </pre>

    <a href="{{ route('user.profile', \Auth::user()->username) }}">Profile</a>
    <a href="{{ url('/logout') }}">Logout</a>
@endsection