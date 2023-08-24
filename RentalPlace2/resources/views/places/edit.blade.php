@extends('layouts.app')
@section('title', 'Edit place')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit place</h1>
      <form action="/places/{{ $places->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{$places->address}}">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input type="text" class="form-control" name="phone" placeholder="Enter phone" value="{{$places->phone}}">
        </div>
        <div class="form-group">
          <label>Price</label>
          <input type="text" class="form-control" name="price" placeholder="Enter price" value="{{$places->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
    
@endsection