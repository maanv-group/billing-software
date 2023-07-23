@extends('master.dashboard')

@section('page-title', $user->name . ' (@' . $user->username . ')' . ' • ' . ' Profile Settings')

@section('page-content')
    <div class="container">
        <h4>{{ $user->username }}</h4>
        <p>
            <strong>{{ $user->name }}</strong>
        </p>
    </div>
@endsection
