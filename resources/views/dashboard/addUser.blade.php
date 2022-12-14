@extends('dashboard.template')
@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <form action="/addUser" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="middle_name">Middle Name</label>
                                    <input type="text" name="middle_name"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Email</label>
                                    <input type="email" name="email"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" name="phone_number"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="birth_date">Birth Date</label>
                                    <input type="date" name="birth_date"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="place_of_birth">Place of Birth</label>
                                    <input type="text" name="place_of_birth"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" name="photo"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="registration_number">Registration Number</label>
                                    <input type="text" name="registration_number"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="group_id">Group ID</label>
                                    <input type="text" name="group_id"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="sex">Sex</label>
                                    <input type="text" name="sex"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="religion">Religion</label>
                                    <input type="text" name="religion"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="blood_type">Blood Type</label>
                                    <input type="text" name="blood_type"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Role</label>
                                    <select id="inputStatus" name="kemasan_produk" class="form-control custom-select">
                                        <option selected disabled>Select one</option>
                                        <option value="student">Student</option>
                                        <option value="lecture">Lecture</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 mb-3">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Tambahkan" class="btn btn-success float-right">
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
