<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah Modern</title>
    <link rel="stylesheet" href="{{ asset('assets/css/homeStyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <i class="fas fa-school"></i>
                <h1>{{ $profiles->nama_sekolah }}</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#fasilitas">Fasilitas</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Selamat Datang di Sekolah Kami</h2>
            <p>{{ $profiles->motto }}</p>
            
            <a href="{{ route('login') }}" class="cta-button">Login | Daftar</a>
        </div>
    </section>

    <main class="container">
        <section id="tentang" class="profile-section">
            <h2 class="section-title">Tentang Kami</h2>
            <div class="card">
                <i class="fas fa-landmark card-icon"></i>
                <h3>Visi & Misi</h3>
                <p>{{ $profiles->visi }} <br> {{ $profiles->misi }}</p>
            </div>
        </section>

        <section id="fasilitas" class="profile-section">
            <h2 class="section-title">Fasilitas Sekolah</h2>
            <div class="card-container">
                <div class="card">
                    <i class="fas fa-book-open-reader card-icon"></i>
                    <h3>Perpustakaan Digital</h3>
                    <p>Akses ke ribuan buku digital dan sumber belajar online.</p>
                </div>
                <div class="card">
                    <i class="fas fa-laptop-code card-icon"></i>
                    <h3>Laboratorium Komputer</h3>
                    <p>Dilengkapi dengan perangkat keras dan lunak terkini.</p>
                </div>
                <div class="card">
                    <i class="fas fa-microscope card-icon"></i>
                    <h3>Laboratorium Sains</h3>
                    <p>Peralatan modern untuk praktikum fisika, kimia, dan biologi.</p>
                </div>
            </div>
        </section>

        <section id="kontak" class="profile-section">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="card">
                <p><strong>Alamat:</strong> {{ $profiles->alamat }}</p>
                <p><strong>Email:</strong> {{ $profiles->email }}</p>
                <p><strong>Telepon:</strong> {{ $profiles->telepon }}</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Nama Sekolah</p>
    </footer>

</body>
</html>