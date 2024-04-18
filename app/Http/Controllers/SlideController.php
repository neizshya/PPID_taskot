<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function tambah(Request $request)
    {
        // Ambil nilai id dan nama_instansi dari Request
        $namaSlide = $request->input('nama_slide');
        $ket = $request->input('ket');

        // Ambil file yang diunggah
        $file = $request->file('foto');

        // Simpan file di folder public/images dengan nama yang unik
        $filePath = $file->storeAs('public/image/slide', $file->getClientOriginalName());

        // Ubah path foto agar sesuai dengan path asset
        $filePath = str_replace('public/', 'storage/', $filePath);

        // Simpan data ke dalam tabel p_pembantu
        $slide = new Slide();
        $slide->nama_slide = $namaSlide;
        $slide->foto = $filePath; // Simpan path foto ke dalam kolom foto
        $slide->ket = $ket;
        $slide->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }


    public function update(Request $request, $id)
    {
        $slide = Slide::find($id);

        // Lakukan validasi input yang diterima

        if ($request->hasFile('foto')) {
            // Ambil file yang diunggah
            $file = $request->file('foto');
            $filePath = $file->storeAs('public/image/slide', $file->getClientOriginalName());
            // Ubah path foto agar sesuai dengan path asset
            $filePath = str_replace('public/', 'storage/', $filePath);
            $slide->foto = $filePath;
        }

        // Ubah data lain yang ingin diubah
        $slide->nama_slide = $request->input('nama_slide');
        $slide->ket = $request->input('ket');
        $slide->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Ambil data berdasarkan ID
        $slide = Slide::findOrFail($id);

        // Hapus data dari database
        $slide->delete();

        // Hapus gambar dari penyimpanan
        Storage::delete('public/image/slide/' . $slide->foto);

        return back()->with('success', 'Data berhasil dihapus.');
    }
}
