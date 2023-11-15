@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-5 ">
        <p id="page-title" class="fs-1 ">Permohonan Informasi Online</p>
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
                                <input autocomplete="off" class="input" type="text" id="nama_pemohon" required
                                    placeholder="nama pemohon" />
                                <label class="label" for="nama_pemohon">
                                    Nama Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="ktp_sim" required
                                    placeholder="No KTP/SIM" />
                                <label class="label" for="ktp_sim">
                                    No KTP/SIM <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nim"
                                    placeholder="NIM (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="nim">
                                    NIM (Jika Pemohon adalah Mahasiswa) <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="univ"
                                    placeholder="Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="univ">
                                    Perguruan Tinggi (Jika Pemohon adalah Mahasiswa) <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="alamat"
                                    placeholder="Alamat Pemohon" />
                                <label class="label" for="alamat">
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
                        <p class="fw-semibold fs-5">Pemohon Informasi berhak untuk meminta seluruh informasi yang berada di
                            Badan
                            Publik kecuali :
                        </p>
                        <ol>
                            <li>
                                informasi yang apabila dibuka dan diberikan kepada pemohon informasi dapat: Menghambat
                                proses
                                penegakan hukum; </li>
                            <li>
                                Menganggu kepentingan perlindungan hak atas kekayaan intelektual dan perlindungan dari
                                persaingan usaha tidak sehat; </li>
                            <li>
                                Membahayakan pertahanan dan keamanan Negara; </li>
                            <li>
                                Mengungkap kekayaan alam Indonesia; </li>
                            <li>
                                Merugikan ketahanan ekonomi nasional; </li>
                            <li>
                                Merugikan kepentingan hubungan luar negeri; </li>
                            <li>
                                Mengungkap isi akta otentik yang bersifat pribadi dan kemauan terakhir ataupun wasiat
                                seseorang;
                            </li>
                            <li>Mengungkap rahasia pribadi;</li>
                            <li>Memorandum atau surat-suat antar Badan Publik atau intra Badan Publik yang menurut sifatnya
                                dirahasiakan kecuali atas putusan Komisi Informasi atau Pengadilan;</li>
                            <li>
                                Informasi yang tidak boleh diungkapkan berdasarkan Undang-undang.
                            </li>
                            <li>
                                Badan Publik juga dapat tidak memberikan informasi yang belum dikuasai atau
                                didokumentasikan.
                            </li>
                        </ol>

                        <p class="fw-semibold fs-5">
                            Jangka Waktu Penyelesaian :
                        </p>
                        <p>
                            10 (Sepuluh) Hari Kerja + 7 (Tujuh) Hari Kerja
                        </p>

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
