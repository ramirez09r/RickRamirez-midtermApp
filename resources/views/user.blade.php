@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Last Name</th><th>First Name</th><th>Phone</th><th>Email</th>
        </tr>
      </thead>
      <tbody>

        @foreach($user AS $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->last_name }}</td>
          <td>{{ $user->first_name }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->email }}</td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('user.create') }} " class="btn btn-primary" >Create</a>
<a href="/" class="btn btn-primary" >Go Back</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop