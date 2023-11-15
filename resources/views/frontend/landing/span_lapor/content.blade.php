@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-3">
        <p id="page-title" class="fs-1 ">Mekanisme Pengaduan Publik</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container">
        <div class="row gy-5 mt-2">
            <div class="col-12">
                <div class="row g-5 justify-content-between">
                    <div class="col-12 col-lg-6 ">
                        <div class="row g-5">
                            <div class="col-12 ">
                                <div class="card w-100 h-100 p-3" style="background-color: #dedfdf">
                                    <p class="fw-semibold fs-3">Persyaratan</p> <br>
                                    <ol>
                                        <li>
                                            <p class="fw-medium fs-6">Memiliki akun LAPOR.</p>
                                        </li>
                                        <li>
                                            <p class="fw-medium fs-6">Wajib menggunakan data milik sendiri, diantaranya :
                                            </p>
                                            <ul>
                                                <li>
                                                    <p class="fw-medium fs-6">Nama pengguna asli sesuai dengan KTP sebagai
                                                        pengenal identitas.
                                                    </p>

                                                </li>
                                                <li>
                                                    <p class="fw-medium fs-6">No Identitas (KTP/SIM) sebagai pengenal
                                                        identitas.
                                                    </p>

                                                </li>
                                                <li>
                                                    <p class="fw-medium fs-6">No telepon sebagai pengenal identitas.
                                                    </p>

                                                </li>
                                            </ul>
                                        </li>

                                    </ol>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="card w-100 h-100 p-3" style="background-color: #dedfdf">
                                    <p class="fw-semibold fs-3">Mekanisme dan Prosedur</p> <br>
                                    <ol style="">
                                        <li>
                                            <p class="fw-medium fs-6">Pemohon menyampaikan laporan Pengaduan, Laporan
                                                Aspirasi dan Permohonan Informasi melalui website LAPOR: www.lapor.go.id
                                                atau melalui aplikasi LAPOR! dan Sms 1708.</p>
                                        </li>
                                        <li>
                                            <p class="fw-medium fs-6">Sistem secara otomatis merekam berdasarkan data
                                                identitas pelapor, dan admin pusat (Kementerian) mengirimkan notifikasi
                                                kepada Admin Koordinator berdasarkan kategori.</p>
                                        </li>
                                        <li>
                                            <p class="fw-medium fs-6">Admin koordinator menelaah, memverifikasi dan
                                                mendisposisikan laporan kepada admin penghubung.</p>
                                        </li>
                                        <li>
                                            <p class="fw-medium fs-6">Admin koordinator melaksanakan pemantauan pengaduan
                                                yang telah di disposisikan.</p>
                                        </li>
                                        <li>
                                            <p class="fw-medium fs-6">Admin penghubung menerima laporan.</p>
                                        </li>
                                        <li>
                                            <p class="fw-medium fs-6">Organisasi perangkat daerah memberi tanggapan /
                                                jawaban terhadap laporan.</p>
                                        </li>
                                        <li>
                                            <p class="fw-medium fs-6">Admin penghubung meneruskan tanggapan / jawaban
                                                melalui sistem.</p>
                                        </li>
                                        <li>
                                            <p class="fw-medium fs-6">Masyarakat menerima jawaban dan balasan laporan dari
                                                organisasi perangkat daerah melalui sistem.</p>
                                        </li>


                                    </ol>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ">
                        <img src="{{ asset('image/span.svg') }}" class="w-100 h-100" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="fs-3 text-white">Tekan tombol dibawah ini untuk melapor</p>
                    </div>
                    <div class="col-12 text-center">
                        <a type="button" class="btn btn-success w-25 rounded-4 fs-4 p-2"
                            href="https://www.lapor.go.id">LAPOR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
