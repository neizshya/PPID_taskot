@section('content')
    {{-- modal delete --}}
    <div class="modal fade" id="delete_pic" tabindex="-1" aria-labelledby="delete_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus File</h1>
                </div>
                <div class="modal-body ">

                    <p>Yakin Hapus File ?</p>
                </div>
                <div class="modal-footer">
                    <form action="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TIDAK</button>
                        <button type="button" class="btn btn-danger">YA</button>
                    </form>
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
                            <label for="nama_instansi" class="form-label">Nama Instansi</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected hidden>Pilih Nama Instansi</option>
                                <option value="value 1">berdasarkan list di PPID pembantu</option>
                                <option value="value 2">berdasarkan list di PPID pembantu</option>
                                <option value="value 3">berdasarkan list di PPID pembantu</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_informasi" class="form-label">Jenis Informasi</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Pilih Jenis Informasi</option>
                                <option value="informasi_berkala">Informasi Berkala</option>
                                <option value="informasi_setiap_saat">Informasi Setiap Saat</option>
                                <option value="informasi_serta_merta">Informasi Serta Merta</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected hidden>Pilih Jenis Dokumen</option>
                                <option value="value 1">berdasarkan list di jenis kategori</option>
                                <option value="value 2">berdasarkan list di jenis kategori</option>
                                <option value="value 3">berdasarkan list di jenis kategori</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_ppid" class="form-label">Jenis PPID (ppid pembantu pake input, ppid utama
                                pake select)</label>
                            <input type="text" class="form-control bg-white" id="jenis_ppid" placeholder="Jenis PPID"
                                disabled value="PPID Pembantu">
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected hidden>Pilih Jenis Dokumen</option>
                                <option value="ppid_utama">PPID Utama</option>
                                <option value="dik_ppid">DIK PPID</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="formFile" class="form-label">File</label>
                            <input class="form-control bg-white" type="file" id="formFile" accept=".pdf">
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah File</h1>
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
                            <label for="nama_instansi" class="form-label">Nama Instansi</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected hidden>Pilih Nama Instansi</option>
                                <option value="value 1">berdasarkan list di PPID pembantu</option>
                                <option value="value 2">berdasarkan list di PPID pembantu</option>
                                <option value="value 3">berdasarkan list di PPID pembantu</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_informasi" class="form-label">Jenis Informasi</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected hidden>Pilih Jenis Informasi</option>
                                <option value="informasi_berkala">Informasi Berkala</option>
                                <option value="informasi_setiap_saat">Informasi Setiap Saat</option>
                                <option value="informasi_serta_merta">Informasi Serta Merta</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected hidden>Pilih Jenis Dokumen</option>
                                <option value="value 1">berdasarkan list di jenis kategori</option>
                                <option value="value 2">berdasarkan list di jenis kategori</option>
                                <option value="value 3">berdasarkan list di jenis kategori</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_ppid" class="form-label">Jenis PPID (ppid pembantu pake input, ppid utama
                                pake select)</label>
                            <input type="text" class="form-control bg-white" id="jenis_ppid" placeholder="Jenis PPID"
                                disabled value="PPID Pembantu">
                            <select class="form-select" aria-label="Default select example" required>
                                <option selected hidden>Pilih Jenis Dokumen</option>
                                <option value="ppid_utama">PPID Utama</option>
                                <option value="dik_ppid">DIK PPID</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="formFile" class="form-label">File</label>
                            <input class="form-control bg-white" type="file" id="formFile" accept=".pdf">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- modal lihat --}}
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
        <div class=" card p-3 bg-white w-100 table-responsive min-vh-80">
            <div class="card-body">
                <div class="row">
                    <form class="col-6 text-start" action="">
                        <div class="input-group">
                            <button class="input-group-text text-body" type="submit"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg></button>
                            <input type="text" class="form-control" placeholder="Cari File...">
                        </div>
                    </form>
                    <div class="col-6 text-end">
                        <button class="btn btn-success w-50" data-bs-toggle="modal" data-bs-target="#add_pic">Tambah
                        </button>
                    </div>
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
                <table class="table ">
                    <thead>
                        <tr class="">
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
                        <tr class="">
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
            <div class="card-footer">

                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-secondary justify-content-end">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
