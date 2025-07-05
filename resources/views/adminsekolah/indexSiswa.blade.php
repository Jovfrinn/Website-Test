@extends('adminsekolah.layouts.layouts')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Siswa </li>
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
                <a href="#" class="btn btn-success">+ Tambah Siswa</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>NISN</th>
                    <th>Nama_Lengkap</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($dataSiswa as $item)
                    <tr>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->nama_lengkap }}</td></td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a href="{{ route('admin.editSiswa',$item->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.deleteSiswa',$item->id) }}" class="btn btn-danger" onclick="confirm('Kamu ingin menghapus Siswa tersebut?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>NISN</th>
                    <th>Nama_Lengkap</th>
                    <th>Alamat</th>
                    <th>Action</th>
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