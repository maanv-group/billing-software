@extends('master.dashboard')

@section('page-title', $user->name . " (@" . $user->username . ")" . " • " . " Dashboard")

@section('page-content')
    <p>Dashboard Page</p>
    <p>{{ session('user.role') }}</p>
    <pre>
        @php
            print_r($user);
        @endphp
    </pre>
@endsection