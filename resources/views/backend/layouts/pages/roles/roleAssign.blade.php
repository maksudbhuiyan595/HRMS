@extends('backend.master')


@section('content')

<h1 class="text-center"><strong>Role Assign Permission</strong></h1>
<hr>
<body>
<div class="container mt-5">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
            <div class="card">
               <div class="card-header"><span>Roll ID: </span>{{$role->id}}</div> 
                <div class="card-body">
                   {{$role->role_name}}
                </div>
                <div class="card-footer">
                    @foreach ($permissions as $key=> $permission)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="{{++$key}}">
                        <label class="form-check-label" for="{{$key++}}">
                            {{$permission->permission_name}}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </div>
</div>


@endsection
