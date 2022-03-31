@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<form method="post" action="{{ route('hardware.store') }}" >
    @csrf
    <x-adminlte-input name="ram" label="RAM Size" />
    <x-adminlte-input name="os" label="Operation System" />
    <x-adminlte-input name="processor" label="Processor" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop