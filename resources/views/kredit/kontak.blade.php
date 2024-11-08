<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Perusahaan</title>
    <!-- Custom CSS untuk Navigasi -->
    <style>
        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 30px;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #007bff;
        }

        .centered-heading {
            display: flex;
            justify-content: center;  /* Menyusun secara horizontal */
            align-items: flex-start;  /* Menyusun secara vertikal di bagian atas */
            margin-top: 20px;         /* Memberikan jarak dari atas layar atau header */
            text-align: center;       /* Menyusun teks di tengah */
            font-size: 30px;          /* Mengatur ukuran font */
        }

        .image-container {
            display: flex;
            justify-content: center; /* Menyusun gambar di tengah */
            margin-top: 20px;        /* Memberikan jarak antara teks dan gambar */
        }

        .company-image {
            width: 80%;              /* Mengatur lebar gambar agar responsif */
            max-width: 600px;        /* Maksimal lebar gambar */
            height: auto;            /* Menjaga proporsi gambar */
            border-radius: 8px;      /* Memberikan efek sudut melengkung pada gambar */
            margin-bottom: 30px;
        }

        /* Logo di kiri atas tetap terlihat saat scroll */
        .logo-container {
            position: fixed; /* Menjadikan logo tetap di kiri atas saat scroll */
            top: 10px;
            left: 10px;
            z-index: 1000; /* Memastikan logo tetap di atas konten lain */
        }

        .logo-container img {
            height: 100px;
        }

        /* Menambahkan jarak ke kanan untuk paragraf */
        .contact-info {
            text-align: center; /* Menyusun teks agar berada di tengah */
            margin-top: 20px; /* Memberikan jarak dari elemen sebelumnya */
        }

    </style>
</head>
<body>

    <!-- Logo di pojok kiri atas -->
    <div class="logo-container">
        <img src="{{ asset('images/logobnsp.png') }}" alt="Logo" class="logo">
    </div>
    
    <nav>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/tentang">Tentang Perusahaan</a></li>
            <li><a href="/kontak">Kontak Perusahaan</a></li>
        </ul>
    </nav>

    <h1 class="centered-heading">Kontak Perusahaan</h1>
    <div class="image-container">
        <img src="{{ asset('images/image.png') }}" alt="Foto Kontak Perusahaan" class="company-image">
    </div>

    <!-- Menambahkan kelas untuk memberi jarak pada informasi kontak -->
    <p class="contact-info">Email: info@perusahaan.com</p>
    <p class="contact-info">Telp: (021) 123456789</p>

</body>
</html>
