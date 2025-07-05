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
              <form action="{{ route('admin.updateSiswa', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Masukkan Kelas" value="{{ $siswa->nisn }}">
                  </div>
                  <div class="form-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" name="nama-lengkap" class="form-control" id="nama-lengkap" placeholder="Masukkan Nama Wali Kelas" value="{{ $siswa->nama_lengkap }}">
                  </div>
                  <div class="form-group">
                    <label>Pilih Kelas</label>
                    <select class="form-control select2" name="kelas_id" style="width: 100%;">
                      @if($initial)
                      <option selected="selected" value="{{$initial->id}}">{{$initial->nama_kelas}}</option>
                      @else
                      <option selected="selected" value="{{ null }}">Belum Ada Kelas</option>
                      @endif
                      @foreach ($datakelas as $item)
                      <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
                      @endforeach
                    </select>
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