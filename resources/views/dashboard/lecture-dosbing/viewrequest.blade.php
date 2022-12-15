@extends('dashboard.lecture.template')
@section('container')
<h2 class="text-center">Request List</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th>Date</th>
        <th scope="col">File</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($request as $request )
      <tr>
        <td>{{ $request->user->first_name }}</td>
        <td>{{ $request->schedule }}</td>
        <td>
          <img src="{{ url('/data_file/'.$request->file) }} " alt="" width="350px" height="350px">
        </td>
      </tr>

    </tbody>
  </table>
  <div class="d-flex flex-column">

  <section >
  <form class="d-flex flex-column" style="margin-bottom: 20px;" action="/acceptdosbing/{{ $request->id }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success">Accept</button>
 </form>
</section >
<section >
 <form class="d-flex flex-column" action="/rejectdosbing/{{ $request->id }}" method="POST">
  @csrf
  <button type="submit" class="btn btn-danger" style="margin-bottom: 20px;">Reject</button>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="note_lecture"></textarea> <br>
    <label for="floatingTextarea">Comments</label>
  </div>
</form>
</section>
</div>
  @endforeach
@endsection

