@section('content')
    {{-- carousel --}}

    <div id="carousel-beranda" class="carousel slide carousel-height w-100 mb-3" data-bs-ride="carousel" data-bs-interval="4000"
        data-bs-touch="true">
        <div class="carousel-indicators">
            <a type="button" data-bs-target="#carousel-beranda" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></a>
            <a type="button" data-bs-target="#carousel-beranda" data-bs-slide-to="1" aria-label="Slide 2"></a>
            <a type="button" data-bs-target="#carousel-beranda" data-bs-slide-to="2" aria-label="Slide 3"></a>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item carousel-image-height active">
                <img src="https://cdn.pixabay.com/photo/2023/10/21/18/47/boat-8332114_1280.jpg"
                    class="d-block mx-auto w-100 h-100 object-fit-cover" alt="...">
            </div>
            <div class="carousel-item carousel-image-height">
                <img src="https://media.istockphoto.com/id/1258157315/id/foto/open-water-fun.webp?s=2048x2048&w=is&k=20&c=svi-56t3NpBknqQxg-xZNko56xknAb_IMPc9WdlASyY="
                    class="d-block mx-auto w-100 h-100 object-fit-cover" alt="...">
            </div>
            <div class="carousel-item carousel-image-height">
                <img src="https://media.istockphoto.com/id/1211025104/id/foto/pace-picnic-island-miami-biscayne-bay.webp?s=2048x2048&w=is&k=20&c=GCpJlYos-XQFbxfgJfzU1HqJZYVt0yRjqn2KHkGma-I="
                    class="d-block mx-auto w-100 h-100 object-fit-cover" alt="...">
            </div>
        </div>
    </div>



    {{-- menu cepat --}}

    <div class="container-fluid mt-4 d-flex justify-content-center">
        <div class="row w-100  text-center text-white p-4 rounded-4" style="background-color: #03205C">
            <div class="col-12 col-sm-6 col-lg-3 col-xxl-3">
                <a class="row link-card-beranda text-decoration-none" href="javascript:void(0)">
                    <p class="col-12 fs-5">Informasi Publik Secara Berkala</p>
                    <p class="col-12 fs-6">Merupakan informasi yang wajib disediakan dan diumumkan secara berkala.</p>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 col-xxl-3">
                <a class="row link-card-beranda text-decoration-none" href="javascript:void(0)">
                    <p class="col-12 fs-5">Informasi Serta Merta</p>
                    <p class="col-12 fs-6">Informasi yang dapat mengancam hajat hidup orang banyak dan ketertiban umum.</p>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 col-xxl-3">
                <a class="row link-card-beranda text-decoration-none" href="javascript:void(0)">
                    <p class="col-12 fs-5">Informasi Setiap Saat</p>
                    <p class="col-12 fs-6">Informasi yang wajib disediakan oleh Badan Publik.</p>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 col-xxl-3">
                <a class="row link-card-beranda text-decoration-none" href="javascript:void(0)">
                    <p class="col-12 fs-5">Permintaan Informasi</p>
                    <p class="col-12 fs-6">Klik disini untuk melakukan permintaan informasi publik.</p>
                </a>
            </div>

        </div>
    </div>

    {{-- berita --}}
    <div class="container-fluid p-5 mt-5 bg-white">
        <div class="w-100 row text-black ">
            <p class="col-12 fs-1 text-start">Berita Terbaru</p>
            <p class="col-12 fs-5 text-start">Berita dan artikel terbaru seputar Kota Tasikmalaya yang dirangkum dalam
                sebuah portal berita
            </p>
        </div>
        <div class="row gy-5">
            <div class="col-12">
                <div class="row d-flex justify-content-center gy-4">
                    {{-- card --}}

                    <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
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
                                        <a href="#" class="stretched-link  text-black text-decoration-none">
                                            <i class="bi bi-arrow-right "></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
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
                                        <a href="#" class="stretched-link  text-black text-decoration-none">
                                            <i class="bi bi-arrow-right "></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
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
                                        <a href="#" class="stretched-link  text-black text-decoration-none">
                                            <i class="bi bi-arrow-right "></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
                        <div class="card px-2 pt-2 bg-white news-card-hover shadow-sm">
                            <img src="https://portal.tasikmalayakota.go.id/assets/uploads/SHB1r_1698899497_katasik-4.jpg"
                                class="rounded-2 w-100 " alt="...">
                            <div class="card-body ">
                                <h6 class="card-subtitle mb-2 text-body-secondary">Rabu, 20 Oktober 2021 | Nama Penulis
                                </h6>
                                <p class="card-title fs-3">Judul Berita</p>
                                <p class="card-text text-ellipsis">preview berita Lorem ipsum dolor sit amet
                                    consectetur,adipisicing elit. Eius perferendis velit expedita natus, qui, minima libero
                                    id officia sequi sunt vero porro, quisquam explicabo obcaecati quis deleniti
                                    molestiae.In, perferendis!</p>

                            </div>
                            <div class="card-footer border-0 bg-white">
                                <div class="row ">

                                    <div class="col-12 align-self-end text-end">
                                        <a href="#" class="stretched-link  text-black text-decoration-none">
                                            <i class="bi bi-arrow-right "></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
                        <div class="card px-2 pt-2 bg-white news-card-hover shadow-sm">
                            <img src="https://portal.tasikmalayakota.go.id/assets/uploads/SHB1r_1698899497_katasik-4.jpg"
                                class="rounded-2 w-100 " alt="...">
                            <div class="card-body ">
                                <h6 class="card-subtitle mb-2 text-body-secondary">Rabu, 20 Oktober 2021 | Nama Penulis
                                </h6>
                                <p class="card-title fs-3">Judul Berita</p>
                                <p class="card-text text-ellipsis">preview berita Lorem ipsum dolor sit amet
                                    consectetur,adipisicing elit. Eius perferendis velit expedita natus, qui, minima libero
                                    id officia sequi sunt vero porro, quisquam explicabo obcaecati quis deleniti
                                    molestiae.In, perferendis!</p>

                            </div>
                            <div class="card-footer border-0 bg-white">
                                <div class="row ">

                                    <div class="col-12 align-self-end text-end">
                                        <a href="#" class="stretched-link  text-black text-decoration-none">
                                            <i class="bi bi-arrow-right "></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
                        <div class="card px-2 pt-2 bg-white news-card-hover shadow-sm">
                            <img src="https://portal.tasikmalayakota.go.id/assets/uploads/SHB1r_1698899497_katasik-4.jpg"
                                class="rounded-2 w-100 " alt="...">
                            <div class="card-body ">
                                <h6 class="card-subtitle mb-2 text-body-secondary">Rabu, 20 Oktober 2021 | Nama Penulis
                                </h6>
                                <p class="card-title fs-3">Judul Berita</p>
                                <p class="card-text text-ellipsis">preview berita Lorem ipsum dolor sit amet
                                    consectetur,adipisicing elit. Eius perferendis velit expedita natus, qui, minima libero
                                    id officia sequi sunt vero porro, quisquam explicabo obcaecati quis deleniti
                                    molestiae.In, perferendis!</p>

                            </div>
                            <div class="card-footer border-0 bg-white">
                                <div class="row ">

                                    <div class="col-12 align-self-end text-end">
                                        <a href="#" class="stretched-link  text-black text-decoration-none">
                                            <i class="bi bi-arrow-right "></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>







                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-success text-capitalize p-3">
                    selengkapnya
                </button>
            </div>
        </div>

    </div>
    {{-- pengumuman --}}
    <div class="container-fluid d-flex justify-content-center my-5">
        <div class="card bg-white p-3 rounded-3" style="min-width: 50vw; max-width:90vw">
            <div class="card-body ">
                <div class="row ">
                    <div class="col-12 border-bottom border-1">
                        <p class="fs-1 fw-semibold"> Pengumuman</p>
                    </div>
                    {{-- konten pengumuman --}}
                    <div class="col-12 mt-3 border-bottom py-3 border-1 hovered-pengumuman">
                        <div class="row w-100 ">
                            <div class="col-12 col-lg-2 ">
                                <p class="fs-5 text-capitalize fw-semibold text-ellipsis"> 24 Oktober 2205</p>
                            </div>
                            <div class="col-12 col-lg-7 ">
                                <div class="w-75">
                                    <p class="fs-6 text-capitalize fw-bold link-dark text-decoration-none text-ellipsis">
                                        nama
                                        pengumuman
                                        Lorem
                                        ipsum dolor, sit amet
                                        consectetur
                                        adipisicing elit. Dignissimos, repellat provident, praesentium, iure optio doloribus
                                        sapiente distinctio eligendi nemo dolor ad recusandae? Eligendi assumenda quo modi
                                        voluptatum nihil ea natus.</p>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center d-lg-block col-lg-3 text-end">
                                <a class="btn-pill text-decoration-none stretched-link"
                                    href="/pengumuman/detail">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 border-bottom py-3 border-1 hovered-pengumuman">
                        <div class="row w-100 ">
                            <div class="col-12 col-lg-2 ">
                                <p class="fs-5 text-capitalize fw-semibold text-ellipsis"> 24 Oktober 2205</p>
                            </div>
                            <div class="col-12 col-lg-7 ">
                                <div class="w-75">
                                    <p class="fs-6 text-capitalize fw-bold link-dark text-decoration-none text-ellipsis">
                                        nama
                                        pengumuman
                                        Lorem
                                        ipsum dolor, sit amet
                                        consectetur
                                        adipisicing elit. Dignissimos, repellat provident, praesentium, iure optio doloribus
                                        sapiente distinctio eligendi nemo dolor ad recusandae? Eligendi assumenda quo modi
                                        voluptatum nihil ea natus.</p>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center d-lg-block col-lg-3 text-end">
                                <a class="btn-pill text-decoration-none stretched-link"
                                    href="/pengumuman/detail">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 border-bottom py-3 border-1 hovered-pengumuman">
                        <div class="row w-100 ">
                            <div class="col-12 col-lg-2 ">
                                <p class="fs-5 text-capitalize fw-semibold text-ellipsis"> 24 Oktober 2205</p>
                            </div>
                            <div class="col-12 col-lg-7 ">
                                <div class="w-75">
                                    <p class="fs-6 text-capitalize fw-bold link-dark text-decoration-none text-ellipsis">
                                        nama
                                        pengumuman
                                        Lorem
                                        ipsum dolor, sit amet
                                        consectetur
                                        adipisicing elit. Dignissimos, repellat provident, praesentium, iure optio doloribus
                                        sapiente distinctio eligendi nemo dolor ad recusandae? Eligendi assumenda quo modi
                                        voluptatum nihil ea natus.</p>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center d-lg-block col-lg-3 text-end">
                                <a class="btn-pill text-decoration-none stretched-link"
                                    href="/pengumuman/detail">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 border-bottom py-3 border-1 hovered-pengumuman">
                        <div class="row w-100 ">
                            <div class="col-12 col-lg-2 ">
                                <p class="fs-5 text-capitalize fw-semibold text-ellipsis"> 24 Oktober 2205</p>
                            </div>
                            <div class="col-12 col-lg-7 ">
                                <div class="w-75">
                                    <p class="fs-6 text-capitalize fw-bold link-dark text-decoration-none text-ellipsis">
                                        nama
                                        pengumuman
                                        Lorem
                                        ipsum dolor, sit amet
                                        consectetur
                                        adipisicing elit. Dignissimos, repellat provident, praesentium, iure optio doloribus
                                        sapiente distinctio eligendi nemo dolor ad recusandae? Eligendi assumenda quo modi
                                        voluptatum nihil ea natus.</p>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center d-lg-block col-lg-3 text-end">
                                <a class="btn-pill text-decoration-none stretched-link"
                                    href="/pengumuman/detail">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 border-bottom py-3 border-1 hovered-pengumuman">
                        <div class="row w-100 ">
                            <div class="col-12 col-lg-2 ">
                                <p class="fs-5 text-capitalize fw-semibold text-ellipsis"> 24 Oktober 2205</p>
                            </div>
                            <div class="col-12 col-lg-7 ">
                                <div class="w-75">
                                    <p class="fs-6 text-capitalize fw-bold link-dark text-decoration-none text-ellipsis">
                                        nama
                                        pengumuman
                                        Lorem
                                        ipsum dolor, sit amet
                                        consectetur
                                        adipisicing elit. Dignissimos, repellat provident, praesentium, iure optio doloribus
                                        sapiente distinctio eligendi nemo dolor ad recusandae? Eligendi assumenda quo modi
                                        voluptatum nihil ea natus.</p>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center d-lg-block col-lg-3 text-end">
                                <a class="btn-pill text-decoration-none stretched-link"
                                    href="/pengumuman/detail">Selengkapnya</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-footer bg-white border-0 text-center">
                <a class="btn btn-pengumuman text-capitalize w-50" href="/pengumuman">lihat seluruh pengumuman</a>
            </div>
        </div>
    </div>

    {{-- video profil --}}
    <div class="container-fluid p-5  bg-white">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <p class="text-capitalize fs-1">video profil PPID kota tasikmalaya</p>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="ratio ratio-16x9">

                    <iframe src="https://www.youtube-nocookie.com/embed/QxzRW4P4wfg?si=8jL1tXzRIhl2EP_K"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    {{-- web terkait --}}
    <div class="container-fluid mt-5">
        <div class="row gy-2 gy-lg-3">
            <div class="col-12">
                <div class="row gy-2 d-flex justify-content-center">
                    <div class="col-lg-3">
                        <div class="card bg-white p-3 news-card-hover">
                            <p>portal</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-white p-3 news-card-hover">
                            <p>SP4N</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-white p-3 news-card-hover">
                            <p>Data</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row d-flex gy-2 justify-content-center">
                    <div class="col-lg-3">
                        <div class="card bg-white p-3 news-card-hover">
                            <p>JDIH</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-white p-3 news-card-hover">
                            <p>LPSE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
