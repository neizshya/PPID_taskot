@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12 mb-3 ">
                <form action="/search" method="GET" class="">
                    <div class="input-group bg-white rounded-5">
                        <input class="form-control border-end-0 border-dark rounded-start-pill bg-white floatingInput"
                            type="text" placeholder="Cari Dokumen" id="searchbar-header" name="search">
                        <span class="input-group-append">
                            <button class="btn btn-outline-dark  rounded-end-pill border-dark border-start-0"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </span> 
                    </div>
                </form>
            </div>
            <div class="col-12 table-responsive">
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
                        @foreach ($files as $x)
                        <tr class="table-light">
                           <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                           <td class="text-center">{{ $x->judul }}</td>
                           <td class="text-center">{{ $x->instansi }}</td>
                           <td class="text-center">{{ $x->info }}</td>
                           <td class="text-center">{{ $x->dok }}</td>
                           <td class="text-center">{{ $x->layanan }}</td>
                            <td class="text-center">
                                <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                    data-bs-target="#detail_berkala_{{ $x->id }}">
                                    Detail
                                </button>
                                <button class="btn btn-warning text-white" type="button" data-bs-toggle="modal"
                                    data-bs-target="#online_berkala_{{ $x->id }}">
                                    Lihat Online
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
        </div>
    </div>
@endsection
