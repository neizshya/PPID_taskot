<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\P_pembantu; // Sesuaikan dengan model yang sesuai


class PembantuController extends Controller
{
    public function tambah(Request $request)
    {
        // Ambil nilai id dan nama_instansi dari Request
        $namaInstansi = $request->input('nama_instansi');

        // Ambil file yang diunggah
        $file = $request->file('foto');

        // Simpan file di folder public/images dengan nama yang unik
        $filePath = $file->storeAs('public/image/pembantu', $file->getClientOriginalName());

        // Ubah path foto agar sesuai dengan path asset
        $filePath = str_replace('public/', 'storage/', $filePath);

        // Simpan data ke dalam tabel p_pembantu
        $pembantu = new P_pembantu();
        $pembantu->nama_instansi = $namaInstansi;
        $pembantu->foto = $filePath; // Simpan path foto ke dalam kolom foto
        $pembantu->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pembantu = P_pembantu::find($id);
        return view('edit_pembantu', compact('pembantu'));
    }

    public function update(Request $request, $id)
    {
        // Temukan entitas P_pembantu berdasarkan ID
        $pembantu = P_pembantu::find($id);

        // Lakukan validasi input yang diterima
        $request->validate([
            'nama_instansi' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Batasan ukuran dan tipe file dapat disesuaikan
        ]);

        // Jika ada file foto yang diunggah
        if ($request->hasFile('foto')) {
            // Ambil file yang diunggah
            $file = $request->file('foto');
            // Simpan foto ke direktori yang ditentukan, dan dapatkan path-nya
            $filePath = $file->storeAs('public/image/pembantu', $file->getClientOriginalName());
            // Ubah path foto agar sesuai dengan path asset
            $filePath = str_replace('public/', 'storage/', $filePath);
            $pembantu->foto = $filePath;
        }

        // Ubah data lain yang ingin diubah
        $pembantu->nama_instansi = $request->input('nama_instansi');
        $pembantu->save();

        // Kembalikan dengan pesan sukses
        return back()->with('success', 'Data berhasil diperbarui.');
    }


    public function destroy($id)
    {
        // Ambil data berdasarkan ID
        $pembantu = P_pembantu::findOrFail($id);

        // Hapus data dari database
        $pembantu->delete();

        // Hapus gambar dari penyimpanan
        Storage::delete('public/storage/image/pembantu/' . $pembantu->foto);

        return back()->with('success', 'Data berhasil dihapus.');
    }
}
