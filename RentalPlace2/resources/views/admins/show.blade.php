@extends('layouts.app')
@section('title', 'Details for name ' . $admin->name)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for name {{ $admin->name }}</h1>
      <p><a href="{{ route('admin.index') }}">Back to all admin</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>Name</th>
            <td>{{ $admin->name }}</td>
          </tr>
          <tr>
            <th>Phone number</th>
            <td>{{ $admin->phone }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection