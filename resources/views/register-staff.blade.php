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
  <form action="/register-staff" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Additional Data Lecturer</h1>
    <div class="form-floating">
        <input value="{{ old('marital_status') }}" type="text" name="marital_status" class="form-control" id="marital_status">
        <label for="marital_status">Marital Status</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('position') }}" type="text" name="position" class="form-control" id="position">
        <label for="position">Position</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('rank') }}" type="rank" name="rank" class="form-control" id="text">
        <label for="rank">Rank</label>
    </div>
    @error('rank')
    <div class="error">{{ $message }}</div>
    @enderror
    <div class="form-floating">
        <input value="{{ old('class') }}" type="text" name="class" class="form-control" id="class">
        <label for="class">Class</label>
        @error('class')
    <div class="error">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('functional') }}" type="text" name="functional" class="form-control" id="functional">
        <label for="functional">Functional</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('highest_education') }}" type="text" name="highest_education" class="form-control" id="highest_education">
        <label for="highest_education">Highest Education</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('before_name_title') }}" type="text" name="before_name_title" class="form-control" id="before_name_title">
        <label for="before_name_title">Before Name Title</label>
        @error('before_name_title')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('after_name_title') }}" type="text" name="after_name_title" class="form-control" id="after_name_title">
        <label for="after_name_title">After Name Title</label>
        @error('after_name_title')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <select name="lecture_role" id="lecture_role">
            <option value=null selected>Select your role</option>
            <option value="departements">Departements</option>
            <option value="its">ITS</option>
        </select>
    </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Submit</button>
  </form>
  <small >Already have an account? <a class="mt-3" href="/login">Login</a></small>
</main>



  </body>
</html>
