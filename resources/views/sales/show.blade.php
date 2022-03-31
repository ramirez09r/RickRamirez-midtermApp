@extends('adminlte::page')

@section('title', 'Sales')

@section('content_header')
    <h1>Sales</h1>
@stop

@section('content')
  <div><p>{{ $sales->company_name; }}</p></div>
  <div><p>{{ $sales->last_name; }}</p></div>
  <div><p>{{ $sales->first_name; }}</p></div>
  <div><p>{{ $sales->phone; }}</p></div>
  <div><p>{{ $sales->email;; }}</p></div>
@stop