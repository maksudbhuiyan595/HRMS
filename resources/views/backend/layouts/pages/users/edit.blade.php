@extends('backend.master')
@section('content')

<h1 class="text-center"><strong>Role Lists</strong></h1>
  <hr>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

    @foreach($roles as $key=>$data )
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->role_name}}</td>
        <td>{{$data->role_status}}</td>
        <td>{{$data->role_description}}</td>
      <td>
        <a href="{{route('role.assign',$data->id)}}" class="btn btn-info">Assign</a> 
        </td>
      </tr>
    @endforeach
  
  </tbody>
</table>
@endsection
