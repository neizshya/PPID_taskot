@section('content')
    <div class="container py-2 mt-5 ">
        <div class="row g-3">


            <div class="col-12 fs-5 card bg-white p-3">
                <p class="fw-semibold fs-1  text-center">{{ $detailPengumuman['jadwal_judul'] }}</p>
                <p class="text-black fw-medium fs-4 text-center">{{ $detailPengumuman['jadwal_tanggal'] }}</p>
            {!! str_replace('../assets/uploads/', 'https://portal.tasikmalayakota.go.id/assets/uploads/', $detailPengumuman['jadwal_tempat']) !!}

                </div>
            </div>
        </div>
    </div>
@endsection
