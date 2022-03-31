@extends('adminlte::page')

@section('title', 'Tech Support')

@section('content_header')
    <h1>Tech Support</h1>
@stop

@section('content')
<form method="post" action="{{ route('support.store') }}" >
    @csrf
    <x-adminlte-input name="company_name" label="Company Name" />
    <x-adminlte-input name="last_name" label="Last Name" />
    <x-adminlte-input name="first_name" label="First Name" />
    <x-adminlte-input name="phone" label="Phone" />
    <x-adminlte-input name="email" label="Email" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop