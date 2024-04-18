@section('content')
    <div class="mt-3  text-center text-white mb-3">
        <p id="page-title" class="fs-1 ">PPID Utama</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container d-flex align-items-center  justify-content-center">
        <div class="row w-100">
            {{-- profil badan publik --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3 ">

                    <a data-bs-toggle="collapse" href="#profil_badan"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            profil badan publik
                        </p>
                    </a>
                    <div class="collapse bg-white p-2 " id="profil_badan">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Profil Badan Publik')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- program dan kegiatan --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#program_kegiatan"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">

                        <p class="fw-semibold fs-3 text-capitalize">
                            program dan kegiatan
                        </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="program_kegiatan">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Program Dan Kegiatan')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- informasi kerja --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#informasi_kerja"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            informasi kerja </p>
                    </a>
                    <div class="collapse bg-white p-2 " id="informasi_kerja">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Informasi Kerja')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- INFORMASI KEUANGAN --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#informasi_keuangan"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            informasi keuangan
                        </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="informasi_keuangan">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Informasi Keuangan')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{--  LAPORAN DAN PROSEDUR AKSES INFORMASI --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">
                    <a data-bs-toggle="collapse" href="#laporan_prosedur"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            laporan dan prosedur akses informasi </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="laporan_prosedur">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Laporan Dan Prosedur Akses Informasi')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- REGULASI --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#regulasi"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            regulasi </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="regulasi">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Regulasi')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- PENGADAAN BARANG DAN JASA --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#barang_jasa"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            pengadaan barang dan jasa </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="barang_jasa">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Pengadaan Barang Dan Jasa')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- PENGADUAN --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#pengaduan"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            pengaduan </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="pengaduan">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Pengaduan')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- DAFTAR ASET DAN INVENTARIS --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#aset_inventaris"
                        class="border-0 text-decoration-none text-black   bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            daftar aset dan inventaris </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="aset_inventaris">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Daftar Aset Dan Inventaris')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- INFORMASI DARURAT --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#informasi_darurat"
                        class="border-0 text-decoration-none text-black  bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            informasi darurat </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="informasi_darurat">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Informasi Darurat')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- DATA PERIZINAN --}}
            <div class="col-12 ">
                <div class="bg-white card rounded-3 p-2 mt-3">

                    <a data-bs-toggle="collapse" href="#data_perizinan"
                        class="border-0 text-decoration-none text-black  bg-white w-100 text-start">
                        <p class="fw-semibold fs-3 text-capitalize">
                            data perizinan </p>
                    </a>
                    <div class="collapse bg-white p-2   " id="data_perizinan">
                        <table class="table rounded-3 overflow-hidden table-borderless">
                            <thead>
                                <tr class="table-light">
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Nama Informasi</th>
                                    <th class="text-center" scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($file as $x)
                                @if ($x->dok === 'Data Perizinan')
                                <tr class="table-light">
                                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                                    <td class="text-center">{{ $x->judul }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala_{{ $x->id }}">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                        data-bs-target="#online_berkala_{{ $x->id }}">
                                        Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endif
                                
                {{-- Modal Detail Dokumen --}}
                <div class="modal fade " id="detail_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> Detail Dokumen</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            
                            </div>
                            <div class="modal-body">
                                <div class="row gy-3">
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Nama Instansi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->instansi }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->dok }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis Informasi</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->info }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Jenis PPID</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->layanan }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Format Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">pdf</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Ukuran Dokumen</span> <br> <span
                                            class="fs-6 fw-medium">124331 KB</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diterbitkan</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->created_at }}</span></div>
                                    <div class="col-6"> <span class="fs-5 fw-semibold">Tanggal Diperbaharui</span> <br> <span
                                            class="fs-6 fw-medium">{{ $x->updated_at }}</span></div>
            
            
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            {{--modal view online--}}
            <div class="modal fade" id="online_berkala_{{ $x->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl ">
                    <div class="modal-content bg-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Dokumen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        </div>
                        <div class="modal-body ">
                            <div class="ratio" style="--bs-aspect-ratio: 50%;">
        
                                <iframe src="{{ asset('storage/' . $x->file) }}"
                                    style="width: 100%; height:100%" frameborder="0"></iframe>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>
@endsection
