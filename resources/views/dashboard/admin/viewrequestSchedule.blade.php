@extends('dashboard.admin.template')
@section('container')
<h2 class="text-center">Request List</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">File</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($request as $request )
      <tr>
        <td>{{ $request->user->first_name }}</td>
        <td>
          <img src="{{ url('/data_file/'.$request->file) }} " alt="" width="350px" height="350px">
        </td>
      </tr>

    </tbody>
  </table>
</section >
<section >
 <form class="d-flex flex-column" action="/dashboard_admin/schedule/setschedule/{{ $request->id }}" method="POST">
  @csrf
  <input type="date" name="schedule" >
  <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Submit</button>
</form>
  @endforeach
@endsection

