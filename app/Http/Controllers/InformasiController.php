<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Informasi_online;
use App\Models\User;
use Carbon\Carbon; // Pastikan untuk mengimpor Carbon untuk manipulasi tanggal
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan impor untuk Auth
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class InformasiController extends Controller
{
    public function permohonan_informasi()
    {
        if (Auth::user()->role == 'PU') {
            $informasi = Informasi_online::paginate(10);
        } else {
            $informasi = Informasi_online::where('ktp_sim', Auth::user()->nik)->paginate(10);
        }

        return view('frontend.dashboard.permohonan_informasi.permohonan_informasi', compact('informasi'));
    }


    public function tambah(Request $request)
    {
        // Ambil nilai jenis_dokumen dari Request
        $tipe_pemohon = $request->input('tipe_pemohon');
        $nama_pemohon = $request->input('nama_pemohon');
        $ktp_sim      = $request->input('ktp_sim');
        $nim          = $request->input('nim');
        $univ         = $request->input('univ');
        $alamat       = $request->input('alamat');
        $pekerjaan    = $request->input('pekerjaan');
        $no_hp        = $request->input('no_hp');
        $email        = $request->input('email');
        $info         = $request->input('info');
        $alasan       = $request->input('alasan');
        $memperoleh_info    = $request->input('memperoleh_info');
        $mengirim_info      = $request->input('mengirim_info');

        // Ambil file yang diunggah
        $ktp = $request->file('file_ktp');
        $akta = $request->file('file_akta');
        $suratkuasa = $request->file('file_suratkuasa');

        // Simpan file di folder public/images dengan nama yang unik
        $filePathKtp = $ktp->storeAs('public/permohonan/ktp', $ktp->getClientOriginalName());

        $filePathAkta = null;
        if ($akta !== null) {
            $filePathAkta = $akta->storeAs('public/permohonan/akta', $akta->getClientOriginalName());
        }

        $filePathSuratkuasa = null;
        if ($suratkuasa !== null) {
            $filePathSuratkuasa = $suratkuasa->storeAs('public/permohonan/suratkuasa', $suratkuasa->getClientOriginalName());
        }

        // Ubah path foto agar sesuai dengan path asset
        $filePathKtp = str_replace('public/', 'storage/', $filePathKtp);
        $filePathAkta = ($filePathAkta !== null) ? str_replace('public/', 'storage/', $filePathAkta) : null;
        $filePathSuratkuasa = ($filePathSuratkuasa !== null) ? str_replace('public/', 'storage/', $filePathSuratkuasa) : null;


        // Simpan data ke dalam tabel j_dokumens
        $informasi = new Informasi_online();
        $informasi->tipe_pemohon = $tipe_pemohon;
        $informasi->nama_pemohon = $nama_pemohon;
        $informasi->ktp_sim      = $ktp_sim;
        $informasi->nim          = $nim;
        $informasi->univ         = $univ;
        $informasi->alamat       = $alamat;
        $informasi->pekerjaan    = $pekerjaan;
        $informasi->no_hp        = $no_hp;
        $informasi->email        = $email;
        $informasi->info         = $info;
        $informasi->alasan       = $alasan;
        $informasi->memperoleh_info = $memperoleh_info;
        $informasi->mengirim_info   = $mengirim_info;
        $informasi->status_admin = "Menunggu Konfirmasi";
        $informasi->status_user  = "Menunggu Diterima";
        $informasi->file_ktp     = $filePathKtp;
        $informasi->file_akta    = $filePathAkta;
        $informasi->file_suratkuasa = $filePathSuratkuasa;


        // Menggunakan Carbon untuk mendapatkan tanggal dan waktu saat ini
        $now = Carbon::now();

        // Mengisi properti tgl_masuk dengan tanggal dan waktu saat ini
        $informasi->tgl_masuk = $now;

        // Mengisi properti yang lain dengan nilai default yang sesuai
        $informasi->tgl_proses = "-";
        $informasi->tgl_ditolak = "-";
        $informasi->tgl_selesai = "-";
        $informasi->tgl_konfirmasi = "-";

        $informasi->file_balasan = "-"; // Tetap menggunakan tanda hubung sebagai nilai default
        $informasi->file_perpanjangan = "-";
        $informasi->file_info = "-"; // Tetap menggunakan tanda hubung sebagai nilai default
        $informasi->no_reg = "-";

        $informasi->save();

        // Cek apakah ktp_sim sudah ada di User
        $user = User::where('nik', $informasi->ktp_sim)->first();

        // Jika tidak ada pengguna terkait, tambahkan pengguna baru
        if (!$user) {
            $user = new User();
            $user->nik = $informasi->ktp_sim;
            $user->name = $informasi->nama_pemohon;
            $user->password = Hash::make($ktp_sim); // Enkripsi password sebelum menyimpannya
            $user->instansi = "-";
            $user->role = "user";
            $user->save();
        }

        return back()->with('success', 'Data berhasil ditambahkan, untuk mengecek permohonan silahkan login dengan nik pemohon');
    }

    public function diterima(Request $request, $id)
    {
        $informasi = Informasi_online::find($id);

        // Lakukan validasi input yang diterima

        if ($request->hasFile('file_balasan')) {
            // Ambil file yang diunggah
            $file = $request->file('file_balasan');
            $filePath = $file->storeAs('public/permohonan/Surat-Balasan', $file->getClientOriginalName());
            $filePath = str_replace('public/', 'storage/', $filePath);
            $informasi->file_balasan = $filePath;
        }

        // Ubah data lain yang ingin diubah
        $informasi->no_reg = $request->input('no_reg');
        $informasi->tgl_proses = $request->input('tgl_proses');
        $informasi->status_admin = "Proses";
        $informasi->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function ditolak(Request $request, $id)
    {
        $informasi = Informasi_online::find($id);

        // Lakukan validasi input yang diterima

        if ($request->hasFile('file_balasan')) {
            // Ambil file yang diunggah
            $file = $request->file('file_balasan');
            $filePath = $file->storeAs('public/permohonan/Surat-Balasan', $file->getClientOriginalName());
            $filePath = str_replace('public/', 'storage/', $filePath);
            $informasi->file_balasan = $filePath;
        }

        // Ubah data lain yang ingin diubah
        $informasi->no_reg = $request->input('no_reg');
        $informasi->tgl_ditolak     = $request->input('tgl_ditolak');
        $informasi->status_admin    = "Ditolak";
        $informasi->status_user     = "Ditolak";
        $informasi->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function upload_perpanjangan(Request $request, $id)
    {
        $informasi = Informasi_online::find($id);

        // Lakukan validasi input yang diterima

        if ($request->hasFile('file_perpanjangan')) {
            // Ambil file yang diunggah
            $file = $request->file('file_perpanjangan');
            $filePath = $file->storeAs('public/permohonan/file-perpanjangan', $file->getClientOriginalName());
            $filePath = str_replace('public/', 'storage/', $filePath);
            $informasi->file_perpanjangan = $filePath;
        }

        $informasi->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function upload_file(Request $request, $id)
    {
        $informasi = Informasi_online::find($id);

        // Lakukan validasi input yang diterima

        if ($request->hasFile('file_info')) {
            // Ambil file yang diunggah
            $file = $request->file('file_info');
            $filePath = $file->storeAs('public/permohonan/file-informasi', $file->getClientOriginalName());
            $filePath = str_replace('public/', 'storage/', $filePath);
            $informasi->file_info = $filePath;
        }

        $now = Carbon::now();
        // Ubah data lain yang ingin diubah
        $informasi->tgl_selesai     = $now;
        $informasi->status_admin    = "Selesai";
        $informasi->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function konfirmasi_user(Request $request, $id)
    {
        if ($request->action === 'selesai') {
            $informasi = Informasi_online::find($id);
            $now = Carbon::now();
            // Ubah data lain yang ingin diubah
            $informasi->tgl_konfirmasi     = $now;
            $informasi->status_user        = "Selesai";
            $informasi->save();
            return back()->with('success', 'Data berhasil diperbarui.');
        } elseif ($request->action === 'keberatan') {
            $informasi = Informasi_online::find($id);
            $now = Carbon::now();
            // Ubah data lain yang ingin diubah
            $informasi->tgl_konfirmasi     = $now;
            $informasi->status_user        = "Keberatan";
            $informasi->save();
            return Redirect::route('permohonan.keberatan');
        }
    }
}
