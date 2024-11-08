<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KreditController;

Route::get('/', [KreditController::class, 'index']); 
Route::post('/hitung', [KreditController::class, 'hitung']);
Route::get('/tentang', function() {
    return view('kredit.tentang');
});
Route::get('/kontak', function() {
    return view('kredit.kontak'); 
});

