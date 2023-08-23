@extends('layouts.app')
@section('title', 'Admin')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Admin</h1>
      <p>
        <a href="{{ route('admins.create') }}" class="btn btn-success">Add New Admin</a>
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
          @foreach($admins as $admin)
          <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->country }}</td>
            <td>
              <a href="{{ route('admin.show', $admin->id) }}" class="btn btn-info">Details</a>
              <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-primary">Edit</a>
              <form style="display:inline-block" method="POST" action="{{ route('admin.destroy', $admin->id) }}">
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