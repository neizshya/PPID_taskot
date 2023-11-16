<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.landing.main.main');
});
Route::get('/berita', function () {
    return view('frontend.landing.main.berita.berita');
});

Route::get('/berita/namaberita', function () {
    return view('frontend.landing.main.berita.detail.beritadetail');
});
Route::get('/pengumuman', function () {
    return view('frontend.landing.main.pengumuman.pengumuman');
});
Route::get('/pengumuman/detail', function () {
    return view('frontend.landing.main.pengumuman.detail.detail');
});
Route::get('/ppid-center', function () {
    return view('frontend.landing.ppidcenter.ppidcenter');
});
Route::get('/informasi_berkala', function () {
    return view('frontend.landing.informasi_berkala.informasiberkala');
});
Route::get('/mekanisme_perolehan_informasi', function () {
    return view('frontend.landing.mekanisme_perolehan_informasi.mekanisme_perolehan_informasi');
});
Route::get('/informasi_setiap_saat', function () {
    return view('frontend.landing.informasi_setiap_saat.informasi_setiap_saat');
});
Route::get('/informasi_serta_merta', function () {
    return view('frontend.landing.informasi_serta_merta.informasi_serta_merta');
});
Route::get('/ppid_utama', function () {
    return view('frontend.landing.ppid_utama.ppid_utama');
});
Route::get('/ppid_pembantu', function () {
    return view('frontend.landing.ppid_pembantu.ppid_pembantu');
});
Route::get('/ppid_pembantu/detail', function () {
    return view('frontend.landing.ppid_pembantu.detail.ppid_pembantu_detail');
});
Route::get('/e-magazine', function () {
    return view('frontend.landing.e-magazine.e-magazine');
});
Route::get('/span', function () {
    return view('frontend.landing.span_lapor.span_lapor');
});
Route::get('/permohonan_informasi_online', function () {
    return view('frontend.landing.permohonan_online.permohonan_informasi_online.permohonan_informasi_online');
});
Route::get('/permohonan_keberatan_online', function () {
    return view('frontend.landing.permohonan_online.permohonan_keberatan_online.permohonan_keberatan_online');
});
Route::get('/search', function () {
    return view('frontend.landing.search.search');
});
Route::get('/dashboard', function () {
    return view('frontend.dashboard.main.main');
});
Route::get('/caraousel', function () {
    return view('frontend.dashboard.caraousel.caraousel');
});
Route::get('/input_file', function () {
    return view('frontend.dashboard.input_file.input');
});
Route::get('/permohonan_informasi_dashboard', function () {
    return view('frontend.dashboard.permohonan_informasi.permohonan_informasi');
});

// Route::get('/', function () {
//     return view('welcome');
// });
