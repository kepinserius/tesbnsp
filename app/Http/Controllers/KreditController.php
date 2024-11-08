<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreditController extends Controller
{
    public function index()
    {
        return view('kredit.index');
    }

    public function hitung(Request $request)
    {
        $hargaMobil = $request->input('harga_mobil');
        $dp = $request->input('dp');
        $tenor = $request->input('tenor'); // Tenor dalam tahun
    
        // Mengonversi tenor yang dimasukkan dalam tahun ke bulan
        $tenorBulan = $tenor * 12; 
    
        // Menghitung DP dalam jumlah uang
        $dpValue = ($dp / 100) * $hargaMobil;
    
        // Menghitung bunga 20% dari harga mobil
        $bunga = $hargaMobil * 0.2;
    
        // Menghitung total harga mobil setelah ditambah bunga
        $totalHarga = $hargaMobil + $bunga;
    
        // Menghitung nominal angsuran per bulan
        $angsuranPerBulan = ($totalHarga - $dpValue) / $tenorBulan;
    
        // Mengirimkan data ke view
        return view('kredit.hasil', compact('hargaMobil', 'dp', 'tenor', 'tenorBulan', 'bunga', 'dpValue', 'angsuranPerBulan'));
    }
    

}
