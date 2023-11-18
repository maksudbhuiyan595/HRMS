@extends('frontend.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="card mt-5 p-3">

                <div class="card-body ">
                    <h3 class="text-center"><strong>Opt Form</strong></h3>
                    <hr>
                    <form action="{{route('otp.verified')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="login">UserName:</label>
                            <input type="number" name="otp" class="form-control" placeholder="otp-verified" id="login">
                        </div>
                       

                        <button style="float: right;" type="submit" class="btn btn-success px-5">Submit</button>
                </form>
                </div>
               </div>
            </div>
        </div>
    </div>

@endsection


