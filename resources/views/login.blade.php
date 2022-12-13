<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="{{ asset('css/regin.css') }}">
    <link rel="icon" href="{{ asset('img/bymeals-logo.png') }}">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body class="text-center">

<main class="form-signin">
  <div class="row">
      <div class="col">
        @if (session()->has('successs'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/login" method="POST">
            @csrf
            <img class="mb-4" src="img/bymeals-logo.png" alt="" width="150">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-3">
              <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
          </form>
          <small >Not registered? <a class="mt-3" href="/register">Register Now</a></small>
      </div>
  </div>
</main>



  </body>
</html>
