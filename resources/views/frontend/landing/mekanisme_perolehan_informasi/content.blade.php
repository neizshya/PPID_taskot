@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-5 ">
        <p id="page-title" class="fs-1 ">Mekanisme Perolehan Informasi</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container d-flex justify-content-center">
        <table class="table rounded-3 overflow-hidden table-borderless  ">
            <thead>
                <tr class="table-light ">
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Nama Informasi</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($file as $x)
                <tr class="table-light">
                    <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                           <td class="text-center">{{ $x->judul }}</td>
                    <td class="text-center">
                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                            data-bs-target="#detail_berkala_{{ $x->id }}">
                            Detail
                        </button>
                        <button class="btn btn-warning text-white" type="button" data-bs-toggle="modal"
                            data-bs-target="#online_berkala_{{ $x->id }}">
                            Lihat Online
                        </button>
                        <button class="btn btn-success" type="button" data-bs-toggle="modal"
                            data-bs-target="#unduh_berkala_{{ $x->id }}">
                            Unduh
                        </button>
                    </td>
                </tr>
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
    @endsection
