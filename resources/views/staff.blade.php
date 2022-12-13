<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="{{ asset('css/regin.css') }}">
    <link rel="icon" href="{{ asset('img/bymeals-logo.png') }}">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-registration mb-3">
  <form action="/register" method="POST" enctype="multipart/form-data">
    @csrf
    <img class="mb-4 rounded" src="img/bymeals-logo.png" alt="" width="150px">
    <h1 class="h3 mb-3 fw-normal">Student Register</h1>
    <div class="form-floating">
        <input value="{{ old('marital_status') }}" type="text" name="marital_status" class="form-control id="name">
        <label for="marital_status">Marital Status</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('position') }}" type="text" name="position" class="form-control id="name">
        <label for="position">Position</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('rank') }}" type="text" name="rank" class="form-control id="name">
        <label for="rank">Rank</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('class') }}" type="text" name="class" class="form-control id="class">
        <label for="class">Class</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('functional') }}" type="text" name="functional" class="form-control id="name">
        <label for="functional">Functional</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('nidn') }}" type="date" name="nidn" class="form-control id="name">
        <label for="nidn">NIDN</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('highest_edu') }}" type="text" name="highest_edu" class="form-control id="highest_edu">
        <label for="highest_edu">Highest Education</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('before_name_degree') }}" type="text" name="before_name_degree" class="form-control id="before_name_degree">
        <label for="before_name_degree">Before Name Degree</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('after_name_degree') }}" type="text" name="after_name_degree" class="form-control id="after_name_degree">
        <label for="after_name_degree">After Name Degree</label>
    </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
  </form>
  <small >Already have an account? <a class="mt-3" href="/login">Login</a></small>
</main>



  </body>
</html>

