@extends('adminlte::page')

@section('title', 'Tech Support')

@section('content_header')
    <h1>Tech Support</h1>
@stop

@section('content')
  <div><p>{{ $support->company_name; }}</p></div>
  <div><p>{{ $support->last_name; }}</p></div>
  <div><p>{{ $support->first_name; }}</p></div>
  <div><p>{{ $support->phone; }}</p></div>
  <div><p>{{ $support->email;; }}</p></div>
@stop