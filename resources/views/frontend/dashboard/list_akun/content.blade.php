@section('content')
    {{-- modal Reset --}}
    <div class="modal fade" id="reset_password" tabindex="-1" aria-labelledby="delete_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Kata Sandi</h1>
                </div>
                <div class="modal-body ">

                    <p>Yakin reset kata sandi ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TIDAK</button>
                    <button type="button" class="btn btn-danger">YA</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal delete --}}
    <div class="modal fade" id="delete_akun" tabindex="-1" aria-labelledby="delete_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Akun</h1>
                </div>
                <div class="modal-body ">

                    <p>Yakin hapus akun ?</p>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Akun</h1>
                </div>
                <div class="modal-body ">
                    <form class="row g-3" action="">
                        <div class="col-12">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control bg-white" id="nama" placeholder="Nama" required>
                        </div>
                        <div class="col-12">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control bg-white" id="nik" required
                                placeholder="64516351316">
                        </div>
                        <div class="col-12">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control bg-white" id="nim" required
                                placeholder="64516351316">
                        </div>
                        <div class="col-12">
                            <label for="univ" class="form-label">Universitas</label>
                            <input type="text" class="form-control bg-white" id="univ" required
                                placeholder="Universitas">
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control bg-white" id="alamat" required
                                placeholder="Alamat">
                        </div>
                        <div class="col-12">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control bg-white" id="pekerjaan" required
                                placeholder="Pekerjaan">
                        </div>
                        <div class="col-12">
                            <label for="no_hp" class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control bg-white" id="no_hp" required
                                placeholder="64516351316">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control bg-white" id="email" required
                                placeholder="johndoe@gmail.com">
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

    {{-- modal tambah --}}
    <div class="modal fade" id="add_pic" tabindex="-1" aria-labelledby="add_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body ">

                    <form class="row g-3" action="">
                        <div class="col-12">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control bg-white" id="nama" placeholder="Nama"
                                required>
                        </div>
                        <div class="col-12">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control bg-white" id="nik" required
                                placeholder="64516351316">
                        </div>
                        <div class="col-12">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control bg-white" id="nim" required
                                placeholder="64516351316">
                        </div>
                        <div class="col-12">
                            <label for="univ" class="form-label">Universitas</label>
                            <input type="text" class="form-control bg-white" id="univ" required
                                placeholder="Universitas">
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control bg-white" id="alamat" required
                                placeholder="Alamat">
                        </div>
                        <div class="col-12">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control bg-white" id="pekerjaan" required
                                placeholder="Pekerjaan">
                        </div>
                        <div class="col-12">
                            <label for="no_hp" class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control bg-white" id="no_hp" required
                                placeholder="64516351316">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control bg-white" id="email" required
                                placeholder="johndoe@gmail.com">
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


    {{-- konten --}}
    <div class="container-fluid p-4 d-flex justify-content-center">
        <div class=" card p-3 bg-white w-100 table-responsive min-vh-80">
            <div class="text-end">
                <button class="btn btn-success w-25 " data-bs-toggle="modal" data-bs-target="#add_pic">Tambah
                </button>
            </div>
            <table class="table rounded-3 overflow-hidden table-borderless">
                <thead>
                    <tr class="">
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">NIK</th>
                        <th class="text-center" scope="col">NIM</th>
                        <th class="text-center" scope="col">Universitas</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">Pekerjaan</th>
                        <th class="text-center" scope="col">No. Telepon</th>
                        <th class="text-center" scope="col">E-mail</th>

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
                        <td class="text-center">Keterangan 1 </td>
                        <td class="text-center">Keterangan 1 </td>
                        <td class="text-center">Keterangan 1 </td>

                        <td class="text-center">

                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#edit_pic">Edit</button>
                            <button class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#reset_password">Reset</button>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete_akun">Hapus</button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
