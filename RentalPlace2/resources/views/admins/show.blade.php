@extends('layouts.app')
@section('title', 'Details for id ' . $admins->id)
@section('content')

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for id {{ $admins->id }}</h1>
      <p><a href="{{ route('admins.index') }}">Back to all admin</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $admins->id }}</td>
          </tr>
          <tr>
            <th>Phone number</th>
            <td>{{ $admins->phone }}</td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection