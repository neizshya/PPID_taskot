<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\dashboardController;
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
    $response_berita = Http::get('https://portal.tasikmalayakota.go.id/api/berita');
    $berita = $response_berita->json(); // Mengubah respon ke format JSON
    $beritaLimited = array_slice($berita['items'], 0, 4);

    $response_pengumuman = Http::get('https://portal.tasikmalayakota.go.id/api/pengumuman');
    $pengumuman = $response_pengumuman->json(); // Mengubah respon ke format JSON
    $pengumumanLimited = array_slice($pengumuman['items'], 0, 4);

    return view('frontend.landing.main.main', compact('beritaLimited', 'pengumumanLimited'));
});

Route::get('/berita', function () {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/berita');
    $berita = $response->json();

    return view('frontend.landing.main.berita.berita', compact('berita'));
});

Route::get('/berita/{id}', function ($id) {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/berita');
    $berita = $response->json();

    $beritaId = $id; // Berita ID yang ingin Anda tampilkan

    $detailBerita = collect($berita['items'])->firstWhere('berita_id', $beritaId);

    return view('frontend.landing.main.berita.detail.beritadetail', compact('detailBerita'));
});
Route::get('/pengumuman', function () {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/pengumuman');
    $pengumuman = $response->json();

    return view('frontend.landing.main.pengumuman.pengumuman', compact('pengumuman'));
});
Route::get('/pengumuman/{id}', function ($id) {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/pengumuman');
    $pengumuman = $response->json();

    $pengumumanId = $id; // Berita ID yang ingin Anda tampilkan

    $detailPengumuman = collect($pengumuman['items'])->firstWhere('jadwal_id', $pengumumanId);

    return view('frontend.landing.main.pengumuman.detail.detail', compact('detailPengumuman'));
});

Route::get('/ppid-center', function () {
    return view('frontend.landing.ppidcenter.ppidcenter');
});
Route::get('/informasi-berkala', function () {
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
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/magazine');
    $magazine = $response->json();

    return view('frontend.landing.e-magazine.e-magazine', compact('magazine'));
});
Route::get('/span-lapor', function () {
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
Route::get('/ppid_pembantu_dashboard', function () {
    return view('frontend.dashboard.ppid_pembantu.ppid_pembantu');
});
Route::get('/input_file', function () {
    return view('frontend.dashboard.input_file.input');
});
Route::get('/jenis_dokumen', function () {
    return view('frontend.dashboard.jenis_dokumen_input.jenis_dokumen_input');
});
Route::get('/akun', function () {
    return view('frontend.dashboard.akun.akun');
});
Route::get('/list_akun', function () {
    return view('frontend.dashboard.list_akun.list_akun');
});
// Route::get('/permohonan_informasi_dashboard', function () {
//     return view('frontend.dashboard.permohonan_informasi.permohonan_informasi');
// });
Route::get('/permohonan_informasi_dashboard', [dashboardController::class, 'permohonan_informasi']);
Route::get('/permohonan_keberatan_dashboard', [dashboardController::class, 'permohonan_keberatan']);

Route::post('/login', [AuthController::class, 'login'])->name('login');
