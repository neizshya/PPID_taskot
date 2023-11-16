@section('content')
    {{-- modal delete --}}
    <div class="modal fade" id="delete_pic" tabindex="-1" aria-labelledby="delete_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Gambar</h1>
                </div>
                <div class="modal-body ">

                    <p>Yakin Hapus Gambar ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TIDAK</button>
                    <button type="button" class="btn btn-danger">YA</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal edit --}}
    <div class="modal fade" id="edit_pic" tabindex="-1" aria-labelledby="edit_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit File</h1>
                </div>
                <div class="modal-body ">
                    <form class="row g-3" action="">

                        <div class="col-12">
                            <label for="judul_dokumen" class="form-label">Judul Dokumen</label>
                            <input type="text" class="form-control bg-white" id="judul_dokumen"
                                placeholder="Judul Dokumen">
                        </div>
                        <div class="col-12">
                            <label for="instansi" class="form-label">Nama Instansi</label>
                            <input type="text" class="form-control bg-white" id="instansi" placeholder="Nama Instansi">
                        </div>
                        <div class="col-12">
                            <label for="jenis_informasi" class="form-label">Jenis Informasi</label>
                            <input type="text" class="form-control bg-white" id="jenis_informasi"
                                placeholder="Jenis Informasi">
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                            <input type="text" class="form-control bg-white" id="jenis_dokumen"
                                placeholder="Jenis Dokumen">
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis PPID</label>
                            <div class="form-check">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="ppidUtama" class="form-check-input" value="ppid_utama">
                                    PPID UTAMA
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="ppidPembantu" class="form-check-input"
                                        value="ppid_pembantu">
                                    PPID PEMBANTU
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <input class="form-control bg-white" type="file" id="formFile">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Ubah</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal tambah --}}
    <div class="modal fade" id="add_pic" tabindex="-1" aria-labelledby="add_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Gambar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body ">
                    <form class="row g-3" action="">

                        <div class="col-12">
                            <label for="judul_dokumen" class="form-label">Judul Dokumen</label>
                            <input type="text" class="form-control bg-white" id="judul_dokumen"
                                placeholder="Judul Dokumen">
                        </div>
                        <div class="col-12">
                            <label for="instansi" class="form-label">Nama Instansi</label>
                            <input type="text" class="form-control bg-white" id="instansi"
                                placeholder="Nama Instansi">
                        </div>
                        <div class="col-12">
                            <label for="jenis_informasi" class="form-label">Jenis Informasi</label>
                            <input type="text" class="form-control bg-white" id="jenis_informasi"
                                placeholder="Jenis Informasi">
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                            <input type="text" class="form-control bg-white" id="jenis_dokumen"
                                placeholder="Jenis Dokumen">
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis PPID</label>
                            <div class="form-check">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="ppidUtama" class="form-check-input" value="ppid_utama">
                                    PPID UTAMA
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="form-check">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="ppidPembantu" class="form-check-input"
                                        value="ppid_pembantu">
                                    PPID PEMBANTU
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <input class="form-control bg-white" type="file" id="formFile">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Ubah</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="file" tabindex="-1" aria-labelledby="file" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat File</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body ">
                    <div class="ratio" style="--bs-aspect-ratio: 100%;">

                        <iframe src="https://drive.google.com/file/d/1wSOABVW6lvN95SiI4NAMhasFsT4VyMtw/preview"
                            style="width: 100%; height:100%" frameborder="0"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- konten --}}
    <div class="container-fluid p-4 d-flex justify-content-center">
        <div class=" card p-3 bg-white w-100 table-responsive">
            <div class="text-end">
                <button class="btn btn-success w-25 " data-bs-toggle="modal" data-bs-target="#add_pic">Tambah
                </button>
            </div>
            {{-- <div class="row">
                <div class="col-6 text-start">
                    <button class="btn btn-success w-50" data-bs-toggle="modal" data-bs-target="#add_pic">Tambah
                        Instansi
                    </button>

                </div>
                <div class="col-6 text-end">

                    <button class="btn btn-success w-50" data-bs-toggle="modal" data-bs-target="#add_pic">Tambah File
                    </button>
                </div>
            </div> --}}
            <table class="table rounded-3 overflow-hidden table-borderless">
                <thead>
                    <tr class="table-light">
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Judul Dokumen</th>
                        <th class="text-center" scope="col">Instansi</th>
                        <th class="text-center" scope="col">Jenis Informasi</th>
                        <th class="text-center" scope="col">Jenis Dokumen</th>
                        <th class="text-center" scope="col">Jenis PPID</th>

                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <th class="text-center" scope="row">1</th>
                        <td class="text-center">Nama1</td>
                        <td class="text-center">Keterangan 1 </td>
                        <td class="text-center">Keterangan 1 </td>
                        <td class="text-center">Keterangan 1 </td>
                        <td class="text-center">Keterangan 1 </td>

                        <td class="text-center">

                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#file">Lihat
                                File</button>
                            <button class="btn btn-warning" data-bs-toggle="modal" <button class="btn btn-warning"
                                data-bs-toggle="modal" data-bs-target="#edit_pic">Edit</button>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete_pic">Hapus</button>

                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
