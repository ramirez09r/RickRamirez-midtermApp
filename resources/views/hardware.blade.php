@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Ram Size</th><th>Operation System</th><th>Processor</th>
        </tr>
      </thead>
      <tbody>

        @foreach($hardware AS $hardware)
        <tr>
          <td>{{ $hardware->id }}</td>
          <td>{{ $hardware->ram }}</td>
          <td>{{ $hardware->os }}</td>
          <td>{{  $hardware->processor }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('hardware.create') }} " class="btn btn-primary" >Create</a>
<a href="/" class="btn btn-primary" >Go Back</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop