@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-5 ">
        <p id="page-title" class="fs-1 ">PPID Pembantu</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container-fluid px-5">
        <div class="row g-3">
            @foreach ($layanan as $x)
            <div class="col-12 col-md-6 col-lg-3 ">
                <div class="card p-3 news-card-hover bg-white mw-50">
                    <div class="row gy-2">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="rounded-3 overflow-hidden" style="width: 250px; height: 250px;">
                                <img class="w-100 h-100 img-responsive"
                                    src="{{ asset($x->foto) }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="text-capitalize fs-4 fw-semibold text-black text-decoration-none stretched-link"
                                href="{{ route('ppid-pembantu.detail', $x->id) }}">{{ $x->nama_instansi }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
