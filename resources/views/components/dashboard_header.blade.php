@php
    $dashboard = 'dashboard';
    $caraousel = 'caraousel';
    $input_file = 'input_file';
    $permohonan_informasi = 'permohonan_informasi_dashboard';
    $permohonan_keberatan = 'permohonan_keberatan_dashboard';
    $ppid_pembantu = 'ppid_pembantu_dashboard';
    $jenis_dokumen = 'jenis_dokumen';
    $akun = '/url_dashbord';
    $list_akun = 'list_akun';
@endphp

@section('header_dashboard')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4  border-radius-xl py-3 bg-white mt-3 shadow" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3 d-flex justify-content-between align-items-center">
            <h6 class="font-weight-bolder mb-0 fs-3">
                {{ request()->path() === $dashboard
                    ? 'Dashboard'
                    : (request()->path() === $caraousel
                        ? 'Caraousel'
                        : (request()->path() === $input_file
                            ? 'Input File'
                            : (request()->path() === $permohonan_informasi
                                ? 'Permohonan Informasi'
                                : (request()->path() === $permohonan_keberatan
                                    ? 'Permohonan Keberatan'
                                    : (request()->path() === $ppid_pembantu
                                        ? 'PPID Pembantu'
                                        : (request()->path() === $jenis_dokumen
                                            ? 'Jenis Dokumen'
                                            : (request()->path() === $list_akun
                                                ? 'List Akun'
                                                : ''))))))) }}
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
        </div>
    </nav>
@endsection
