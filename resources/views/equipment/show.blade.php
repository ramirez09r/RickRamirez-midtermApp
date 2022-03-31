@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
  <div><p>{{ $equipment->name; }}</p></div>
  <div><p>{{ $equipment->ip; }}</p></div>
  <div><p>{{ $equipment->type; }}</p></div>
@stop