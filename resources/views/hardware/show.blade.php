@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
  <div><p>{{ $hardware->ram; }}</p></div>
  <div><p>{{ $hardware->os; }}</p></div>
  <div><p>{{ $hardware->processor; }}</p></div>
@stop