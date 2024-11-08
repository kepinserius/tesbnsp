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
            font-size: 20px;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
      <!-- Logo di pojok kiri atas -->
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

    <h1>Kontak Perusahaan</h1>
    <p>Email: info@perusahaan.com</p>
    <p>Telp: (021) 123456789</p>
</body>
</html>
