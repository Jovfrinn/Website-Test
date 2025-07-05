@extends('adminsekolah.layouts.layouts')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kelas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Kelas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambahkan Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.updateProfile', $profiles->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama-sekolah">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control" id="nama-sekolah" placeholder="Masukkan Nama Sekolah" value="{{ $profiles->nama_sekolah }}">
                  </div>
                  <div class="form-group">
                    <label for="motto">Motto Sekolah</label>
                    <input type="text" name="motto" class="form-control" id="motto" placeholder="Masukkan Motto" value="{{ $profiles->motto }}">
                  </div>
                  <div class="form-group">
                    <label for="visi">Visi Sekolah</label>
                    <input type="text" name="visi" class="form-control" id="visi" placeholder="Masukkan Visi" value="{{ $profiles->visi }}">
                  </div>
                  <div class="form-group">
                    <label for="misi">Misi Sekolah</label>
                    <input type="text" name="misi" class="form-control" id="misi" placeholder="Masukkan misi" value="{{ $profiles->misi }}">
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat Sekolah</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" value="{{ $profiles->alamat }}">
                  </div>
                  <div class="form-group">
                    <label for="telepon">Telepon Sekolah</label>
                    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Masukkan telepon" value="{{ $profiles->telepon }}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email Sekolah</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email" value="{{ $profiles->email }}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection