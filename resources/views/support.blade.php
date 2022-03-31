@extends('adminlte::page')

@section('title', 'Tech Support')

@section('content_header')
    <h1>Tech Support</h1>
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

        @foreach($support AS $support)
        <tr>
          <td>{{ $support->id }}</td>
          <td>{{ $support->company_name }}</td>
          <td>{{ $support->last_name }}</td>
          <td>{{ $support->first_name }}</td>
          <td>{{ $support->phone }}</td>
          <td>{{ $support->email }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('support.create') }} " class="btn btn-primary" >Create</a>
<a href="/" class="btn btn-primary" >Go Back</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop