<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Judul_dok;
use Illuminate\Http\Request;

class Judul_dokController extends Controller
{
    public function tambah(Request $request)
    {
        // Simpan data ke dalam database
        $judul = new Judul_dok(); // Ganti YourModel dengan model yang sesuai
        $judul->judul       = $request->input('judul');
        $judul->jenis_info  = $request->input('jenis_info');
        $judul->jenis_dok   = $request->input('jenis_dok');
        $judul->jenis_ppid  = $request->input('jenis_ppid');
        $judul->keterangan  = $request->input('keterangan');

        $judul->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        $judul = Judul_dok::find($id);

        // Ubah data lain yang ingin diubah
        $judul->judul       = $request->input('judul');
        $judul->jenis_info  = $request->input('jenis_info');
        $judul->jenis_dok   = $request->input('jenis_dok');
        $judul->jenis_ppid  = $request->input('jenis_ppid');
        $judul->keterangan  = $request->input('keterangan');
        $judul->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Ambil data berdasarkan ID
        $judul = Judul_dok::findOrFail($id);

        // Hapus data dari database
        $judul->delete();


        return back()->with('success', 'Data berhasil dihapus.');
    }
}
