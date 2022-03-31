@extends('adminlte::page')

@section('title', 'Sales')

@section('content_header')
    <h1>Sales</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Company Name</th><th>Last Name</th><th>First Name</th><th>Phone</th><th>Email</th>
        </tr>
      </thead>
      <tbody>

        @foreach($sales AS $sales)
        <tr>
          <td>{{ $sales->id }}</td>
          <td>{{ $sales->company_name }}</td>
          <td>{{ $sales->last_name }}</td>
          <td>{{ $sales->first_name }}</td>
          <td>{{ $sales->phone }}</td>
          <td>{{ $sales->email }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('sales.create') }} " class="btn btn-primary" >Create</a>
<a href="/" class="btn btn-primary" >Go Back</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop