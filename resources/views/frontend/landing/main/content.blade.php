@section('content')
{{--
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
--}}
    {{-- carousel --}}
    <div id="carousel-beranda" class="carousel slide carousel-height w-100 mb-3" data-bs-ride="carousel" data-bs-interval="4000" data-bs-touch="true">
        <div class="carousel-indicators">
            @foreach($slide as $key => $x)
                <button type="button" data-bs-target="#carousel-beranda" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}" aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
    
        <div class="carousel-inner">
            @foreach($slide as $key => $x)
                <div class="carousel-item{{ $key === 0 ? ' active' : '' }} carousel-image-height">
                    <img src="{{ asset($x->foto) }}" class="d-block mx-auto w-100 h-100 object-fit-fill" alt="...">
                </div>
            @endforeach
        </div>
    </div>  




    {{-- menu cepat --}}

    <div class="container-fluid mt-4 d-flex justify-content-center">
        <div class="row w-100  text-center text-white p-4 rounded-4" style="background-color: #03205C">
            <div class="col-12 col-sm-6 col-lg-3 col-xxl-3">
                <a class="row link-card-beranda text-decoration-none" href="/informasi-berkala">
                    <p class="col-12 fs-5" onclick="responsiveVoice.speak('Informasi Publik Secara Berkala.', 'Indonesian Female');">Informasi Publik Secara Berkala</p>
                    <p class="col-12 fs-6">Merupakan informasi yang wajib disediakan dan diumumkan secara berkala.</p>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 col-xxl-3">
                <a class="row link-card-beranda text-decoration-none" href="/informasi-serta-merta">
                    <p class="col-12 fs-5">Informasi Serta Merta</p>
                    <p class="col-12 fs-6">Informasi yang dapat mengancam hajat hidup orang banyak dan ketertiban umum.</p>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 col-xxl-3">
                <a class="row link-card-beranda text-decoration-none" href="/informasi-setiap-saat">
                    <p class="col-12 fs-5">Informasi Setiap Saat</p>
                    <p class="col-12 fs-6">Informasi yang wajib disediakan oleh Badan Publik.</p>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 col-xxl-3">
                <a class="row link-card-beranda text-decoration-none" href="/permohonan_informasi_online">
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
                    @if($beritaLimited)
                    @foreach ($beritaLimited as $dataBerita)
                        <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
                            <div class="card px-2 pt-2 bg-white news-card-hover shadow-sm">
                                <img src="https://portal.tasikmalayakota.go.id/assets/uploads/{{ $dataBerita['berita_cover'] }}" class="rounded-2 w-100" alt="...">
                                <div class="card-body">
                                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $dataBerita['berita_tanggal'] }}</h6>
                                    <p class="card-title fs-3">{{ Str::limit($dataBerita['berita_judul'], 50) }}</p>
                                    <p class="card-text text-ellipsis">{!! Str::limit(strip_tags($dataBerita['berita_isi']), 200) !!}</p>
                                </div>
                                <div class="card-footer border-0 bg-white">
                                    <div class="row">
                                        <div class="col-12 align-self-end text-end">
                                            <a href="/berita/{{ $dataBerita['berita_id'] }}" class="stretched-link text-black text-decoration-none">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Data berita tidak tersedia.</p>
                @endif
                </div>
            </div>
            <div class="card-footer bg-white border-0 text-center">
                <a class="btn btn-pengumuman text-capitalize w-50" href="/berita">Selengkapnya</a>
            </div>
            {{-- <div class="col-12 d-flex justify-content-center">
                <button class="btn btn-success text-capitalize p-3">
                    <a href="/berita" class="stretched-link text-white text-decoration-none">Selengkapnya</a>
                </button>
            </div> --}}
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
                    @if($pengumumanLimited)
                    @foreach ($pengumumanLimited as $dataPengumuman)
                    <div class="col-12 mt-3 border-bottom py-3 border-1 hovered-pengumuman">
                        <div class="row w-100 ">
                            <div class="col-12 col-lg-2 ">
                                <p class="fs-5 text-capitalize fw-semibold text-ellipsis">{{ $dataPengumuman['jadwal_tanggal'] }}</p>
                            </div>
                            <div class="col-12 col-lg-7 ">
                                <div class="w-75">
                                    <p class="fs-6 text-capitalize fw-bold link-dark text-decoration-none text-ellipsis">
                                        {{ $dataPengumuman['jadwal_judul'] }}</p>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center d-lg-block col-lg-3 text-end">
                                <a class="btn-pill text-decoration-none stretched-link"
                                    href="/pengumuman/{{ $dataPengumuman['jadwal_id'] }}">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <p>Data berita tidak tersedia.</p>
                    @endif
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
        <div class="row gy-2 gy-lg-3 justify-content-center">
            <div class="col-lg-3">
                <div class="card bg-white p-4 news-card-hover d-flex align-items-center justify-content-center" style="height: 100%">
                    <a href="https://portal.tasikmalayakota.go.id/" class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100%" target="_blank">
                        <img src="{{ asset('image/portal.png') }}" alt="Portal" style="max-width: 100%; max-height: 100%">
                    </a>
                </div>                
            </div>
            <div class="col-lg-3">
                <div class="card bg-white p-4 news-card-hover d-flex align-items-center justify-content-center" style="height: 100%" target="_blank">
                    <a href="https://lapor.go.id/">
                        <img src="{{ asset('image/lapor.png') }}" alt="SP4N Lapor" style="width: 100%; height: 100%">
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-white p-4 news-card-hover d-flex align-items-center justify-content-center" style="height: 100%" target="_blank">
                    <a href="https://opendata.tasikmalayakota.go.id/">
                        <img src="{{ asset('image/open-data.png') }}" alt="Open Data" style="width: 100%; height: 100%">
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-white p-4 news-card-hover d-flex align-items-center justify-content-center" style="height: 100%" target="_blank">
                    <a href="https://jdih.tasikmalayakota.go.id/">
                        <img src="{{ asset('image/jdih.png') }}" alt="JDIH" style="width: 100%; height: 100%">
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card bg-white p-4 news-card-hover d-flex align-items-center justify-content-center" style="height: 100%" target="_blank">
                    <a href="https://lpse.tasikmalayakota.go.id/">
                        <img src="{{ asset('image/lpse.png') }}" alt="LPSE" style="width: 100%; height: 100%">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
                
            </div>
        </div>
    </div>
@endsection
