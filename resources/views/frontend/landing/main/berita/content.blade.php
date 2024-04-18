@section('content')
@php
    $itemsPerPage = 12; // Jumlah berita per halaman
    $totalItems = count($berita['items']); // Total jumlah berita dari API
    $totalPages = ceil($totalItems / $itemsPerPage); // Hitung total halaman

    $currentPage = $_GET['page'] ?? 1; // Nomor halaman saat ini

    $startIndex = ($currentPage - 1) * $itemsPerPage;
    $endIndex = min($startIndex + $itemsPerPage - 1, $totalItems - 1); // Pastikan indeks tidak melebihi jumlah total berita

    $currentBerita = array_slice($berita['items'], $startIndex, $endIndex - $startIndex + 1);
@endphp

    <div class="mt-3 container-fluid text-center text-white mb-3">
        <p id="page-title" class="fs-1 ">Berita</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container-fluid">
        <div class="row g-5">
            <div class="col-12">
                <div class="row  gy-4">
                    {{-- card --}}
                    @if($berita['status'] === true)
                    @foreach ($currentBerita as $index => $dataBerita)
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

            <div class="col-12 d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination" data-bs-theme="dark">
                        <!-- Tautan "Previous" -->
                        <li class="page-item">
                            <a class="page-link" href="?page={{ max(1, $currentPage - 12) }}" @if($currentPage <= 1) style="pointer-events: none; opacity: 0.5;" @endif>Previous</a>
                        </li>
                        
                        <!-- Nomor Halaman -->
                        @for ($i = max(1, $currentPage - 11); $i <= min($totalPages, $currentPage + 12); $i++)
                            <li class="page-item @if($i == $currentPage) active @endif">
                                <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                            </li>
                        @endfor
                        
                        <!-- Tautan "Next" -->
                        <li class="page-item">
                            <a class="page-link" href="?page={{ min($totalPages, $currentPage + 12) }}" @if($currentPage >= $totalPages) style="pointer-events: none; opacity: 0.5;" @endif>Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
@endsection
