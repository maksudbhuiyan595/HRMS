
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row mt-3">
          <div class="col-md-6 offset-md-3">
          <a class="btn btn-primary px-5" href="{{route('home.page')}}">Home</a>
          </div>
            <div class="col-md-6 offset-md-3">
               <div class="card mt-5 p-3">
             
                <div class="card-body ">
                    <h3 class="text-center"><strong>Login Form</strong></h3>
                    <hr>
                    <form action="{{route('admin.dologin')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="login">UserName:</label>
                            <input type="email" name="email" class="form-control" placeholder="write username" id="login">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class="form-control" placeholder="password" id="password">
                        </div>
                        <button style="float: right;" type="submit" class="btn btn-success px-5">Login</button>
                </form>
                </div>
               </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

    
