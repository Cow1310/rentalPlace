@extends('layouts.app')
@section('title', 'Add New Admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Add New Admin</h1>
      <form action="{{ route('admins.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label>Phone number</label>
          <input type="text" class="form-control" name="phone" placeholder="Enter Phone number">
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" class="form-control" name="description" placeholder="Enter description">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" placeholder="Enter address">
        </div>
        <button type="submit" class="btn btn-primary">Add New Admin</button>
      </form>
    </div>
  </div>
    
@endsection