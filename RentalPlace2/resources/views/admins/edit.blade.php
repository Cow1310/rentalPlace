@extends('layouts.app')
@section('title', 'Edit Admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit Admin</h1>
      <form action="/admins/{{ $admins->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$admin->name}}">
        </div>
        <div class="form-group">
          <label>Phone number</label>
          <input type="text" class="form-control" name="phone number" placeholder="Enter phone number" value="{{$admin->phone number}}">
        </div>
        <div class="form-group">
          <label>Descriptionr</label>
          <input type="text" class="form-control" name="description" placeholder="Enter description" value="{{$admin->description}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>