@extends('siswa.layouts.headers')

@section('content')

      <main class="container d-flex justify-content-center">
        @if($siswaKelas == null && $kelas  == null) 
        <div class="student-card mt-5">
            <div class="card-info">
              Data Tidak Ditemukan.  Harap Isi Form Pendaftaran Terlebih Dahulu
            </div>
        </div>
        @elseif($userSiswa->kelas_id == null)
        <div class="student-card mt-5">
            <div class="card-info">
              Mohon Tunggu Sebentar.  Data Belum Diverifikasi Oleh Admin Sekolah
            </div>
        </div>
        @else
        <div class="student-card mt-5">
          <div class="card-info">
              <div class="info-left">
                  <strong>Kelas :</strong> {{ $kelas->nama_kelas }}
              </div>
              <div class="info-right">
                  <strong>Wali Kelas :</strong> {{ $kelas->wali_kelas  }}
              </div>
          </div>
  
          <div class="table-container">
              <table class="student-table">
                  <thead>
                      <tr>
                          <th>NISN</th>
                          <th>Nama Lengkap</th>
                          <th>Alamat</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($siswaKelas as $siswa)
                      <tr>
                          <td>{{ $siswa->nisn }}</td>
                          <td>{{ $siswa->nama_lengkap }}</td>
                          <td>{{ $siswa->alamat }}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      @endif
      </main>
@endsection