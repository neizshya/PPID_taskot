<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\J_dokumen;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function tambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'jenis_dokumen' => 'required|unique:j_dokumens,jenis_dokumen',
        ], [
            'jenis_dokumen.unique' => 'Jenis dokumen sudah ada, mohon masukkan jenis dokumen yang berbeda.',
        ]);

        // Ambil nilai jenis_dokumen dari Request
        $jenisDokumen = $request->input('jenis_dokumen');

        // Simpan data ke dalam tabel j_dokumens
        $dokumen = new J_dokumen();
        $dokumen->jenis_dokumen = $jenisDokumen;
        $dokumen->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function search(Request $request)
    {
        // Ambil data pencarian dari input dengan nama 'search'
        $keyword = $request->input('search');

        // Lakukan proses pencarian berdasarkan keyword pada kolom 'jenis_dokumen'
        $files = J_dokumen::where('jenis_dokumen', 'LIKE', '%' . $keyword . '%')->get();

        // Mengembalikan hasil pencarian ke dalam view atau sebagai respons JSON
        return response()->json(['keyword' => $keyword, 'results' => $files]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'jenis_dokumen' => 'required|unique:j_dokumens,jenis_dokumen,' . $id,
        ], [
            'jenis_dokumen.unique' => 'Jenis dokumen sudah ada, mohon masukkan jenis dokumen yang berbeda.',
        ]);

        $dokumen = J_dokumen::find($id);

        // Ubah data lain yang ingin diubah
        $dokumen->jenis_dokumen = $request->input('jenis_dokumen');
        $dokumen->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Ambil data berdasarkan ID
        $dokumen = J_dokumen::findOrFail($id);

        // Hapus data dari database
        $dokumen->delete();


        return back()->with('success', 'Data berhasil dihapus.');
    }
}
