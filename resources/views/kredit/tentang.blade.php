<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Perusahaan</title>
  
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

        /* Styling untuk Menempatkan <h1> di Atas Tengah Layar */
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

    <h1 class="centered-heading">Tentang Perusahaan</h1>
    <div class="image-container">
        <img src="{{ asset('images/image.png') }}" alt="Foto Tentang Perusahaan" class="company-image">
    </div>
    <p>Perusahaan kami bergerak di bidang penjualan mobil dan layanan pembiayaan kredit mobil. Kami memiliki berbagai pilihan mobil dengan berbagai tipe dan harga yang sesuai dengan kebutuhan Anda.</p>
</body>
</html>
