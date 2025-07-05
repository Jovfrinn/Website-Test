@extends('siswa.layouts.headers')

@section('content')    
    <main class="container d-flex justify-content-center">
        <div class="form-container">
            <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <h2>Form Pendaftaran Siswa</h2>
                <p>Silakan isi data diri Anda dengan benar.</p>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required value="{{ $siswa->nama_lengkap }}">
                </div>
    
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" id="nisn" name="nisn" placeholder="Masukkan Nomor Induk Siswa Nasional" required value="{{ $siswa->nisn }}">
                </div>
    
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap Anda" required value="{{ $siswa->alamat }}"></textarea>
                </div>
    
                <button type="submit" class="submit-btn">Simpan Data</button>
            </form>
        </div>
    </main>
@endsection