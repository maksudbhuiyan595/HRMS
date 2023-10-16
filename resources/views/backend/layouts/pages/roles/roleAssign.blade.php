@extends('backend.master')
@section('content')
<h1 class="text-center"><strong>Role Permission for {{ucfirst($role->id)}}</strong></h1>
<hr>

<body>
    <div class="container mt-5">
        <div class="row">
            <form action="{{route('assign.permission',$role->id)}}" method="post">
                <div class="col-md-3 ">
                    <div class="card">
                        <div class="card-header text-center mb-3">{{ucfirst($role->role_name)}}</div>
                        <div class="card-body">
                            <div class="form-check">
                                <input name="checkbox" class="form-check-input" type="checkbox" value="" id="id">
                                <label class="form-check-label" for="id">
                                    All Role Permission
                                </label>
                            </div>
                        </div>
                        <div class="card-footer">
                            @csrf
                            @foreach ($permissions as $permission)
                            <div class="form-check">
                                <input name="permission[]" @if (in_array($permission->id,$assignPermissions)) checked
                                    
                                @endif class="form-check-input" type="checkbox" value="{{$permission->id}}" id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                    {{ucfirst($permission->permission_name)}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Assign Permission</button>
             </form>
        </div>
    </div>


    @endsection