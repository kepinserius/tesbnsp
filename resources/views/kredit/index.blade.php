<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Kredit Mobil</title>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <!-- Custom CSS untuk Styling -->
    <style>
        /* Styling Umum untuk Halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .slider {
        max-width: 55%; /* Anda dapat menyesuaikan lebar sesuai kebutuhan */
        margin: 20px auto; /* Ini akan memusatkan elemen secara horizontal */
        margin-bottom: 20px
        }

        .slider img {
        width: 100%; /* Mengatur gambar agar sesuai dengan lebar slider */
        height: 40; /* Membuat tinggi gambar otomatis menyesuaikan */
        display: block;
        }


        h1 {
            text-align: center;
            margin-top: 30px;
            color: #007bff;
        }

        /* Styling untuk Header dengan Logo dan Nama Perusahaan */
        .header-container {
            text-align: center;
            margin-top: 20px;
        }

        .logo-container {
    position: fixed; /* Membuat logo tetap di posisi kiri atas saat scroll */
    top: 3px; /* Jarak dari atas */
    left: 3px; /* Jarak dari kiri */
    display: inline-block;  /* Membuat link dalam bentuk blok inline */
    text-decoration: none;  /* Menghapus garis bawah dari link */
    z-index: 1000; /* Memastikan logo berada di atas konten lainnya */
}

.logo-container img {
    height: 100px; /* Mengatur ukuran logo */
}


        .company-name {
            font-size: 40px;
            font-weight: bold;
            color: #007bff;
            margin-top: 20px;
            margin-bottom: 10px
        }

        /* Styling untuk Navigasi */
        nav {
            margin-top: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 20px;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #007bff;
        }

        /* Styling untuk Form */
        .kredit-form {
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Styling untuk Setiap Input */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Styling untuk Tombol Submit */
        .submit-btn {
            width: 100%;
            padding: 15px;
            font-size: 18px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #5e6c7a;
        }

        .submit-btn:active {
            background-color: #003f7f;
        }

        /* Styling Footer */
footer {
    background-color: #007bff;
    color: white;
    text-align: center;
    padding: 20px 0;
    position: relative;
    bottom: 0;
    width: 100%;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
}

footer a {
    color: #ffffff;
    text-decoration: none;
    margin: 0 10px;
}

footer a:hover {
    text-decoration: underline;
}

    </style>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>

    <!-- Header dengan Logo, Nama Perusahaan, dan Navigasi -->
    <div class="logo-container">
        <a href="/">
            <img src="{{ asset('images/logobnsp.png') }}" alt="Logo">
        </a>
    </div>
    

    <div class="header-container">
        <div class="company-name">Kevin Ganteng</div>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/tentang">Tentang Perusahaan</a></li>
                <li><a href="/kontak">Kontak Perusahaan</a></li>
            </ul>
        </nav>
    </div>

    <div class="slider">
        <div><img src="{{ asset('images/image.png') }}" alt="Image 1"></div>
        <div><img src="{{ asset('images/image.png') }}" alt="Image 2"></div>
        <div><img src="{{ asset('images/image.png') }}" alt="Image 3"></div>
    </div>
    
    <h1>Perhitungan Kredit Mobil</h1>

    <!-- Form Perhitungan Kredit -->
    <form action="/hitung" method="POST" class="kredit-form">
        @csrf
        <div class="form-group">
            <label for="harga_mobil">Harga Mobil:</label>
            <input type="number" name="harga_mobil" required min="1000000" placeholder="Masukkan harga mobil">
        </div>

        <div class="form-group">
            <label for="dp">DP (%):</label>
            <input type="number" name="dp" required min="0" max="100" placeholder="Masukkan DP (%)">
        </div>

        <div class="form-group">
            <label for="tenor">Tenor (Tahun):</label>
            <input type="number" name="tenor" required min="1" placeholder="Masukkan tenor (tahun)">
        </div>

        <button type="submit" class="submit-btn">Hitung Angsuran</button>
    </form>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Nama Perusahaan. Semua hak dilindungi undang-undang.</p>
            <p><a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a></p>
        </div>
    </footer>

    <!-- Inisialisasi Slick Carousel -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 800,
                arrows: true,
                dots: true
            });
        });
    </script>

</body>
</html>
