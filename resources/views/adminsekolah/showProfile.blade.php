@extends('adminsekolah.layouts.layouts')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Kelas </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-title">
                    <a href="{{ route('admin.editProfile', $profiles->id) }}" class="btn btn-primary">Edit Profile</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Sekolah</th>
                    <th>Motto</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>email</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>{{ $profiles->nama_sekolah }}</td>
                    <td>{{ $profiles->motto }}</td></td>
                    <td>{{ $profiles->visi }}</td>
                    <td>{{ $profiles->misi }}</td>
                    <td>{{ $profiles->alamat }}</td>
                    <td>{{ $profiles->telepon }}</td>
                    <td>{{ $profiles->email }}</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nama Sekolah</th>
                    <th>Motto</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>email</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection