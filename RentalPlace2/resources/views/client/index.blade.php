@extends('layouts.app')
@section('title', 'Client')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Client</h1>
      <p>
        <a href="{{ route('client.create') }}" class="btn btn-success">Add New Client</a>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>name</th>
             <th>phone number<th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($client as $client)
          <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->country }}</td>
            <td>
              <a href="{{ route('client.show', $client->id) }}" class="btn btn-info">Details</a>
              <a href="{{ route('client.edit', $client->id) }}" class="btn btn-primary">Edit</a>
              <form style="display:inline-block" method="POST" action="{{ route('client.destroy', $client->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>