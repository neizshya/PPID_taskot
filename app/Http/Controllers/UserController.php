<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function tambah(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required|unique:users,nik',
            'password' => 'required',
        ], [
            'nik.unique' => 'NIK sudah ada, mohon gunakan NIK yang berbeda.',
        ]);

        // Ambil nilai dari Request
        $name               = $request->input('name');
        $nik                = $request->input('nik');
        $password           = $request->input('password');
        $instansi           = $request->input('instansi');
        $role = $request->input('role');

        // Simpan data ke dalam tabel user
        $user = new User();
        $user->name = $name;
        $user->nik = $nik;
        $user->password = Hash::make($password); // Enkripsi password sebelum menyimpannya
        $user->instansi = $instansi;
        $user->role = $role;
        $user->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'nik' => 'required|unique:users,nik,' . $id, // Mengabaikan ID saat ini untuk validasi unik
            'role' => 'required',
            'instansi' => 'required',
        ], [
            'nik.unique' => 'NIK sudah ada, mohon gunakan NIK yang berbeda.',
        ]);

        // Temukan user berdasarkan ID
        $user = User::find($id);

        // Pastikan user ditemukan sebelum mencoba memperbarui data
        if (!$user) {
            return back()->with('error', 'Pengguna tidak ditemukan.');
        }

        // Update data pengguna
        $user->name         = $request->input('name');
        $user->nik          = $request->input('nik');
        $user->instansi     = $request->input('instansi');
        $user->role         = $request->input('role');
        $user->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Ambil data berdasarkan ID
        $user = User::findOrFail($id);

        // Hapus data dari database
        $user->delete();


        return back()->with('success', 'Data berhasil dihapus.');
    }

    public function resetPassword($id)
    {
        // Temukan user berdasarkan ID
        $user = User::find($id);

        // Pastikan user ditemukan sebelum mencoba reset password
        if (!$user) {
            return back()->with('error', 'Pengguna tidak ditemukan.');
        }

        // Ambil nilai NIK dari user
        $nik = $user->nik;

        // Reset password menggunakan nilai NIK dan hash-kan password baru
        $newPassword = Hash::make($nik);

        // Atur password baru yang di-hash ke dalam model User
        $user->password = $newPassword;

        // Simpan perubahan password
        $user->save();

        return back()->with('success', 'Kata sandi berhasil direset.');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:8',
            're-newPassword' => 'required|same:newPassword',
        ]);

        $user = Auth::user();

        // Check if the current password matches
        if (!Hash::check($request->currentPassword, $user->password)) {
            return redirect()->back()->with('error', 'Kata sandi saat ini salah.');
        }

        // Change the password
        $user->password = Hash::make($request->newPassword);
        $user->save();

        return redirect()->back()->with('success', 'Kata sandi berhasil diubah.');
    }

    public function updateProfile(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'nik' => 'required|unique:users,nik,' . $id, // Mengabaikan ID saat ini untuk validasi unik
        ], [
            'nik.unique' => 'NIK sudah ada, mohon gunakan NIK yang berbeda.',
        ]);

        // Temukan user berdasarkan ID
        $user = User::find($id);

        // Pastikan user ditemukan sebelum mencoba memperbarui data
        if (!$user) {
            return back()->with('error', 'Pengguna tidak ditemukan.');
        }

        // Update data pengguna
        $user->name = $request->input('name');
        $user->nik = $request->input('nik');
        $user->save();

        return back()->with('success', 'Data berhasil diperbarui.');
    }
}
