@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
  <div><p>{{ $user->last_name; }}</p></div>
  <div><p>{{ $user->first_name; }}</p></div>
  <div><p>{{ $user->phone; }}</p></div>
  <div><p>{{ $user->email;; }}</p></div>
@stop