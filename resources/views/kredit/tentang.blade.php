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
            font-size: 20px;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
  
      <div style="position: absolute; top: 10px; left: 10px;">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    </div>
    
    <nav>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/tentang">Tentang Perusahaan</a></li>
            <li><a href="/kontak">Kontak Perusahaan</a></li>
        </ul>
    </nav>

    <h1>Tentang Perusahaan</h1>
    <p>Perusahaan kami bergerak di bidang penjualan mobil dan layanan pembiayaan kredit mobil. Kami memiliki berbagai pilihan mobil dengan berbagai tipe dan harga yang sesuai dengan kebutuhan Anda.</p>
</body>
</html>
