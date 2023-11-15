@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-5 ">
        <p id="page-title" class="fs-1 ">E-Magazine</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container d-flex justify-content-center">
        <table class="table rounded-3 overflow-hidden table-borderless">
            <thead>
                <tr class="table-light">
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Judul E-Magazine</th>
                    <th class="text-center" scope="col">Tanggal Terbit</th>
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light">
                    <th class="text-center" scope="row">1</th>
                    <td class="text-center">Mark</td>
                    <td class="text-center">Otto</td>
                    <td class="text-center">
                        <button class="btn btn-info text-white" type="button" data-bs-toggle="modal"
                            data-bs-target="#detail_berkala">
                            Detail
                        </button>
                        <button class="btn btn-warning text-white" type="button" data-bs-toggle="modal"
                            data-bs-target="#online_berkala">
                            Lihat Online
                        </button>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
