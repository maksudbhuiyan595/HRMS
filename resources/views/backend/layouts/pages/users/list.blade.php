@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Users List</strong></h1>
  <hr>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Role Name</th>
        <th scope="col">Role </th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $key=> $user)
        <tr>
          <td>{{++$key}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->password}}</td>
          <td></td>
          <td>{{$user->role}}</td>
          <td>
            <a class="btn btn-info" href="">View</a>
            <a class="btn btn-primary" href="">Edit</a>
            <a class="btn btn-danger" href="">Delete</a>
          </td>


        </tr>
      @endforeach
    
  
  </tbody>
</table>
@endsection
