@section('content')
@php
    $itemsPerPage = 5; // Jumlah pengumuman per halaman
    $totalItems = count($pengumuman['items']); // Total jumlah pengumuman dari API
    $totalPages = ceil($totalItems / $itemsPerPage); // Hitung total halaman

    $currentPage = $_GET['page'] ?? 1; // Nomor halaman saat ini

    $startIndex = ($currentPage - 1) * $itemsPerPage;
    $endIndex = min($startIndex + $itemsPerPage - 1, $totalItems - 1); // Pastikan indeks tidak melebihi jumlah total pengumuman

    $currentPengumuman = array_slice($pengumuman['items'], $startIndex, $endIndex - $startIndex + 1);
@endphp

    <div class="mt-3 container-fluid text-center text-white mb-3">
        <p id="page-title" class="fs-1 ">Pengumuman</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>

    <div class="container-fluid d-flex justify-content-center my-5">
        <div class="card bg-white p-3 rounded-3" style="min-width: 50vw; max-width:90vw">
            <div class="card-body ">
                <div class="row ">
                    <div class="col-12 border-bottom border-1">
                        <p class="fs-1 fw-semibold"> Pengumuman</p>
                    </div>
                    <div id="pengumumanContainer">
                        @if($pengumuman['status'] === true)
                        @foreach ($currentPengumuman as $index => $dataPengumuman)
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
                        <p>Data pengumuman tidak tersedia.</p>
                    @endif
                </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                    <ul class="pagination" data-bs-theme="dark">
                        <!-- Tautan "Previous" -->
                        <li class="page-item">
                            <a class="page-link" href="?page={{ max(1, $currentPage - 5) }}" @if($currentPage <= 1) style="pointer-events: none; opacity: 0.5;" @endif>Previous</a>
                        </li>
                        
                        <!-- Nomor Halaman -->
                        @for ($i = max(1, $currentPage - 4); $i <= min($totalPages, $currentPage + 5); $i++)
                            <li class="page-item @if($i == $currentPage) active @endif">
                                <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                            </li>
                        @endfor
                        
                        <!-- Tautan "Next" -->
                        <li class="page-item">
                            <a class="page-link" href="?page={{ min($totalPages, $currentPage + 5) }}" @if($currentPage >= $totalPages) style="pointer-events: none; opacity: 0.5;" @endif>Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    
        @endsection

