@extends('layouts.app')
@section('title', 'Add New Client')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Add New Client</h1>
      <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label>Phone number</label>
          <input type="text" class="form-control" name="Phone number" placeholder="Enter Phone number">
        </div>
        <button type="submit" class="btn btn-primary">Add New Client</button>
      </form>
    </div>
  </div>
    
@endsection