@section('content')
    {{-- konten --}}
    <!-- resources/views/pages/dashboard/e-sertifikat.blade.php -->
    <div class="modal fade" id="modal_nomor" tabindex="-1" aria-labelledby="modal_terima" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Nomor Registrasi</h1>
                </div>
                <form action="">
                    <div class="modal-body ">
                        <div class="col-12">
                            <label for="tanggal_terima" class="fw-medium form-label">Nomor Registrasi</label>
                            <input type="text" name="nomor_registrasi" id="nomor_registrasi" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_terima" tabindex="-1" aria-labelledby="modal_terima" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Terima Permohonan</h1>
                </div>
                <form action="">
                    <div class="modal-body ">
                        <div class="col-12">
                            <label for="tanggal_terima" class="fw-medium form-label">Tanggal Terima
                                Permohonan</label>
                            <input type="date" name="tanggal_terima" id="tanggal_terima" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="formFile" class="form-label">File</label>
                            <input class="form-control bg-white" type="file" id="formFile" accept=".pdf">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_tolak" tabindex="-1" aria-labelledby="modal_tolak" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tolak Permohonan</h1>
                </div>
                <form action="">
                    <div class="modal-body ">
                        <div class="col-12">
                            <label for="tanggal_terima" class="fw-medium form-label">Tanggal Tolak
                                Permohonan</label>
                            <input type="date" name="tanggal_terima" id="tanggal_terima" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="formFile" class="form-label">File</label>
                            <input class="form-control bg-white" type="file" id="formFile" accept=".pdf">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container-fluid p-4 ">

        <div class="card mb-4 ">
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-3 min-vh-70">
                    <table class="table  align-items-center mb-0">
                        <thead>
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">No
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Nomor Pendaftaran</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Informasi yang dimohonkan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">Tujuan Penggunaan Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Nama Pemohon
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Alamat Pemohon</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    No Telepon/HP</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    E-mail</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Informasi yang Dibutuhkan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Alasan Permintaan Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara Memperoleh Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara Mengirim Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    File Identitas</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara
                                    Mengirim Informasi</th>

                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Status</th>

                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Status Dari User</th>


                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="align-middle text-center text-sm">124</td>
                                <td class="align-middle text-center text-sm">Nama1</td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>

                                <td class="align-middle text-center text-sm">68401507550asdasd+46</td>

                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success p-2">Diterima</span>
                                    <span class="badge badge-sm bg-gradient-danger p-2">Ditolak</span>
                                    <span class="badge badge-sm bg-gradient-primary p-2">Diproses</span>
                                    <span class="badge badge-sm bg-gradient-secondary p-2">Menunggu Diterima</span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success p-2">Sesuai</span>
                                    <span class="badge badge-sm bg-gradient-danger p-2">Tidak Sesuai</span>
                                    <span class="badge badge-sm bg-gradient-secondary p-2">Menunggu Status Dari User</span>

                                </td>

                                <td class="align-middle text-center text-sm">
                                    <button class="btn btn-success" data-bs-toggle="modal" <button
                                        class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modal_terima">Terima</button>
                                    <button class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal_tolak">Tolak</button>
                                    {{-- <button class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#file">Detail</button> --}}
                                    {{-- <button class="btn btn-info">Proses
                                        Permohonan</button> --}}
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal_nomor">Tambah
                                        Nomor
                                        Registrasi</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


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




        <p>user</p>
        <div class="modal fade" id="modal_details" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Permohonan Informasi</h1>
                        <button type="button" class="border-0 bg-white" data-bs-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-x" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <h2 class="text-uppercase">Status</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="timeline">
                                        @foreach ($timeline as $event)
                                            <div
                                                class="timeline-event {{ $event['status'] ? 'event-green' : 'event-gray' }}">
                                                <div class="event-date">{{ $event['date'] }}</div>
                                                <div class="event-content">{{ $event['event'] }}</div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($timeline[count($timeline) - 1]['status'])
                        <div class="modal-footer">
                            <div class="row text-start w-100">
                                <div class="col-12">
                                    <p>Apakah Hasil permohonan sudah sesuai ?</p>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-success"
                                        data-bs-dismiss="modal">Sesuai</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak
                                        Sesuai</button>
                                </div>
                            </div>

                        </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="card mb-4 ">
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-3 min-vh-70">
                    <table class="table  align-items-center mb-0 h-100">
                        <thead>
                            <tr class="text-center">
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">No
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Nomor Pendaftaran</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Informasi yang dimohonkan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">Tujuan Penggunaan Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Nama Pemohon
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Alamat Pemohon</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    No Telepon/HP</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    E-mail</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Informasi yang Dibutuhkan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Alasan Permintaan Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara Memperoleh Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara Mengirim Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    File Identitas</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara
                                    Mengirim Informasi</th>

                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Status</th>




                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="align-middle text-center text-sm">124</td>
                                <td class="align-middle text-center text-sm">Nama1</td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>
                                <td class="align-middle text-center text-sm">Keterangan 1 </td>

                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success p-2">Diterima</span>
                                    <span class="badge badge-sm bg-gradient-danger p-2">Ditolak</span>
                                    <span class="badge badge-sm bg-gradient-primary p-2">Diproses</span>
                                    <span class="badge badge-sm bg-gradient-secondary p-2">Menunggu Diterima</span>
                                </td>

                                <td class="align-middle text-center text-sm">

                                    <button class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#modal_details">Detail</button>

                                    <button class="btn btn-primary">Unduh File</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-secondary justify-content-end ">
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
