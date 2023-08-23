@extends('layouts.app')
@section('title', 'Edit Client')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Edit Client</h1>
      <form action="/clients/{{ $client->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$client->name}}">
        </div>
        <div class="form-group">
          <label>Phone number</label>
          <input type="text" class="form-control" name="phone number" placeholder="Enter phone number" value="{{$client->phone number}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>