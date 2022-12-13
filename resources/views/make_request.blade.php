<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
        <h2 class="text-center">
            Make a Request
        </h2>
        {{-- <strong>{{ $message }}</strong> --}}
        <form action="/make-request" method="POST"enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Upload your Final Paper</label>
              <input type="file" class="form-control" id="file" name="file">
              <div id="file" class="form-text">We'll never share your file with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
          </form>
    </div>
  </body>
</html>
