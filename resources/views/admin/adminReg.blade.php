<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
   
    <title>Login</title>
</head>
<body>
    <style>
        .gradient-custom {
/* fallback for old browsers */
background: black;

/* Chrome 10-25, Safari 5.1-6 */
background: grey;

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: grey;
}
        </style>
    <form method="POST" action="{{route('adminAuthenticate')}}">
    @include('sweetalert::alert')

      @csrf
    <section class="vh-105 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Admin Registration</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>


              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">name</label>
                <input type="name" id="typeEmailX" value="{{old('name')}}" class="form-control form-control-lg" name="name" />
                <span class="mb-3">
                  @if ($errors->has('name'))
                      <span style="color:red">{{$errors->first('name')}}</span>
                            @endif
                      </span>

              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" id="typeEmailX" value="{{old('email')}}" class="form-control form-control-lg" name="email" />
                <span class="mb-3">
                  @if ($errors->has('email'))
                      <span style="color:red">{{$errors->first('email')}}</span>
                            @endif
                      </span>

              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" id="typePasswordX" value="{{old('password')}}" class="form-control form-control-lg" name="password"/>
                <span class="mb-3">
                  @if ($errors->has('password'))
                      <span style="color:red">{{$errors->first('password')}}</span>
                            @endif
                      </span>

              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>


            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="register" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>    
</form>
</body>
</html>