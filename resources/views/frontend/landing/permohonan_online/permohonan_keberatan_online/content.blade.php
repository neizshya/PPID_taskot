@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-5 ">
        <p id="page-title" class="fs-1 ">Permohonan Keberatan Online</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container-fluid px-5">
        {{-- kanan --}}
        <form action="" class="row w-100">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        {{-- input --}}
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nomor_pendaftaran" required
                                    placeholder="nomor pendaftaran" />
                                <label class="label" for="nomor_pendaftaran">
                                    Nomor Pendaftaran Permohonan Informasi (nomor sesuai tanda terima permohonan informasi)
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="informasi_dimohonkan" id="informasi_dimohonkan"
                                    placeholder="tujuan informasi"></textarea>
                                <label class="label" for="informasi_dimohonkan">
                                    Informasi yang dimohonkan
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="tujuan_informasi" id="tujuan_informasi"
                                    placeholder="tujuan informasi"></textarea>
                                <label class="label" for="tujuan_informasi">
                                    Tujuan Pengunaan Informasi
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <p class="fw-semibold fs-5 text-white mt-4">Identitas Pemohon</p>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nama_pemohon" required
                                    placeholder="nama pemohon" />
                                <label class="label" for="nama_pemohon">
                                    Nama Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="alamat_pemohon" required
                                    placeholder="alamat pemohon" />
                                <label class="label" for="alamat_pemohon">
                                    Alamat Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="pekerjaan" required
                                    placeholder="Pekerjaan" />
                                <label class="label" for="pekerjaan">
                                    Pekerjaan <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="tel" id="no_hp" required
                                    placeholder="No Telepon/HP" />
                                <label class="label" for="no_hp">
                                    No Telepon/HP <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="email" id="email" required
                                    placeholder="E-mail" />
                                <label class="label" for="no_hp">
                                    E-mail <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="informasi_dibutuhkan" id="informasi_dibutuhkan"
                                    placeholder="Informasi Yang Dibutuhkan"></textarea>
                                <label class="label" for="informasi_dibutuhkan">
                                    Informasi Yang Dibutuhkan
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="alasan_informasi" id="alasan_informasi"
                                    placeholder="Alasan Permintaan Informasi"></textarea>
                                <label class="label" for="alasan_informasi">
                                    Alasan Permintaan Informasi
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="peroleh_informasi" id="peroleh_informasi"
                                    placeholder="Cara Memperoleh Informasi"></textarea>
                                <label class="label" for="peroleh_informasi">
                                    Cara Memperoleh Informasi
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="kirim_informasi" id="kirim_informasi"
                                    placeholder="Cara Mengirimkan Informasi"></textarea>
                                <label class="label" for="kirim_informasi">
                                    Cara Mengirimkan Informasi
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12  my-3">
                            <label for="identitas" class="form-label text-white">Identitas(KTP/SIM) Ukuran maksimal 300kb
                                <span class="text-danger">*</span></label>
                            <input data-bs-theme="dark" class="form-control" type="file" id="identitas"
                                accept=".jpg,.png,.pdf">
                        </div>
                    </div>
                </div>
                {{-- text --}}
                <div class="col-12 col-lg-4">
                    <div class=" text-white p-3">
                        <p class="fw-semibold fs-5">Pemohon Informasi Publik berhak mengajukan keberatan dalam hal
                            ditemukannya alasan sebagai berikut:
                        </p>
                        <ol>
                            <li>
                                Penolakan berdasarkan alasan Pengecualian Informasi Publik; </li>
                            <li>
                                Tidak disediakannya Informasi berkala; </li>
                            <li>
                                Tidak ditanggapinya Permintaan Informasi Publik; </li>
                            <li>
                                Permintaan Informasi Publik ditanggapi tidak sebagaimana yang diminta; </li>
                            <li>
                                Tidak dikabulkannya Permintaan Informasi Publik; </li>
                            <li>
                                Pengenaan biaya yang tidak wajar; dan/atau </li>
                            <li>
                                Penyampaian Informasi Publik yang melebihi waktu penyampaian informasi publik.
                            </li>

                        </ol>

                        <p class="fw-semibold fs-5">
                            Tata Cara Permohonan Keberatan :
                        </p>
                        <ol>
                            <li>
                                Keberatan diajukan kepada atasan PPID (Pejabat Pengelola Informasi dan Dokuemntasi) dalam
                                jangka waktu paling lambat 30 (tiga puluh) hari kerja setelah ditemukan alasan keberatan.
                            </li>
                            <li>
                                Atasan PPID memberikan keputusan / tanggapan atas pengajuan keberatan paling lambat 30 (tiga
                                puluh) hari kerja setelah diterimanya keberatan secara tertulis, Apabila atasan PPID
                                mengutkan putusan maka alasan tertulis disertakan.
                            </li>
                            <li>
                                Jika pengajuan puas atas tanggapan atasan PPID, maka selesai proses keberatan informasi
                            </li>
                            <li>
                                Jika pengajuan tidak puas atas tanggapan atasan PPID, maka dapat mengajukan sengketa
                                informasi ke Komisi Informasi provinsi Jawa Barat.
                            </li>
                        </ol>

                        <p class="fw-semibold fs-5">
                            Biaya/Tarif :
                        </p>

                        <p>
                            informasi yang disediakan adalah <span class="fw-semibold">gratis</span> (tidak dipungut
                            biaya),
                            jika ada penggandaan atau perekaman, biaya ditanggung oleh pemohon informasi.
                        </p>

                    </div>
                </div>
                <div class="col-lg-2">
                    <button class="btn text-white btn-primary w-100">
                        Kirim
                    </button>
                </div>
            </div>
        </form>


        {{-- kiri --}}

    </div>
@endsection
