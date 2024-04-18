    @php
        $informasi = ['berita', 'pengumuman'];
        $permohonan = ['permohonan_informasi_online', 'permohonan_keberatan_online'];
    @endphp
    @section('header')
    <script>
        @if(session('error'))
            alert('{{ session('error') }}');
        @endif
    </script>
    
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="navbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PPID</h5>
                <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <form action="/search" method="GET" class="text-end">
                    <div class="input-group">
                        <input class="form-control border-end-0 border-dark rounded-start-pill bg-white floatingInput"
                            type="text" placeholder="Cari Dokumen" id="searchbar-header" name="search">
                        <span class="input-group-append">
                            <button class="btn btn-outline-dark rounded-end-pill border-dark border-start-0" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </span>
                    </div>
                </form>
                {{-- fix --}}
                <ul class="nav nav-pills flex-column mb-md-0 text-white">

                    <li class="nav-item"><a href="/"
                            class="nav-link link-header {{ request()->is('/') ? 'actived' : '' }} rounded-0">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="ppid-center" class="nav-link link-header rounded-0" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">PPID Center</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link-header dropdown-toggle rounded-0 {{ in_array(request()->path(), $informasi) ? 'actived' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi
                            Publik</a>
                        <ul class="dropdown-menu bg-white">
                            <li><a class="dropdown-item text-capitalize" href="/berita">Berita</a></li>
                            <li><a class="dropdown-item text-capitalize" href="/pengumuman">Pengumuman</a></li>
                            <li><a class="dropdown-item text-capitalize" href="/informasi-berkala">Informasi berkala</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">Informasi setiap saat</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#">Informasi serta merta</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#">DIDP PPID Utama</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">DIDP PPID Pembantu</a></li>
                           <!-- <li><a class="dropdown-item text-capitalize" href="#">DIK PPID Kota
                                    Tasikmalaya</a> -->
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link-header dropdown-toggle rounded-0 {{ in_array(request()->path(), $permohonan) ? 'actived' : '' }}"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Permohonan
                            informasi</a>
                        <ul class="dropdown-menu bg-white">
                            <li><a class="dropdown-item text-capitalize" href="#">Permohonan Informasi
                                    Online</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#">permohonan keberatan
                                    online</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#">formulir pelayanan
                                    permohonan
                                    informasi
                                    Offline</a></li>
                            <li><a class="dropdown-item text-capitalize" href="/mekanisme_perolehan_informasi">mekanisme perolehan
                                    informasi</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="/span-lapor">SP4N Lapor</a></li>

                        </ul>
                    </li>
                    <li class="nav-item"><a href="/e-magazine"
                            class="nav-link link-header rounded-0 {{ request()->is('e-magazine') ? 'actived' : '' }}">E-magazine</a>
                    </li>
                    <li class="mt-3"><button class="btn btn-primary w-100" data-bs-toggle="modal"
                            data-bs-target="#modal_login">Login</button>
                    </li>
                </ul>
            </div>

        </div>

        <header class="sticky-top py-3   border-bottom px-5 bg-white shadow">
            <div class="row">
                <div class="col-1 text-start col-lg-1 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="{{ asset('image/ppid.png') }}" alt="" style="width: 5rem">
                    </a>
                </div>

                {{-- search bar --}}
                <form action="/search" method="GET" class="d-none d-xxl-block col-4 align-self-center  text-center  ">
                    <div class="input-group">
                        <input class="form-control border-end-0 border-dark rounded-start-pill bg-white floatingInput"
                            type="text" placeholder="Cari Dokumen" id="searchbar-header" name="search">
                        <span class="input-group-append">
                            <button class="btn btn-outline-dark  rounded-end-pill border-dark border-start-0"
                                type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </span>
                    </div>
                </form>
                <div class="d-none  d-xxl-block col-md-auto col-12 mb-2 mb-md-0 ms-auto">
                    <ul class=" nav ">
                        <li class="nav-item "><a href="{{ route('home') }}" class="nav-link px-2 link-header rounded-0 {{ request()->is('/') ? 'actived' : '' }}" onmouseover="playHoverSound('Beranda')">Beranda</a>

                        </li>
                        <li class="nav-item dropdown"><a href="{{ route('ppid.center') }}" class="nav-link px-2 link-header rounded-0">PPID
                                Center</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link-header dropdown-toggle {{ in_array(request()->path(), $informasi) ? 'actived' : '' }} rounded-0"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Informasi Publik
                            </a>
                            <ul class="dropdown-menu bg-white">
                                <li><a class="dropdown-item text-capitalize" href="{{ route('berita') }}">Berita</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('pengumuman') }}">Pengumuman</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('informasi-berkala') }}">Informasi berkala</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('informasi-setiap-saat') }}">Informasi setiap saat</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('informasi-serta-merta') }}">Informasi serta merta</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('ppid.utama') }}">DIDP PPID Utama</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('ppid.pembantu') }}">DIDP PPID Pembantu</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('ppid.dik') }}">DIK PPID Kota Tasikmalaya</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link-header dropdown-toggle rounded-0 {{ in_array(request()->path(), $permohonan) ? 'actived' : '' }}"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Permohonan informasi
                            </a>
                            <ul class="dropdown-menu bg-white">
                                <li><a class="dropdown-item text-capitalize" href="{{ route('permohonan.informasi') }}">Permohonan Informasi
                                        Online</a>
                                </li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('permohonan.keberatan') }}">permohonan keberatan
                                        online</a>
                                </li>
                                <li><a class="dropdown-item text-capitalize" href="#">formulir pelayanan permohonan
                                        informasi
                                        Offline</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('perolehan-informasi') }}">mekanisme perolehan
                                        informasi</a>
                                </li>
                                <li><a class="dropdown-item text-capitalize" href="{{ route('span-lapor') }}">SP4N Lapor</a></li>

                            </ul>
                        </li>
                        <li class="nav-item"><a href="/e-magazine"
                                class="nav-link px-2 link-header rounded-0 {{ request()->is('e-magazine') ? 'actived' : '' }}">E-magazine</a>
                        </li>
                        <li><button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modal_login">Login</button>
                        </li>
                    </ul>
                </div>
                <div class="col-11 text-end d-xxl-none align-self-center">
                    <button class="navbar-toggler menu-button" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#navbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>



        </header>
        <script>
            // Fungsi untuk memainkan suara saat menu difokuskan
            function playHoverSound(text) {
                // Buat elemen audio
                var audio = new Audio();
                // Set source audio ke URL data yang berisi suara yang di-generate secara dinamis
                audio.src = 'data:audio/wav;base64,' + btoa(text);
                // Putar suara
                audio.play();
            }
        </script>
    @endsection
