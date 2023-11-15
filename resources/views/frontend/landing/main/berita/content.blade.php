@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-3">
        <p id="page-title" class="fs-1 ">Berita</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container-fluid">
        <div class="row g-5">
            <div class="col-12">
                <div class="row  gy-4">
                    {{-- card --}}

                    <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
                        <div class="card px-2 pt-2 bg-white news-card-hover shadow-sm">
                            <img src="https://portal.tasikmalayakota.go.id/assets/uploads/SHB1r_1698899497_katasik-4.jpg"
                                class="rounded-2 w-100 " alt="...">
                            <div class="card-body ">
                                <h6 class="card-subtitle mb-2 text-body-secondary">Rabu, 20 Oktober 2021 | Nama Penulis</h6>
                                <p class="card-title fs-3">Judul Berita</p>
                                <p class="card-text text-ellipsis">preview berita Lorem ipsum dolor sit amet
                                    consectetur,adipisicing elit. Eius perferendis velit expedita natus, qui, minima libero
                                    id officia sequi sunt vero porro, quisquam explicabo obcaecati quis deleniti
                                    molestiae.In, perferendis!</p>

                            </div>
                            <div class="card-footer border-0 bg-white">
                                <div class="row ">

                                    <div class="col-12 align-self-end text-end">
                                        <a href="/berita/namaberita"
                                            class="stretched-link  text-black text-decoration-none">
                                            <i class="bi bi-arrow-right "></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-danger w-50 p-2 rounded-3 fs-5" type="button">Muat Baru</button>
            </div>
        </div>
    </div>
@endsection
