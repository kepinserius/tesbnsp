<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Kredit Mobil</title>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

    <!-- Custom CSS untuk Navigasi -->
    <style>
        /* Styling Umum untuk Halaman */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    margin-top: 30px;
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
            font-size: 20px;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #007bff;
        }
    </style>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>
<body>
    <!-- Logo di pojok kiri atas -->
    <div style="position: absolute; top: 10px; left: 10px;">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    </div>

    <!-- Menu Navigasi -->
    <nav>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="tentang">Tentang Perusahaan</a></li>
            <li><a href="kontak">Kontak Perusahaan</a></li>
        </ul>
    </nav>

    <!-- Slider Gambar -->
    <div class="slider">
        <div><img src="image1.jpg" alt="Image 1"></div>
        <div><img src="image2.jpg" alt="Image 2"></div>
        <div><img src="image3.jpg" alt="Image 3"></div>
    </div>

    <h1>Perhitungan Kredit Mobil</h1>

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

    
    <!-- Inisialisasi Slick Carousel -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                dots: true
            });
        });
    </script>
</body>
</html>
