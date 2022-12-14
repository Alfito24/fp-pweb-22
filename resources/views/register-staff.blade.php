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
  <form action="/register-student" method="POST" enctype="multipart/form-data">
    @csrf
    <img class="mb-4 rounded" src="img/bymeals-logo.png" alt="" width="150px">
    <h1 class="h3 mb-3 fw-normal">Additional Data Staff</h1>
    <div class="form-floating">
        <input value="{{ old('marital_status') }}" type="text" name="marital_status" class="form-control" id="previous_degree">
        <label for="previous_degree">Previous Degree</label>
        @error('previous_degree')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('highest_education') }}" type="text" name="highest_education" class="form-control" id="highest_education">
        <label for="highest_education">Highest Education</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('origin_address') }}" type="text" name="origin_address" class="form-control" id="origin_address">
        <label for="origin_address">Origin Address</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('level') }}" type="level" name="level" class="form-control" id="text">
        <label for="level">Level</label>
    </div>
    @error('level')
    <div class="error">{{ $message }}</div>
    @enderror
    <div class="form-floating">
        <input value="{{ old('laboratorium') }}" type="text" name="laboratorium" class="form-control" id="laboratorium">
        <label for="laboratorium">Laboratorium</label>
        @error('laboratorium')
    <div class="error">{{ $message }}</div>
    @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('entry_date') }}" type="date" name="entry_date" class="form-control" id="entry_date">
        <label for="entry_date">Entry Date</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('marital_status') }}" type="text" name="marital_status" class="form-control" id="marital_status">
        <label for="marital_status">Marital Status</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('student_type') }}" type="text" name="student_type" class="form-control" id="student_type">
        <label for="student_type">Student Type</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('student_status') }}" type="text" name="student_status" class="form-control" id="student_status">
        <label for="student_status">Student Status</label>
        @error('student_status')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('parent_address') }}" type="text" name="parent_address" class="form-control" id="parent_address">
        <label for="parent_address">Parent Address</label>
        @error('parent_address')
        <div class="error">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <input value="{{ old('parent_phone') }}" type="number" name="parent_phone" class="form-control" id="parent_phone">
        <label for="parent_phone">Parent Phone</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('alternate_email_address') }}" type="email" name="alternate_email_address" class="form-control" id="alternate_email_address">
        <label for="group_id">Alternate Email Address</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('facebook_address') }}" type="text" name="facebook_address" class="form-control" id="facebook_address">
        <label for="facebook_address">Facebook Address</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('instagram_address') }}" type="text" name="instagram_address" class="form-control" id="religion">
        <label for="instagram_address">Instagram Address</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('twitter_address') }}" type="text" name="twitter_address" class="form-control" id="twitter_address">
        <label for="twitter_address">Twitter Address</label>
    </div>
    <div class="form-floating">
        <input value="{{ old('whatsapp_address') }}" type="number" name="whatsapp_address" class="form-control" id="whatsapp_address">
        <label for="whatsapp_address"> Whatsapp Address</label>
    </div>
    <div class="form-floating">
        <select name="student_role" id="student_role">
            <option value=null selected>Select your role</option>
            <option value="bachelor">Bachelor</option>
            <option value="master">Master</option>
            <option value="doctoral_degree">Doctoral Degree</option>
            <option value="fast_track">Fast Track</option>
        </select>
    </div>
    <button type="submit" class="mt-8 text-lg font-semibold bg-[#3166AD] w-full text-white rounded-xl px-6 py-3 block  hover:text-white hover:bg-[#11468c]" style="box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.25);">
        Submit
    </button>
  </form>
  <small >Already have an account? <a class="mt-3" href="/login">Login</a></small>
</main>



  </body>
</html>
