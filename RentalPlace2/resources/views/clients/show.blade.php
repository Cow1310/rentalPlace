@extends('layouts.app')
@section('title', 'Details for name ' . $client->name)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for name {{ $client->name }}</h1>
      <p><a href="{{ route('clients.index') }}">Back to all client</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>Name</th>
            <td>{{ $client->name }}</td>
          </tr>
          <tr>
            <th>Phone number</th>
            <td>{{ $client->phone }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection