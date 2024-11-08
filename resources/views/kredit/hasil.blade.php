<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Kredit Mobil</title>

    <!-- Custom CSS untuk Navigasi -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
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
            font-size: 30px;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #007bff;
        }

        /* Logo di kiri atas */
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
        <img src="{{ asset('images/logobnsp.png') }}" alt="Logo">
    </div>

    <!-- Menu Navigasi -->
    <nav>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="tentang">Tentang Perusahaan</a></li>
            <li><a href="kontak">Kontak Perusahaan</a></li>
        </ul>
    </nav>

    <h1 style="text-align: center; color: #007bff;">Hasil Perhitungan Kredit Mobil</h1>

    <!-- Tabel Hasil Perhitungan -->
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th style="text-align: left; padding: 10px; background-color: #c1c1c1;">Deskripsi</th>
                <th style="text-align: left; padding: 10px; background-color: #c1c1c1;">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Harga Mobil</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Rp {{ number_format($hargaMobil) }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">DP (%)</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $dp }}%</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Tenor</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $tenor }} tahun ({{ $tenorBulan }} bulan)</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Bunga</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Rp {{ number_format($bunga) }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">DP dalam Uang</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Rp {{ number_format($dpValue) }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Nominal Angsuran Per Bulan</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Rp {{ number_format($angsuranPerBulan, 2) }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
