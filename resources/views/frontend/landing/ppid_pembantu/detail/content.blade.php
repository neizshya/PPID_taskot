@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-3">
        <p id="page-title" class="fs-1 ">Nama PPID Pembantu</p>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>

                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
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
                                <tr class="table-light">
                                    <th class="text-center" scope="row">1</th>
                                    <td class="text-center">Mark</td>

                                    <td class="text-center">
                                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_berkala"">
                                            Detail
                                        </button>
                                        <button class="btn btn-success text-white" type="button" data-bs-toggle="modal"
                                            data-bs-target="#detail_wide"">
                                            Lihat
                                        </button>


                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
