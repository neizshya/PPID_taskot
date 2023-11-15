@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12 mb-3 ">
                <form action="" class="">
                    <div class="input-group bg-white rounded-5">
                        <input class="form-control border-end-0 border-dark rounded-start-pill bg-white floatingInput"
                            type="text" placeholder="Cari Dokumen" id="searchbar-header" value="som">
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
                        <tr class="table-light">
                            <th class="text-center" scope="row">1</th>
                            <td class="text-center">Mark</td>
                            <td class="text-center">Otto</td>
                            <td class="text-center">@mdo</td>
                            <td class="text-center">@mdo</td>
                            <td class="text-center">@mdo</td>
                            <td class="text-center">
                                <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                    data-bs-target="#detail_berkala">
                                    Detail
                                </button>
                                <button class="btn btn-warning text-white" type="button" data-bs-toggle="modal"
                                    data-bs-target="#online_berkala">
                                    Lihat Online
                                </button>
                                <button class="btn btn-success" type="button" data-bs-toggle="modal"
                                    data-bs-target="#unduh_berkala">
                                    Unduh
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
