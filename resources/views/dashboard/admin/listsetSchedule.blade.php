@extends('dashboard.admin.template')
@section('content')
<h2 class="text-center">Request List</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($requests as $request )
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $request->title }}</td>
        <td>
          <a href="/dashboard_admin/schedule/viewrequest/{{ $request->id }}"><button type="button" class="btn btn-warning">View</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

