@extends('dashboard.template')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Daftar Request</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if (session()->has('successs'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <!-- Small boxes (Stat box) -->
        <div class="card">
          <div class="card-header border-0">
            <h3 class="card-title">Request</h3>
            <div class="card-tools">
              <a href="/dashboard/adduser" class="btn btn-tool btn-sm">
                <i class="fas fa-plus"></i>
              </a>
              <a href="/dashboard/listuser" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
              </a>
            </div>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
              <thead>
                <tr>
                <th>ID</th>
                  <th>Student's Name</th>
                  <th>Student's Type</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach ($users as $u)
              <tbody>
                <tr>
                <td>{{ $u->id }}</td>
                  <td>{{ $u->first_name }}</td>
                  <td>Reguler</td>
                  <td><a href="/request/edit/{{ $u->id }}" class="btn btn-warning">View</a></td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

