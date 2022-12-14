@extends('dashboard.student.template')
@section('container')
<div class="container mt-5">
  <h2 class="text-center">
     Edit Request
  </h2>
  {{-- <strong>{{ $message }}</strong> --}}
  <form action="/dashboard_user/edit_request/{{ $request->id }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $request[0]->title }}">
        <label for="" class="form-label">Upload your Final Paper</label>
        <input type="file" class="form-control" id="file" name="file">
        <div id="file" class="form-text">We'll never share your file with anyone else.</div>
      </div>
      <button type="submit" class="btn btn-warning">Submit</button>
    </form>
</div>
@endsection
