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
    <h1 class="h3 mb-3 fw-normal">Please Register First</h1>
    <div class="form-floating">
        <input value="{{ old('first_name') }}" type="text" name="first_name" class="form-control" id="first_name">
        <label for="first_name">First Name</label>
        @error('first_name')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('middle_name') }}" type="text" name="middle_name" class="form-control" id="middle_name">
        <label for="middle_name">Middle Name</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('last_name') }}" type="text" name="last_name" class="form-control" id="last_name">
        <label for="last_name">Last Name</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('email') }}" type="email" name="email" class="form-control id="email">
        <label for="email">Email</label>
    </div>
    @error('email')
    <div class="error">{{ $message }}</div>
    @enderror
    <div class="form-floating">
        <input value="{{ old('phone_number') }}" type="number" name="phone_number" class="form-control" id="phone_number">
        <label for="phone_number">Phone Number</label>
        @error('phone_number')
    <div class="error">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('birth_date') }}" type="date" name="birth_date" class="form-control" id="birth_date">
        <label for="birth_date">Birth Date</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('place_of_birth') }}" type="text" name="place_of_birth" class="form-control" id="place_of_birth">
        <label for="place_of_birth">Place of Birth</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('photo') }}" type="file" name="photo" class="form-control" id="photo">
        <label for="photo">Photo</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('nik') }}" type="number" name="nik" class="form-control" id="nik">
        <label for="nik">NIK</label>
        @error('nik')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('unit_name') }}" type="text" name="unit_name" class="form-control" id="unit_name">
        <label for="unit_name">Unit Name</label>
        @error('unit_name')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('registration_number') }}" type="number" name="registration_number" class="form-control" id="registration_number">
        <label for="registration_number">Registration Number</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('group_id') }}" type="text" name="group_id" class="form-control" id="group_id">
        <label for="group_id">Group ID</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('sex') }}" type="text" name="sex" class="form-control" id="sex">
        <label for="sex">Sex</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('religion') }}" type="text" name="religion" class="form-control id="religion">
        <label for="religion">Religion</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('blood_type') }}" type="text" name="blood_type" class="form-control id="blood_type">
        <label for="blood_type">Blood Type</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('address') }}" type="text" name="address" class="form-control id="address">
        <label for="address">Address</label>
    </div>
    <div class="form-floating">
        <select name="role" id="role">
            <option value=null selected>Select your role</option>
            <option value="student">Student</option>
            <option value="lecture">Lecture</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <div class="form-floating">
        <input value="{{ old('password') }}" type="password" name="password" class="form-control id="password">
        <label for="password">Password</label>
    </div>
    @error('password')
        <div class="invalid-feedback">
           {{ $message }}
        </div>
        @enderror
    <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
  </form>
  <small >Already have an account? <a class="mt-3" href="/login">Login</a></small>
</main>



  </body>
</html>

