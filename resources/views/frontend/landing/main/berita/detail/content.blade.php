@section('content')
    <div class="container py-2 mt-5 ">
        <div class="row g-3">

            <div class="col-12">
                <p class="fw-semibold fs-1 text-white text-center">{{ $detailBerita['berita_judul']}}</p>
                <p class="text-white fw-medium fs-4 text-center">{{ $detailBerita['berita_tanggal']}}</p>
            </div>
            <div class="col-12 m-0 m-auto text-center">
                <img class="img-fluid rounded-3"
                    src="https://portal.tasikmalayakota.go.id/assets/uploads/{{ $detailBerita['berita_cover']}}"
                    alt="">
            </div>
            <div class="col-12 fs-5 card bg-white p-3">
                {!! $detailBerita['berita_isi'] !!}
            </div>

        </div>
    </div>
@endsection
