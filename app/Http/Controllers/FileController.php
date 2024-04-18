<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function tambah(Request $request)
    {
        // Validasi request
        $validatedData = $request->validate([
            'file' => 'required|file|mimes:pdf|max:2048', // PDF dengan ukuran maksimal 2048KB
        ]);

        // Simpan data ke dalam database
        $file = new File(); // Ganti YourModel dengan model yang sesuai
        $file->judul = $request->input('judul');
        $file->instansi = $request->input('instansi') ?? '-';
        $file->info = $request->input('info');
        $file->dok = $request->input('dok');
        $file->layanan = $request->input('layanan');

        // Simpan file ke dalam storage
        if ($request->hasFile('file')) {
            $uploadedFile = $request->file('file');
            $filename = time() . '_' . $uploadedFile->getClientOriginalName();
            $path = $uploadedFile->storeAs('file', $filename, 'public'); // Simpan file di dalam folder 'file' di dalam direktori penyimpanan public

            // Update path file di dalam database
            $file->file = $path;
        }

        $file->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
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


    public function update(Request $request, $id)
    {
        $x = File::find($id);

        // Lakukan validasi input yang diterima
        $validatedData = $request->validate([
            'file' => 'nullable|file|mimes:pdf|max:2048', // PDF dengan ukuran maksimal 2048KB
        ]);

        if ($request->hasFile('file')) {
            // Ambil file yang diunggah
            $file = $request->file('file');
            $filePath = $file->storeAs('public/file', $file->getClientOriginalName());
            $x->file = $filePath;
        }

        // Ubah data lain yang ingin diubah
        $x->judul = $request->input('judul');
        $x->instansi = $request->input('instansi') ?? '-';
        $x->info = $request->input('info');
        $x->dok = $request->input('dok');
        $x->layanan = $request->input('layanan');
        $x->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $file = File::find($id); // Ganti YourModel dengan model yang sesuai

        // Hapus file dari storage
        Storage::delete($file->file);

        // Hapus data dari database
        $file->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus.');
    }
}
