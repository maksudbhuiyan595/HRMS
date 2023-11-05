@extends('frontend.master')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card p-3">
                <div class="card-body">
                    <h1>Customer reset password</h1>

                    <form action="{{route('reset.password',$token)}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleInputPassword1">Enter New Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1">Retype Password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection