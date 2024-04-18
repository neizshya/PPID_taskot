<?php

use App\Http\Controllers\Daftar_infoController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\Judul_dokController;
use App\Http\Controllers\KeberatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembantuController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\UserController;
use App\Models\File;
use App\Models\Informasi_online;
use App\Models\J_dokumen;
use App\Models\Judul_dok;
use App\Models\Keberatan_online;
use App\Models\P_Pembantu;
use App\Models\Slide;
use App\Models\User;

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

Route::get('/login', function () {
    if (!Auth::check()) {
        // Pengguna belum login, tampilkan pesan dan arahkan kembali
        return redirect('/')->with('error', 'Silakan login terlebih dahulu');
    }

    // Pengguna sudah login, tampilkan konten yang diinginkan
    $response_berita = Http::get('https://portal.tasikmalayakota.go.id/api/berita');
    $berita = $response_berita->json();
    $beritaLimited = array_slice($berita['items'], 0, 4);

    $response_pengumuman = Http::get('https://portal.tasikmalayakota.go.id/api/pengumuman');
    $pengumuman = $response_pengumuman->json();
    $pengumumanLimited = array_slice($pengumuman['items'], 0, 4);

    $slide = Slide::all();

    return view('frontend.landing.main.main', compact('beritaLimited', 'pengumumanLimited', 'slide'));
})->name('login');

Route::post('/proses-login', [LoginController::class, 'login'])->name('login.proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    $response_berita = Http::get('https://portal.tasikmalayakota.go.id/api/berita');
    $berita = $response_berita->json(); // Mengubah respon ke format JSON
    $beritaLimited = array_slice($berita['items'], 0, 4);

    $response_pengumuman = Http::get('https://portal.tasikmalayakota.go.id/api/pengumuman');
    $pengumuman = $response_pengumuman->json(); // Mengubah respon ke format JSON
    $pengumumanLimited = array_slice($pengumuman['items'], 0, 4);

    $slide = Slide::all();

    return view('frontend.landing.main.main', compact('beritaLimited', 'pengumumanLimited', 'slide'));
})->name('home');


Route::get('/berita', function () {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/berita');
    $berita = $response->json();

    return view('frontend.landing.main.berita.berita', compact('berita'));
})->name('berita');

Route::get('/berita/{id}', function ($id) {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/berita');
    $berita = $response->json();

    $beritaId = $id; // Berita ID yang ingin Anda tampilkan

    $detailBerita = collect($berita['items'])->firstWhere('berita_id', $beritaId);

    return view('frontend.landing.main.berita.detail.beritadetail', compact('detailBerita'));
})->name('detail.berita');
Route::get('/pengumuman', function () {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/pengumuman');
    $pengumuman = $response->json();

    return view('frontend.landing.main.pengumuman.pengumuman', compact('pengumuman'));
})->name('pengumuman');
Route::get('/pengumuman/{id}', function ($id) {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/pengumuman');
    $pengumuman = $response->json();

    $pengumumanId = $id; // Berita ID yang ingin Anda tampilkan

    $detailPengumuman = collect($pengumuman['items'])->firstWhere('jadwal_id', $pengumumanId);

    return view('frontend.landing.main.pengumuman.detail.detail', compact('detailPengumuman'));
})->name('pengumuman.detail');

Route::get('/ppid-center', function () {
    return view('frontend.landing.ppidcenter.ppidcenter');
})->name('ppid.center');
Route::get('/dik-ppid', function () {
    return view('frontend.landing.dik_ppid.dik_ppid');
})->name('ppid.dik');
Route::get('/informasi-berkala', function () {
    $file   = File::where('info', 'Informasi berkala')->get();
    return view('frontend.landing.informasi_berkala.informasiberkala', ['file' => $file]);
})->name('informasi-berkala');
Route::get('/mekanisme_perolehan_informasi', function () {
    $file   = File::where('dok', 'Mekanisme Perolehan Informasi')->get();
    return view('frontend.landing.mekanisme_perolehan_informasi.mekanisme_perolehan_informasi', ['file' => $file]);
})->name('perolehan-informasi');
Route::get('/informasi-setiap-saat', function () {
    $file   = File::where('info', 'Informasi setiap saat')->get();
    return view('frontend.landing.informasi_setiap_saat.informasi_setiap_saat',  ['file' => $file]);
})->name('informasi-setiap-saat');
Route::get('/informasi-serta-merta', function () {
    $file   = File::where('info', 'Informasi serta merta')->get();
    return view('frontend.landing.informasi_serta_merta.informasi_serta_merta',  ['file' => $file]);
})->name('informasi-serta-merta');
Route::get('/ppid-utama', function () {
    $file   = File::where('layanan', 'PPID Utama')->get();
    return view('frontend.landing.ppid_utama.ppid_utama', ['file' => $file]);
})->name('ppid.utama');
Route::get('/ppid-pembantu', function () {
    $layanan = P_Pembantu::all();
    return view('frontend.landing.ppid_pembantu.ppid_pembantu', ['layanan' => $layanan]);
})->name('ppid.pembantu');
Route::get('/ppid_pembantu/detail/{id}', function ($id) {
    $ppid = P_Pembantu::find($id);  // Menggunakan metode find untuk mendapatkan record dengan id tertentu
    $file = File::where('instansi', $ppid->nama_instansi)->get();  // Menggunakan $ppid->nama_instansi untuk mencari file
    return view('frontend.landing.ppid_pembantu.detail.ppid_pembantu_detail', ['file' => $file, 'ppid' => $ppid]);
})->name('ppid-pembantu.detail');

Route::get('/e-magazine', function () {
    $response = Http::get('https://portal.tasikmalayakota.go.id/api/magazine');
    $magazine = $response->json();

    return view('frontend.landing.e-magazine.e-magazine', compact('magazine'));
})->name('e-magazine');
Route::get('/span-lapor', function () {
    return view('frontend.landing.span_lapor.span_lapor');
})->name('span-lapor');
Route::get('/permohonan_informasi_online', function () {
    return view('frontend.landing.permohonan_online.permohonan_informasi_online.permohonan_informasi_online');
})->name('permohonan.informasi');
Route::post('/tambah-informasi-online', [InformasiController::class, 'tambah'])->name('informasi.tambah');

Route::get('/permohonan_keberatan_online', function () {
    return view('frontend.landing.permohonan_online.permohonan_keberatan_online.permohonan_keberatan_online');
})->name('permohonan.keberatan');
Route::post('/tambah-keberatan-online', [KeberatanController::class, 'tambah'])->name('keberatan.tambah');

Route::get('/search', function () {
    $searchTerm = request('search'); // Ambil nilai pencarian dari query string

    // Lakukan operasi pencarian sesuai kebutuhan
    if ($searchTerm) {
        $files = File::where('judul', 'like', '%' . $searchTerm . '%')->get();
    } else {
        // Jika tidak ada pencarian, ambil semua file
        $files = File::all();
    }

    return view('frontend.landing.search.search', compact('files', 'searchTerm'));
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        // Mendapatkan jumlah data dengan kondisi where
        $total   = Informasi_online::count();
        $masuk   = Informasi_online::where('status_admin', '=', 'Menunggu Konfirmasi')->count();
        $proses  = Informasi_online::where('status_admin', '=', 'Proses')->count();
        $tolak   = Informasi_online::where('status_admin', '=', 'Ditolak')->count();
        $selesai = Informasi_online::where('status_admin', '=', 'Selesai')->count();

        $total_keberatan   = Keberatan_online::count();
        $masuk_keberatan   = Keberatan_online::where('status_admin', '=', 'Menunggu Konfirmasi')->count();
        $proses_keberatan  = Keberatan_online::where('status_admin', '=', 'Proses')->count();
        $tolak_keberatan   = Keberatan_online::where('status_admin', '=', 'Ditolak')->count();
        $selesai_keberatan = Keberatan_online::where('status_admin', '=', 'Selesai')->count();

        // Menampilkan jumlah data
        return view('frontend.dashboard.main.main', compact('total', 'masuk', 'proses', 'tolak', 'selesai', 'total_keberatan', 'masuk_keberatan', 'proses_keberatan', 'tolak_keberatan', 'selesai_keberatan'));
    });

    //caraousel-slide
    Route::get('/caraousel', function () {
        $slide = Slide::paginate(4);
        return view('frontend.dashboard.caraousel.caraousel', ['slide' => $slide]);
    });
    Route::post('/tambah-slide', [SlideController::class, 'tambah'])->name('slide.tambah');
    // Rute untuk halaman edit
    Route::get('/slide/{id}/edit', [SlideController::class, 'edit'])->name('slide.edit');
    // Rute untuk melakukan update
    Route::put('/slide/{id}', [SlideController::class, 'update'])->name('slide.update');
    // Rute untuk melakukan delete
    Route::delete('/hapus-slide/{id}', [SlideController::class, 'destroy'])->name('delete');


    Route::get('/ppid_pembantu_dashboard', function () {
        $p_pembantus = P_pembantu::paginate(4); // Mengambil semua data pengguna dari tabel 'users'
        return view('frontend.dashboard.ppid_pembantu.ppid_pembantu',  ['p_pembantus' => $p_pembantus]);
    });

    Route::post('/tambah-ppid-pembantu', [PembantuController::class, 'tambah'])->name('tambah-ppid-pembantu');
    // Rute untuk halaman edit
    Route::get('/pembantu/{id}/edit', [PembantuController::class, 'edit'])->name('pembantu.edit');
    // Rute untuk melakukan update
    Route::put('/pembantu/{id}', [PembantuController::class, 'update'])->name('pembantu.update');
    // Rute untuk melakukan delete
    Route::delete('/hapus-pembantu/{id}', [PembantuController::class, 'destroy'])->name('hapus_pembantu');


    Route::get('/input_file', function () {
        $pembantuList = P_Pembantu::all();
        $dokumenList = J_dokumen::all();
        if (Auth::user()->role == 'PU') {
            $file   = File::paginate(5);
        } else {
            $file = File::where('instansi', Auth::user()->instansi)->paginate(5);
        }
        return view('frontend.dashboard.input_file.input', ['pembantuList' => $pembantuList, 'dokumenList' => $dokumenList, 'file' => $file]);
    });
    Route::get('/searchFile', [FileController::class, 'search'])->name('searchFile');
    Route::post('/tambah-file', [FileController::class, 'tambah'])->name('file.tambah');
    // Rute untuk melakukan update
    Route::put('/update-file/{id}', [FileController::class, 'update'])->name('file.update');
    // Rute untuk melakukan delete
    Route::delete('/hapus-file/{id}', [FileController::class, 'destroy'])->name('file.delete');

    Route::get('/daftar_info', function () {
        $pembantuList = P_Pembantu::all();
        $dokumenList = Judul_dok::all();
        if (Auth::user()->role == 'PU') {
            $file   = File::paginate(5);
        } else {
            $file = File::where('instansi', Auth::user()->instansi)->paginate(5);
        }
        return view('frontend.dashboard.daftar_info.daftar_info', ['pembantuList' => $pembantuList, 'dokumenList' => $dokumenList, 'file' => $file]);
    });
    Route::post('/tambah-info', [Daftar_infoController::class, 'tambah'])->name('info.tambah');
    Route::delete('/hapus-info/{id}', [Daftar_infoController::class, 'destroy'])->name('info.delete');


    Route::get('/jenis_dokumen', function () {
        $dokumen = J_dokumen::paginate(5);
        return view('frontend.dashboard.jenis_dokumen_input.jenis_dokumen_input', ['dokumen' => $dokumen]);
    });
    Route::get('/searchJenis', [JenisController::class, 'search'])->name('searchJenis');
    Route::post('/tambah-jenis', [JenisController::class, 'tambah'])->name('jenis.tambah');
    // Rute untuk melakukan update
    Route::put('/jenis/{id}', [JenisController::class, 'update'])->name('jenis.update');
    // Rute untuk melakukan delete
    Route::delete('/hapus-jenis/{id}', [JenisController::class, 'destroy'])->name('jenis.delete');

    Route::get('/judul_dokumen', function () {
        $judul = Judul_dok::paginate(5);
        $dokumenList = J_dokumen::all();
        return view('frontend.dashboard.judul_dokumen.judul_dokumen', ['judul' => $judul, 'dokumenList' => $dokumenList]);
    });
    Route::get('/searchJudul', [Judul_dokController::class, 'search'])->name('searchJudul');
    Route::post('/tambah-judul', [Judul_dokController::class, 'tambah'])->name('judul.tambah');
    // Rute untuk melakukan update
    Route::put('/judul/{id}', [Judul_dokController::class, 'update'])->name('judul.update');
    // Rute untuk melakukan delete
    Route::delete('/hapus-judul/{id}', [Judul_dokController::class, 'destroy'])->name('judul.delete');


    Route::get('/akun', function () {
        return view('frontend.dashboard.akun.akun');
    });
    Route::post('/change-password',  [UserController::class, 'changePassword'])->name('change.password');
    Route::put('/update-profile/{id}', [UserController::class, 'updateProfile'])->name('update.profile');

    Route::get('/list_akun', function () {
        $pembantuList = P_Pembantu::all();
        $user = User::paginate(5); // Menggunakan Eloquent untuk mengambil data pengguna dengan paginasi 5 item per halaman

        return view('frontend.dashboard.list_akun.list_akun', ['pembantuList' => $pembantuList, 'user' => $user]);
    });

    Route::post('/tambah-akun', [UserController::class, 'tambah'])->name('akun.tambah');
    // Rute untuk melakukan update
    Route::put('/akun-update/{id}', [UserController::class, 'update'])->name('akun.update');
    // Rute untuk melakukan delete
    Route::delete('/hapus-akun/{id}', [UserController::class, 'destroy'])->name('akun.delete');
    Route::put('/akun-reset-password/{id}', [UserController::class, 'resetPassword'])->name('user.reset.password');


    // Route::get('/permohonan_informasi_dashboard', function () {
    //     return view('frontend.dashboard.permohonan_informasi.permohonan_informasi');
    // });
    Route::get('/permohonan_informasi_dashboard', [InformasiController::class, 'permohonan_informasi']);
    // Rute untuk melakukan diterima
    Route::put('/permohonan_informasi_dashboard-diterima/{id}', [InformasiController::class, 'diterima'])->name('informasi.diterima');
    // Rute untuk melakukan ditolak
    Route::put('/permohonan_informasi_dashboard-ditolak/{id}', [InformasiController::class, 'ditolak'])->name('informasi.ditolak');
    // Rute untuk melakukan upload file informasi
    Route::put('/permohonan_informasi_dashboard-upload-file/{id}', [InformasiController::class, 'upload_file'])->name('informasi.upload-info');
    Route::put('/permohonan_informasi_dashboard-upload-perpanjangan/{id}', [InformasiController::class, 'upload_perpanjangan'])->name('informasi.upload-perpanjangan');
    // Rute untuk melakukan konfirmasi-user
    Route::put('/permohonan_informasi_dashboard-konfirmasi-user/{id}', [InformasiController::class, 'konfirmasi_user'])->name('informasi.konfirmasi-user');

    Route::get('/permohonan_keberatan_dashboard', [KeberatanController::class, 'permohonan_keberatan']);
    // Rute untuk melakukan diterima
    Route::put('/permohonan_keberatan_dashboard-diterima/{id}', [KeberatanController::class, 'diterima'])->name('keberatan.diterima');
    // Rute untuk melakukan ditolak
    Route::put('/permohonan_keberatan_dashboard-ditolak/{id}', [KeberatanController::class, 'ditolak'])->name('keberatan.ditolak');
    // Rute untuk melakukan upload file informasi
    Route::put('/permohonan_keberatan_dashboard-upload-file/{id}', [KeberatanController::class, 'upload_file'])->name('keberatan.upload-info');
    // Rute untuk melakukan konfirmasi-user
    Route::put('/permohonan_keberatan_dashboard-konfirmasi-user/{id}', [KeberatanController::class, 'konfirmasi_user'])->name('keberatan.konfirmasi-user');
});
