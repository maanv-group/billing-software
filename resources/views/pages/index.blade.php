@extends('master.pages')

@section('page-title', 'Home Page')

@section('page-content')
    <p>Home Page</p>
    <p>{{ session('user.role') }}</p>
@endsection