@section('content')
    {{-- konten --}}

    <div class="container-fluid p-4 ">
        @if(Auth::user()->role === 'PU')
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
                                    No Reg</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    NIK Pemohon
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Nama Pemohon
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Alamat Pemohon</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Pekerjaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    No Telepon/HP</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    E-mail</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Informasi yang dimohonkan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Tujuan Penggunaan Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara Memperoleh Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara Mengirim Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Alasan Keberatan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Kasus Posisi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    File Identitas</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Surat Balasan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    File Informasi</th>
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
                                @foreach($keberatan as $x)
                                <tr class="text-center">
                                    <td class="align-middle text-center text-sm">{{ $loop->index + 1 }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->no_reg }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->ktp }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->nama_pemohon }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->alamat }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->pekerjaan }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->no_hp }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->email }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->info_dimohon }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->tujuan_info }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->memperoleh_info }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->mengirim_info }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->alasan_keberatan }}</td>
                                    <td class="align-middle text-center text-sm">{{ $x->kasus_posisi }}</td>
                                    <td class="align-middle text-center text-sm">
                                        @if($x->file_ktp !== "-")
                                            <a href="{{ asset($x->file_ktp) }}" target="_blank">
                                                <span class="badge badge-sm bg-primary p-2">Lihat File KTP</span>
                                            </a>
                                        @else
                                            <span class="badge badge-sm bg-secondary p-2">Tidak ada file KTP</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if($x->file_balasan !== "-")
                                            <a href="{{ asset($x->file_balasan) }}" target="_blank">
                                                <span class="badge badge-sm bg-primary p-2">Lihat File Balasan</span>
                                            </a>
                                        @else
                                            <span class="badge badge-sm bg-secondary p-2">Tidak ada file</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if($x->file_info !== "-")
                                            <a href="{{ asset($x->file_info) }}" target="_blank">
                                                <span class="badge badge-sm bg-primary p-2">Lihat File</span>
                                            </a>
                                        @else
                                            <span class="badge badge-sm bg-secondary p-2">Tidak ada file</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if ($x->status_admin === "Selesai")
                                            <span class="badge badge-sm bg-gradient-success p-2">Selesai</span>
                                        @elseif ($x->status_admin === "Ditolak")
                                            <span class="badge badge-sm bg-gradient-danger p-2">Ditolak</span>
                                        @elseif ($x->status_admin === "Proses")
                                            <span class="badge badge-sm bg-gradient-primary p-2">Diproses</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-secondary p-2">Menunggu Konfirmasi</span>
                                        @endif
    
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if ($x->status_user === "Sesuai")
                                        <span class="badge badge-sm bg-gradient-success p-2">Sesuai</span>
                                        @elseif ($x->status_user === "Tidak Sesuai")
                                        <span class="badge badge-sm bg-gradient-danger p-2">Tidak Sesuai</span>
                                        @elseif ($x->status_user === "Ditolak")
                                            <span class="badge badge-sm bg-gradient-danger p-2">Ditolak</span>
                                        @else
                                        <span class="badge badge-sm bg-gradient-secondary p-2">Menunggu</span>
                                        @endif
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        @if ($x->status_admin === "Menunggu Konfirmasi")
                                        <button class="btn btn-success" data-bs-toggle="modal" <button
                                            class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modal_terima_{{ $x->id }}">Terima</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modal_tolak_{{ $x->id }}">Tolak</button>
                                        {{-- <button class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#file">Detail</button> --}}
                                        {{-- <button class="btn btn-info">Proses
                                            Permohonan</button> --}}
                                        @elseif ($x->status_admin === "Proses")
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modal_file_{{ $x->id }}">Upload File Informasi</button>
                                        @else
                                        <span class="badge badge-sm bg-gradient-success p-2">Selesai</span>
                                        @endif
                                    </td>
                            </tr>
                            <!-- Modal Diterima -->
                            <div class="modal fade" id="modal_terima_{{ $x->id }}" tabindex="-1" aria-labelledby="modal_terima" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content bg-white">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Terima Permohonan</h1>
                                        </div>
                                        <form class="row g-3" action="{{ route('keberatan.diterima', $x->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT') <!-- Ubah sesuai dengan metode yang sesuai, seperti PUT atau PATCH -->
                                            <div class="modal-body ">
                                                <div class="col-12">
                                                    <label for="tanggal_terima" class="fw-medium form-label">Tanggal Terima
                                                        Permohonan</label>
                                                    <input type="date" name="tgl_proses" id="tanggal_terima" class="form-control">
                                                </div>
                                                <div class="col-12">
                                                    <label for="formFile" class="form-label">File</label>
                                                    <input class="form-control bg-white" name="file_balasan" type="file" id="formFile" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-success">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal ditolak -->
                            <div class="modal fade" id="modal_tolak_{{ $x->id }}" tabindex="-1" aria-labelledby="modal_tolak" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content bg-white">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tolak Permohonan</h1>
                                        </div>
                                        <form class="row g-3" action="{{ route('keberatan.ditolak', $x->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT') <!-- Ubah sesuai dengan metode yang sesuai, seperti PUT atau PATCH -->
                                            <div class="modal-body ">
                                                <div class="col-12">
                                                    <label for="tgl_ditolak" class="fw-medium form-label">Tanggal Tolak
                                                        Permohonan</label>
                                                    <input type="date" name="tgl_ditolak" id="tgl_ditolak" class="form-control">
                                                </div>
                                                <div class="col-12">
                                                    <label for="formFile" class="form-label">File</label>
                                                    <input class="form-control bg-white" name="file_balasan" type="file" id="formFile" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-success">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Upload File Informasi -->
                            <div class="modal fade" id="modal_file_{{ $x->id }}" tabindex="-1" aria-labelledby="modal_terima" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-centered">
                                    <div class="modal-content bg-white">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Upload File Informasi</h1>
                                        </div>
                                        <form class="row g-3" action="{{ route('keberatan.upload-info', $x->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT') <!-- Ubah sesuai dengan metode yang sesuai, seperti PUT atau PATCH -->
                                            <div class="modal-body ">
                                                <div class="col-12">
                                                    <label for="formFile" class="form-label">File</label>
                                                    <input class="form-control bg-white" name="file_info" type="file" id="formFile" accept=".pdf">
                                                </div>
                        
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-success">Kirim</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="card-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-secondary justify-content-end">
                        @if($keberatan->previousPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $keberatan->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif
            
                        <!-- Nomor Halaman -->
                        @php
                            $lastPage = min($keberatan->lastPage(), 3); // Tampilkan maksimal tiga halaman
                        @endphp
            
                        @for($i = 1; $i <= $lastPage; $i++)
                            <li class="page-item {{ $keberatan->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $keberatan->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
            
                        @if($keberatan->nextPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $keberatan->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>

        @endif
        @if(Auth::user()->role === 'user')


        <div class="card mb-4">
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
                                    NIK Pemohon</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Nama Pemohon</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">No
                                    KTP</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Alamat Pemohon</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Pekerjaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    No
                                    Telepon/HP</th>
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
                                    Cara
                                    Memperoleh Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Cara
                                    Mengirim Informasi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Alasan Keberatan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Kasus Posisi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    File
                                    Identitas</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                    scope="col">
                                    Surat Balasan</th>
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
                            @foreach($keberatan as $x)
                            <tr class="text-center">
                                <td class="align-middle text-center text-sm">{{ $loop->index + 1 }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->no_reg }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->nama_pemohon }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->ktp }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->alamat }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->pekerjaan }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->no_hp }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->email }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->info_dimohon }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->tujuan_info }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->memperoleh_info }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->mengirim_info }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->alasan_keberatan }}</td>
                                <td class="align-middle text-center text-sm">{{ $x->kasus_posisi }}</td>
                                <td class="align-middle text-center text-sm">
                                    @if($x->file_ktp !== "-")
                                        <a href="{{ asset($x->file_ktp) }}" target="_blank">
                                            <span class="badge badge-sm bg-primary p-2">Lihat File KTP</span>
                                        </a>
                                    @else
                                        <span class="badge badge-sm bg-secondary p-2">Tidak ada file KTP</span>
                                    @endif
                                </td>
                                
                                <td class="align-middle text-center text-sm">
                                    @if($x->file_balasan !== "-")
                                        <a href="{{ asset($x->file_balasan) }}" target="_blank">
                                            <span class="badge badge-sm bg-primary p-2">Lihat</span>
                                        </a>
                                    @else
                                        <span class="badge badge-sm bg-secondary p-2">Tidak ada file</span>
                                    @endif
                                </td>
                                <td class="align-middle text-center text-sm">
                                    @if ($x->status_admin === "Selesai")
                                        <span class="badge badge-sm bg-gradient-success p-2">Selesai</span>
                                    @elseif ($x->status_admin === "Ditolak")
                                        <span class="badge badge-sm bg-gradient-danger p-2">Ditolak</span>
                                    @elseif ($x->status_admin === "Proses")
                                        <span class="badge badge-sm bg-gradient-primary p-2">Diproses</span>
                                    @else
                                        <span class="badge badge-sm bg-gradient-secondary p-2">Menunggu Konfirmasi</span>
                                    @endif

                                </td>

                                <td class="align-middle text-center text-sm">
                                    <button class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#modal_details_{{ $x->id }}">Detail</button>
                                    @if($x->file_info !== "-")
                                        <a href="{{ asset($x->file_info) }}" target="_blank">
                                            <span class="btn btn-primary">Lihat</span>
                                        </a>
                                    @endif
                                    
                                    
                                </td>
                            </tr>
                            <div class="modal fade" id="modal_details_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        @if ($x->tgl_masuk !== "-")
                                    <div class="timeline-event event-green }}">
                                    <div class="event-date">{{ $x->tgl_masuk }}</div>
                                    <div class="event-content">Permohonan informasi sudah masuk dan menunggu konfirmasi oleh PPID</div>
                                    </div> @endif
                                        @if ($x->tgl_proses !== "-")
                                    <div class="timeline-event event-green }}">
                                    <div class="event-date">{{ $x->tgl_proses }}</div>
                                    <div class="event-content">permohonan sedang diproses (10 Hari ), apabila melebihi 10 hari harus memberikan surat tanggapan</div>
                                    </div> @endif
                                        @if ($x->tgl_ditolak !== "-")
                                    <div class="timeline-event event-grey }}">
                                    <div class="event-date">{{ $x->tgl_ditolak }}</div>
                                    <div class="event-content">Permohonan informasi ditolak oleh PPID</div>
                                    </div>
                                        @endif
                                        @if ($x->tgl_selesai !== "-")
                                    <div class="timeline-event event-green }}">
                                    <div class="event-date">{{ $x->tgl_selesai }}</div>
                                    <div class="event-content">Permohonan telah selesai, silahkan unduh untuk <a href="{{ asset($x->file_info) }}" target="_blank">melihat hasil permohonan</a></div>
                                    </div>
                                    </div>
                                        @endif
                                         @if ($x->tgl_konfirmasi !== "-")
                                    <div class="timeline-event event-green }}">
                                    <div class="event-date">{{ $x->tgl_konfirmasi }}</div>
                                    <div class="event-content">Informasi yang kami berikan telah anda konfirmasi sesuai dengan permohonan</div>
                                    </div>
                                    </div>
                                        @endif
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($x->tgl_selesai !== "-" && $x->tgl_konfirmasi === "-")
                    <form action="{{ route('keberatan.konfirmasi-user', $x->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-footer">
                            <div class="row text-start w-100">
                                <div class="col-12">
                                    <p>Apakah Hasil permohonan sudah sesuai ?</p>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="action" value="sesuai" class="btn btn-success" data-bs-dismiss="modal">Sesuai</button>
                                    <button type="submit" name="action" value="tidak_sesuai" class="btn btn-danger" data-bs-dismiss="modal">Tidak Sesuai</button>
                                </div>
                            </div>
                        </div>
                    </form>                    
                    @endif

                </div>
            </div>
        </div>
        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-secondary justify-content-end">
                        @if($keberatan->previousPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $keberatan->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif
            
                        <!-- Nomor Halaman -->
                        @php
                            $lastPage = min($keberatan->lastPage(), 3); // Tampilkan maksimal tiga halaman
                        @endphp
            
                        @for($i = 1; $i <= $lastPage; $i++)
                            <li class="page-item {{ $keberatan->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $keberatan->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
            
                        @if($keberatan->nextPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $keberatan->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
            @endif
        </div>
    </div>
@endsection
