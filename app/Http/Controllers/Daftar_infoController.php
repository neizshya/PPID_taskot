<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class Daftar_infoController extends Controller
{
    public function tambah(Request $request)
    {
        // Simpan data ke dalam database
        $file = new File(); // Ganti YourModel dengan model yang sesuai
        $file->judul = $request->input('judul');
        $file->instansi = $request->input('instansi') ?? '-';
        $file->info = $request->input('info');
        $file->dok = $request->input('dok');
        $file->layanan = $request->input('layanan');

        $file->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
    public function destroy($id)
    {
        $file = File::find($id); // Ganti YourModel dengan model yang sesuai

        // Hapus data dari database
        $file->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus.');
    }

    public function search(Request $request)
    {
        // Ambil data pencarian dari input dengan nama 'search'
        $keyword = $request->input('search');

        // Lakukan proses pencarian berdasarkan keyword pada kolom 'judul', 'instansi', 'info', 'dok', dan 'layanan'
        $files = File::where('judul', 'LIKE', '%' . $keyword . '%')
            ->orWhere('instansi', 'LIKE', '%' . $keyword . '%')
            ->orWhere('info', 'LIKE', '%' . $keyword . '%')
            ->orWhere('dok', 'LIKE', '%' . $keyword . '%')
            ->orWhere('layanan', 'LIKE', '%' . $keyword . '%')
            ->get();

        // Mengembalikan hasil pencarian ke dalam view atau sebagai respons JSON
        return response()->json(['keyword' => $keyword, 'results' => $files]);
    }
}
