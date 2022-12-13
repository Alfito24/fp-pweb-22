@extends('dashboard.template')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form action="{{ url('/user/update/'.$user[0]->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <input name="idmitra" type="hidden" value="">
                            <input name="idoleh" type="hidden" value="1">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" class="form-control" value="{{ $user[0]->first_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="middle_name">Middle Name</label>
                                    <input type="text" name="middle_name"  class="form-control" value="{{ $user[0]->middle_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name"  class="form-control" value="{{ $user[0]->last_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Email</label>
                                    <input type="email" name="last_name"  class="form-control" value="{{ $user[0]->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" name="phone_number"  class="form-control" value="{{ $user[0]->phone_number }}">
                                </div>
                                <div class="form-group">
                                    <label for="birth_date">Birth Date</label>
                                    <input type="date" name="birth_date"  class="form-control" value="{{ $user[0]->birth_date }}">
                                </div>
                                <div class="form-group">
                                    <label for="place_of_birth">Place of Birth</label>
                                    <input type="text" name="place_of_birth"  class="form-control" value="{{ $user[0]->place_of_birth }}">
                                </div>
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <img id="image" style="width: 400px;height:400px" src="{{ url('/data_file/'.$user[0]->photo) }}" alt="" class="img-preview" style="width: 400px;height:400px">
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik"  class="form-control" value="{{ $user[0]->nik }}">
                                </div>
                                <div class="form-group">
                                    <label for="registration_number">Registration Number</label>
                                    <input type="text" name="registration_number"  class="form-control" value="{{ $user[0]->registration_number }}">
                                </div>
                                <div class="form-group">
                                    <label for="group_id">Group ID</label>
                                    <input type="text" name="group_id"  class="form-control" value="{{ $user[0]->group_id }}">
                                </div>
                                <div class="form-group">
                                    <label for="sex">Sex</label>
                                    <input type="text" name="sex" class="form-control" value="{{ $user[0]->sex }}">
                                </div>
                                <div class="form-group">
                                    <label for="religion">Religion</label>
                                    <input type="text" name="religion"  class="form-control" value="{{ $user[0]->religion }}">
                                </div>
                                <div class="form-group">
                                    <label for="blood_type">Blood Type</label>
                                    <input type="text" name="blood_type"  class="form-control" value="{{ $user[0]->blood_type }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address"  class="form-control" value="{{ $user[0]->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Role</label>
                                    <select id="inputStatus" name="kemasan_produk" class="form-control custom-select">
                                        <option selected disabled>Select one</option>
                                        <option value="student" @if ($user[0]->isStudent == true)
                                        selected
                                        @endif>Student</option>
                                        <option value="lecture" @if ($user[0]->isLecture == true)
                                        selected
                                        @endif>Lecture</option>
                                        <option value="admin" @if ($user[0]->isAdmin == true)
                                        selected
                                        @endif>Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 mb-3">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Edit" class="btn btn-success float-right">
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->
        </form>
        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <script>
        function previewImage()
        {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    <!-- /.content -->
@endsection
