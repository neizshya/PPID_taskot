@section('content')
    {{-- modal delete --}}
    <div class="modal fade" id="delete_pic" tabindex="-1" aria-labelledby="delete_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus PPID Pembantu</h1>
                </div>
                <div class="modal-body ">

                    <p>Yakin Hapus PPID Pembantu Ini?</p>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit PPID Pembantu</h1>
                </div>
                <div class="modal-body ">
                    <form class="row g-3" action="">
                        <div class="col-12">
                            <input class="form-control bg-white" type="file" id="formFile" accept=".jpg,.png">
                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlInput1" class="form-label">Nama PPID</label>
                            <input type="text" class="form-control bg-white" id="nama_gambar" placeholder="Nama Gambar">
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah PPID Pembantu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body ">

                    <form class="row g-3" action="">
                        <div class="col-12">
                            <input class="form-control bg-white" type="file" id="formFile" accept=".jpg,.png">
                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlInput1" class="form-label">Nama Gambar</label>
                            <input type="text" class="form-control bg-white" id="nama_gambar" placeholder="Nama Gambar">
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
        <div class=" card p-3 bg-white w-100 table-responsive min-vh-80 d-flex ">
            <div class="card-body">
                <div class="text-end">
                    <button class="btn btn-success w-25 " data-bs-toggle="modal" data-bs-target="#add_pic">Tambah
                    </button>
                </div>
                <table class="table">
                    <thead>
                        <tr class="">
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Nama PPID Pembantu</th>
                            <th class="text-center" scope="col">Gambar</th>

                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <th class="text-center" scope="row">1</th>
                            <td class="text-center">Nama1</td>
                            <td class="d-flex justify-content-center">
                                <div class="rounded-3 overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="w-100 h-100 img-responsive"
                                        src="https://avatars.akamai.steamstatic.com/fab9f6e14530bb7ab8f259edfab656b97d6111e2_full.jpg"
                                        alt="">
                                </div>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#edit_pic">Edit</button>
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
