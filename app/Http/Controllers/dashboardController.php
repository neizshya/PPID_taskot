<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function permohonan_informasi()
    {
        $timeline = [
            [
                'date' => '2023-01-01',
                'event' => 'permohonan informasi diterima di PPID',
                'status' => true,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'permohonan sedang diproses (10 Hari ), apabila melebihi 10 hari harus memberikan surat tanggapan',
                'status' => true,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'Hasil Permohonan',
                'status' => false,
            ]
        ];

        return view('frontend.dashboard.permohonan_informasi.permohonan_informasi', compact('timeline'));
    }
    public function permohonan_keberatan()
    {
        $timeline = [
            [
                'date' => '2023-01-01',
                'event' => 'permohonan informasi diterima di PPID',
                'status' => true,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'permohonan sedang diproses (10 Hari ), apabila melebihi 10 hari harus memberikan surat tanggapan',
                'status' => true,
            ],
            [
                'date' => '2023-02-15',
                'event' => 'Hasil Permohonan',
                'status' => false,
            ]
        ];

        return view('frontend.dashboard.permohonan_keberatan.permohonan_keberatan', compact('timeline'));
    }
}
