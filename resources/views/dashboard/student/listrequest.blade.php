@extends('dashboard.student.template')
@section('container')
<h2 class="text-center">Requests List</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th>Title</th>
        <th scope="col">Date</th>
        <th scope="col">Status</th>
        <th>Action</th>
        <th>Lecture's Note</th>
        <th>Admin's Note</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($requests as $request )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $request->title }}</td>
        <td>{{ $request->created_at }}</td>
        <td>
            @if ($request->lecture_acceptance == 1 && $request->admin_acceptance == 1)
            <button type="button" class="btn btn-success">Accepted</button>
            @elseif ($request->lecture_acceptance == 2)
            <button type="button" class="btn btn-danger">Rejected</button>
            @elseif($request->lecture_check == 0 && $request->admin_acceptance == 0)
            <button type="button" class="btn btn-warning">Waiting</button>
            @endif
        </td>
        <td>
          @if ($request->lecture_acceptance == 1 && $request->admin_acceptance == 1)
         <a href="" class="btn btn-success">No Action Needed</a>
         @elseif ($request->lecture_acceptance == 2 || $request->admin_acceptance == 2)
         <a href="/dashboard_user/edit_request/{{ $request->id }}" class="btn btn-warning">Edit</a>
         @else
         <button type="button" class="btn btn-warning">Waiting</button>
          @endif
        </td>
        <td>{{ $request->note_lecture }}</td>
        <td>{{ $request->note_admin }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
