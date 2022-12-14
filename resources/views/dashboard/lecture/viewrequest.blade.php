@extends('dashboard.lecture.template')
@section('container')
<h2 class="text-center">View Request</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">File</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $request[0]->title }}</td>
        <td>
          <img src="{{ url('/data_file/'.$request[0]->file) }} " alt="" width="350px" height="350px">
        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex flex-column">

  <section >
  <form class="d-flex flex-column" style="margin-bottom: 20px;" action="/acceptlecture/{{ $request[0]->id }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success">Accept</button>
 </form>
</section >
<section >
 <form class="d-flex flex-column" action="/rejectlecture/{{ $request[0]->id }}" method="POST">
  @csrf
  <button type="submit" class="btn btn-danger" style="margin-bottom: 20px;">Reject</button>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="note_lecture"></textarea> <br>
    <label for="floatingTextarea">Comments</label>
  </div>
</form>
</section>
</div>
@endsection

