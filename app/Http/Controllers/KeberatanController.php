<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Keberatan_online;
use Carbon\Carbon; // Pastikan untuk mengimpor Carbon untuk manipulasi tanggal
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan impor untuk Auth

class KeberatanController extends Controller
{
    public function permohonan_keberatan()
    {
        if (Auth::user()->role == 'PP') {
            $keberatan = Keberatan_online::paginate(10);
        } else {
            $keberatan = Keberatan_online::where('ktp', Auth::user()->nik)->paginate(10);
        }

        return view('frontend.dashboard.permohonan_keberatan.permohonan_keberatan', compact('keberatan'));
    }

    public function tambah(Request $request)
    {
        // Ambil nilai jenis_dokumen dari Request
        $no_reg       = $request->input('no_reg');
        $nama_pemohon = $request->input('nama_pemohon');
        $ktp          = $request->input('ktp');
        $alamat       = $request->input('alamat');
        $pekerjaan    = $request->input('pekerjaan');
        $no_hp        = $request->input('no_hp');
        $email        = $request->input('email');
        $info_dimohon = $request->input('info_dimohon');
        $tujuan_info  = $request->input('tujuan_info');
        $memperoleh_info    = $request->input('memperoleh_info');
        $mengirim_info      = $request->input('mengirim_info');
        $alasan_keberatan   = $request->input('alasan_keberatan');
        $kasus_posisi       = $request->input('kasus_posisi');

        // Ambil file yang diunggah
        $ktp = $request->file('file_ktp');

        // Simpan file di folder public/images dengan nama yang unik
        $filePathKtp = $ktp->storeAs('public/Keberatan/ktp', $ktp->getClientOriginalName());

        // Ubah path foto agar sesuai dengan path asset
        $filePathKtp = str_replace('public/', 'storage/', $filePathKtp);


        // Simpan data ke dalam tabel j_dokumens
        $keberatan = new Keberatan_online();
        $keberatan->no_reg       = $no_reg;
        $keberatan->nama_pemohon = $nama_pemohon;
        $keberatan->ktp          = $ktp;
        $keberatan->alamat       = $alamat;
        $keberatan->pekerjaan    = $pekerjaan;
        $keberatan->no_hp        = $no_hp;
        $keberatan->email        = $email;
        $keberatan->info_dimohon = $info_dimohon;
        $keberatan->tujuan_info  = $tujuan_info;
        $keberatan->memperoleh_info = $memperoleh_info;
        $keberatan->mengirim_info   = $mengirim_info;
        $keberatan->status_admin = "Menunggu Konfirmasi";
        $keberatan->status_user  = "Menunggu Diterima";
        $keberatan->alasan_keberatan = $alasan_keberatan;
        $keberatan->kasus_posisi = $kasus_posisi;
        $keberatan->file_ktp     = $filePathKtp;


        // Menggunakan Carbon untuk mendapatkan tanggal dan waktu saat ini
        $now = Carbon::now();

        // Mengisi properti tgl_masuk dengan tanggal dan waktu saat ini
        $keberatan->tgl_masuk = $now;

        // Mengisi properti yang lain dengan nilai default yang sesuai
        $keberatan->tgl_proses = "-";
        $keberatan->tgl_ditolak = "-";
        $keberatan->tgl_selesai = "-";
        $keberatan->tgl_konfirmasi = "-";

        $keberatan->file_balasan = "-"; // Tetap menggunakan tanda hubung sebagai nilai default
        $keberatan->file_info = "-"; // Tetap menggunakan tanda hubung sebagai nilai default

        $keberatan->save();

        return back()->with('success', 'Data berhasil ditambahkan, untuk mengecek permohonan silahkan login dengan nik pemohon');
    }

    public function diterima(Request $request, $id)
    {
        $keberatan = Keberatan_online::find($id);

        // Lakukan validasi input yang diterima

        if ($request->hasFile('file_balasan')) {
            // Ambil file yang diunggah
            $file = $request->file('file_balasan');
            $filePath = $file->storeAs('public/Keberatan/Surat-Balasan', $file->getClientOriginalName());
            $filePath = str_replace('public/', 'storage/', $filePath);
            $keberatan->file_balasan = $filePath;
        }

        // Ubah data lain yang ingin diubah
        $keberatan->tgl_proses = $request->input('tgl_proses');
        $keberatan->status_admin = "Proses";
        $keberatan->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function ditolak(Request $request, $id)
    {
        $keberatan = Keberatan_online::find($id);

        // Lakukan validasi input yang diterima

        if ($request->hasFile('file_balasan')) {
            // Ambil file yang diunggah
            $file = $request->file('file_balasan');
            $filePath = $file->storeAs('public/Keberatan/Surat-Balasan', $file->getClientOriginalName());
            $filePath = str_replace('public/', 'storage/', $filePath);
            $keberatan->file_balasan = $filePath;
        }

        // Ubah data lain yang ingin diubah
        $keberatan->tgl_ditolak     = $request->input('tgl_ditolak');
        $keberatan->status_admin    = "Ditolak";
        $keberatan->status_user     = "Ditolak";
        $keberatan->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function upload_file(Request $request, $id)
    {
        $keberatan = Keberatan_online::find($id);

        // Lakukan validasi input yang diterima

        if ($request->hasFile('file_info')) {
            // Ambil file yang diunggah
            $file = $request->file('file_info');
            $filePath = $file->storeAs('public/Keberatan/file-informasi', $file->getClientOriginalName());
            $filePath = str_replace('public/', 'storage/', $filePath);
            $keberatan->file_info = $filePath;
        }

        $now = Carbon::now();
        // Ubah data lain yang ingin diubah
        $keberatan->tgl_selesai     = $now;
        $keberatan->status_admin    = "Selesai";
        $keberatan->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function konfirmasi_user(Request $request, $id)
    {
        if ($request->action === 'sesuai') {
            $keberatan = Keberatan_online::find($id);
            $now = Carbon::now();
            // Ubah data lain yang ingin diubah
            $keberatan->tgl_konfirmasi     = $now;
            $keberatan->status_user        = "Sesuai";
            $keberatan->save();
        } elseif ($request->action === 'tidak_sesuai') {
            $keberatan = Keberatan_online::find($id);
            $now = Carbon::now();
            // Ubah data lain yang ingin diubah
            $keberatan->tgl_konfirmasi     = $now;
            $keberatan->status_user        = "Tidak Sesuai";
            $keberatan->save();
        }

        return back()->with('success', 'Data berhasil diperbarui.');
    }
}
