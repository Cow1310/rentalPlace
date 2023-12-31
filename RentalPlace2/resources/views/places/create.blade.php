@extends('layouts.app')
@section('title', 'Add New place')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Add New place</h1>
      <form action="{{ route('places.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <div class="mb-3">
            <label for="" class="form-label">Client</label>
            <select class="form-select form-select-lg" name="client_id" id="client_id">
              @foreach ($clients as $client)
              <option value="{{ $client->id }}">{{ $client->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" placeholder="Enter address">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" placeholder="Enter phone">
        </div>
        <div class="form-group">
          <label>Price</label>
          <input type="text" class="form-control" name="price" placeholder="Enter price">
        </div>
        <button type="submit" class="btn btn-primary">Add New place</button>
      </form>
    </div>
  </div>
    
@endsection