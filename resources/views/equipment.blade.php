@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>User ID</th><th>Hardware ID</th><th>Name</th><th>IP</th><th>Type</th>
        </tr>
      </thead>
      <tbody>

        @foreach($equipment AS $equipment)
        <tr>
          <td>{{ $equipment->id }}</td>
          <td>{{ $equipment->user_id }}</td>
          <td>{{ $equipment->hardware_id }}</td>
          <td>{{ $equipment->name }}</td>
          <td>{{ $equipment->ip }}</td>
          <td>{{ $equipment->type }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipment.create') }} " class="btn btn-primary" >Create</a>
<a href="/" class="btn btn-primary" >Go Back</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop