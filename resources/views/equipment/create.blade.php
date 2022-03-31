@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipment.store') }}" >
    @csrf
    <x-adminlte-input name="user_id" label="User ID" />
    <x-adminlte-input name="hardware_id" label="Hardware ID" />
    <x-adminlte-input name="name" label="Name" />
    <x-adminlte-input name="ip" label="IP" />
    <x-adminlte-input name="type" label="Type" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop