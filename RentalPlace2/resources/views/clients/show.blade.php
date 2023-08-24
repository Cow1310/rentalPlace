@extends('layouts.app')
@section('title', 'Details for name ' . $clients->name)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for name {{ $clients->name }}</h1>
      <p><a href="{{ route('clients.index') }}">Back to all client</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>Name</th>
            <td>{{ $clients->name }}</td>
          </tr>
          <tr>
            <th>Phone number</th>
            <td>{{ $clients->phone }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection