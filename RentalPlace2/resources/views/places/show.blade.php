@extends('layouts.app')
@section('title', 'Details for ID ' . $places->id)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Details for ID {{ $places->id }}</h1>
      <p><a href="{{ route('places.index') }}">Back to all places</a></p>
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $places->id }}</td>
          </tr>
          <tr>
            <th>Address</th>
            <td>{{ $places->address }}</td>
          </tr>
          <tr>
            <th>Phone</th>
            <td>{{ $places->phone }}</td>
          </tr>
          <tr>
            <th>Price</th>
            <td>{{ $places->price}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection