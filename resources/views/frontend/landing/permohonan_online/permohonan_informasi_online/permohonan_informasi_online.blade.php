<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permohonan Informasi Online | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">

</head>

<body>

    @include('components.footer')
    @include('frontend.landing.Permohonan_online.permohonan_informasi_online.content')
    @include('components.modal.modal_login')
    @yield('modallogin')
    <header
        class="sticky-top row py-3 d-block d-xl-flex justify-content-between align-content-center  border-bottom px-5 bg-white shadow">
        <div class="row d-flex justify-content-between">
            <div class="col-1 text-start col-lg-1 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="{{ asset('image/ppid.png') }}" alt="" style="width: 5rem">
                </a>
            </div>
            <div class="col-2 text-end d-flex d-xl-none justify-content-end ">
                <button class="navbar-toggler menu-button" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
            </div>
            <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="navbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PPID</h5>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <form action="" class="text-end">
                        <div class="input-group">
                            <input
                                class="form-control border-end-0 border-dark rounded-start-pill bg-white floatingInput"
                                type="text" placeholder="Cari Dokumen" id="searchbar-header">
                            <span class="input-group-append">
                                <button class="btn btn-outline-dark rounded-end-pill border-dark border-start-0"
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
                    <ul class="nav nav-pills flex-column mb-md-0 text-white">
                        <li class="nav-item"><a href="#" class="nav-link link-header rounded-0">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link link-header  rounded-0" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">PPID Center</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link-header dropdown-toggle rounded-0" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Informasi Publik</a>
                            <ul class="dropdown-menu bg-white">
                                <li><a class="dropdown-item text-capitalize" href="#">Berita</a></li>
                                <li><a class="dropdown-item text-capitalize" href="#">Pengumuman</a></li>
                                <li><a class="dropdown-item text-capitalize" href="#">Informasi berkala</a></li>
                                <li><a class="dropdown-item text-capitalize" href="#">Informasi setiap saat</a>
                                </li>
                                <li><a class="dropdown-item text-capitalize" href="#">Informasi serta merta</a>
                                </li>
                                <li><a class="dropdown-item text-capitalize" href="#">DIDP PPID Utama</a></li>
                                <li><a class="dropdown-item text-capitalize" href="#">DIDP PPID Pembantu</a></li>
                                <li><a class="dropdown-item text-capitalize" href="#">DIK PPID Kota
                                        Tasikmalaya</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link-header dropdown-toggle rounded-0 actived" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Permohonan informasi</a>
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
                                <li><a class="dropdown-item text-capitalize" href="#">mekanisme perolehan
                                        informasi</a>
                                </li>
                                <li><a class="dropdown-item text-capitalize" href="#">SP4N Lapor</a></li>

                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link link-header rounded-0">E-magazine</a>
                        </li>
                        <li class="mt-3"><button class="btn btn-primary w-100" data-bs-toggle="modal"
                                data-bs-target="#modal_login">Login</button>
                        </li>
                    </ul>
                </div>

            </div>
            <form action="" class="d-none d-xl-block col-4 align-self-center  text-center  ">
                <div class="input-group">
                    <input class="form-control border-end-0 border-dark rounded-start-pill bg-white floatingInput"
                        type="text" placeholder="Cari Dokumen" id="searchbar-header">
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
            <div class="d-none d-xl-flex col-12 col-md-7 mb-2 justify-content-end mb-md-0">
                <ul class=" nav ">
                    <li class="nav-item"><a href="#" class="nav-link px-2 link-header ">Beranda</a></li>
                    <li class="nav-item dropdown"><a href="#"
                            class="nav-link px-2 link-header  rounded-0 ">PPID Center</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link-header dropdown-toggle rounded-0 " href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi Publik
                        </a>
                        <ul class="dropdown-menu bg-white">
                            <li><a class="dropdown-item text-capitalize" href="#">Berita</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">Pengumuman</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">Informasi berkala</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">Informasi setiap saat</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">Informasi serta merta</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">DIDP PPID Utama</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">DIDP PPID Pembantu</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">DIK PPID Kota Tasikmalaya</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link-header dropdown-toggle rounded-0 actived" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Permohonan informasi
                        </a>
                        <ul class="dropdown-menu bg-white">
                            <li><a class="dropdown-item text-capitalize" href="#">Permohonan Informasi
                                    Online</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#">permohonan keberatan
                                    online</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#">formulir pelayanan permohonan
                                    informasi
                                    Offline</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">mekanisme perolehan
                                    informasi</a>
                            </li>
                            <li><a class="dropdown-item text-capitalize" href="#">SP4N Lapor</a></li>

                        </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 link-header rounded-0">E-magazine</a>
                    </li>
                    <li><button class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal_login">Login</button>
                    </li>
                </ul>
            </div>
        </div>



    </header>
    <main class="container-fluid" style="min-height: 80vh">
        @yield('content')
    </main>
    @yield('footer')



    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the title element
            const titleElement = document.getElementById("page-title")

            // Get the text length of the title
            const titleTextLength = titleElement.textContent.length;

            // Calculate the width based on the title length (adjust the multiplier as needed)
            const hrWidth = titleTextLength * 10; // You can adjust the multiplier as needed

            // Set the calculated width for the <hr> element
            const hrElement = document.getElementById("titleHr");
            hrElement.style.width = hrWidth + "px";
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const perorangan = document.getElementById("perorangan")
            const masyarakat = document.getElementById("kelompok_masyarakat")
            const hukum = document.getElementById("pemohon_berbadan_hukum")
            const formInputs = document.getElementById("form-inputs")
            const formPerorangan = `
              <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nama_pemohon" required
                                    placeholder="nama pemohon" />
                                <label class="label" for="nama_pemohon">
                                    Nama Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="ktp_sim" required
                                    placeholder="No KTP/SIM" />
                                <label class="label" for="ktp_sim">
                                    No KTP/SIM <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nim"
                                    placeholder="NIM (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="nim">
                                    NIM (Jika Pemohon adalah Mahasiswa) <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="univ"
                                    placeholder="Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="univ">
                                    Perguruan Tinggi (Jika Pemohon adalah Mahasiswa) <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="alamat"
                                    placeholder="Alamat Pemohon" />
                                <label class="label" for="alamat">
                                    Alamat Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="pekerjaan" required
                                    placeholder="Pekerjaan" />
                                <label class="label" for="pekerjaan">
                                    Pekerjaan <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="tel" id="no_hp" required
                                    placeholder="No Telepon/HP" />
                                <label class="label" for="no_hp">
                                    No Telepon/HP <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="email" id="email" required
                                    placeholder="E-mail" />
                                <label class="label" for="no_hp">
                                    E-mail <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>


                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="informasi_dibutuhkan" id="informasi_dibutuhkan"
                                    placeholder="Informasi Yang Dibutuhkan"></textarea>
                                <label class="label" for="informasi_dibutuhkan">
                                    Informasi Yang Dibutuhkan
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="alasan_informasi" id="alasan_informasi"
                                    placeholder="Alasan Permintaan Informasi"></textarea>
                                <label class="label" for="alasan_informasi">
                                    Alasan Permintaan Informasi
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-white">
                            <p class="text-capitalize"> cara memperoleh informasi</p>
                            <div class="ps-4">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="langsung_cara_memperoleh" value="langsung" required>
                                    <label class="form-check-label" for="langsung_cara_memperoleh">Langsung</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="email_cara_memperoleh" value="email">
                                    <label class="form-check-label" for="email_cara_memperoleh">Email</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="whatsapp_cara_memperoleh" value="whatsapp">
                                    <label class="form-check-label" for="whatsapp_cara_memperoleh">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 text-white">
                            <p class="text-capitalize"> cara mengirimkan informasi</p>
                            <div class="ps-4">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="langsung_cara_mengirimkan" value="langsung" required>
                                    <label class="form-check-label" for="langsung_cara_mengirimkan">Langsung</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="email_cara_mengirimkan" value="email">
                                    <label class="form-check-label" for="email_cara_mengirimkan">Email</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="whatsapp_cara_mengirimkan" value="whatsapp">
                                    <label class="form-check-label" for="whatsapp_cara_mengirimkan">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12  my-3">
                            <label for="identitas" class="form-label text-white">Identitas(KTP/SIM) Ukuran maksimal 300kb
                                <span class="text-danger">*</span></label>
                            <input data-bs-theme="dark" class="form-control" type="file" id="identitas"
                                accept=".jpg,.png,.pdf">
                        </div>
        `;
            const formMasyarakat = `
              <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nama_pemohon" required
                                    placeholder="nama pemohon" />
                                <label class="label" for="nama_pemohon">
                                    Nama Badan Hukum <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="ktp_sim" required
                                    placeholder="No KTP/SIM" />
                                <label class="label" for="ktp_sim">
                                    No KTP/SIM <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nim"
                                    placeholder="NIM (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="nim">
                                    NIM (Jika Pemohon adalah Mahasiswa) <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="univ"
                                    placeholder="Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="univ">
                                    Perguruan Tinggi (Jika Pemohon adalah Mahasiswa) <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="alamat"
                                    placeholder="Alamat Pemohon" />
                                <label class="label" for="alamat">
                                    Alamat Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="pekerjaan" required
                                    placeholder="Pekerjaan" />
                                <label class="label" for="pekerjaan">
                                    Pekerjaan <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="tel" id="no_hp" required
                                    placeholder="No Telepon/HP" />
                                <label class="label" for="no_hp">
                                    No Telepon/HP <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="email" id="email" required
                                    placeholder="E-mail" />
                                <label class="label" for="no_hp">
                                    E-mail <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>


                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="informasi_dibutuhkan" id="informasi_dibutuhkan"
                                    placeholder="Informasi Yang Dibutuhkan"></textarea>
                                <label class="label" for="informasi_dibutuhkan">
                                    Informasi Yang Dibutuhkan
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="alasan_informasi" id="alasan_informasi"
                                    placeholder="Alasan Permintaan Informasi"></textarea>
                                <label class="label" for="alasan_informasi">
                                    Alasan Permintaan Informasi
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-white">
                            <p class="text-capitalize"> cara memperoleh informasi</p>
                            <div class="ps-4">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="langsung_cara_memperoleh" value="langsung" required>
                                    <label class="form-check-label" for="langsung_cara_memperoleh">Langsung</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="email_cara_memperoleh" value="email">
                                    <label class="form-check-label" for="email_cara_memperoleh">Email</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="whatsapp_cara_memperoleh" value="whatsapp">
                                    <label class="form-check-label" for="whatsapp_cara_memperoleh">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 text-white">
                            <p class="text-capitalize"> cara mengirimkan informasi</p>
                            <div class="ps-4">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="langsung_cara_mengirimkan" value="langsung" required>
                                    <label class="form-check-label" for="langsung_cara_mengirimkan">Langsung</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="email_cara_mengirimkan" value="email">
                                    <label class="form-check-label" for="email_cara_mengirimkan">Email</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="whatsapp_cara_mengirimkan" value="whatsapp">
                                    <label class="form-check-label" for="whatsapp_cara_mengirimkan">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12  my-3">
                            <label for="identitas" class="form-label text-white">Identitas(KTP/SIM) ukuran maksimal 300kb
                                <span class="text-danger">*</span></label>
                            <input data-bs-theme="dark" class="form-control" type="file" id="identitas"
                                accept=".jpg,.png,.pdf">
                        </div>
                        <div class="col-12  my-3">
                            <label for="surat_kuasa" class="form-label text-white">Surat kuasa ukuran maksimal 300kb
                                <span class="text-danger">*</span></label>
                            <input data-bs-theme="dark" class="form-control" type="file" id="identitas_2"
                                accept=".jpg,.png,.pdf">
                        </div>
        `;
            const formHukum = `
              <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nama_pemohon" required
                                    placeholder="nama pemohon" />
                                <label class="label" for="nama_pemohon">
                                    Nama Kelompok Orang <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="ktp_sim" required
                                    placeholder="No KTP/SIM" />
                                <label class="label" for="ktp_sim">
                                    No KTP/SIM <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nim"
                                    placeholder="NIM (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="nim">
                                    NIM (Jika Pemohon adalah Mahasiswa) <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="univ"
                                    placeholder="Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="univ">
                                    Perguruan Tinggi (Jika Pemohon adalah Mahasiswa) <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="alamat"
                                    placeholder="Alamat Pemohon" />
                                <label class="label" for="alamat">
                                    Alamat Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="pekerjaan" required
                                    placeholder="Pekerjaan" />
                                <label class="label" for="pekerjaan">
                                    Pekerjaan <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="tel" id="no_hp" required
                                    placeholder="No Telepon/HP" />
                                <label class="label" for="no_hp">
                                    No Telepon/HP <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="email" id="email" required
                                    placeholder="E-mail" />
                                <label class="label" for="no_hp">
                                    E-mail <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>


                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="informasi_dibutuhkan" id="informasi_dibutuhkan"
                                    placeholder="Informasi Yang Dibutuhkan"></textarea>
                                <label class="label" for="informasi_dibutuhkan">
                                    Informasi Yang Dibutuhkan
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="alasan_informasi" id="alasan_informasi"
                                    placeholder="Alasan Permintaan Informasi"></textarea>
                                <label class="label" for="alasan_informasi">
                                    Alasan Permintaan Informasi
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-white">
                            <p class="text-capitalize"> cara memperoleh informasi</p>
                            <div class="ps-4">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="langsung_cara_memperoleh" value="langsung" required>
                                    <label class="form-check-label" for="langsung_cara_memperoleh">Langsung</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="email_cara_memperoleh" value="email">
                                    <label class="form-check-label" for="email_cara_memperoleh">Email</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_memperoleh"
                                        id="whatsapp_cara_memperoleh" value="whatsapp">
                                    <label class="form-check-label" for="whatsapp_cara_memperoleh">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 text-white">
                            <p class="text-capitalize"> cara mengirimkan informasi</p>
                            <div class="ps-4">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="langsung_cara_mengirimkan" value="langsung" required>
                                    <label class="form-check-label" for="langsung_cara_mengirimkan">Langsung</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="email_cara_mengirimkan" value="email">
                                    <label class="form-check-label" for="email_cara_mengirimkan">Email</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="cara_mengirimkan"
                                        id="whatsapp_cara_mengirimkan" value="whatsapp">
                                    <label class="form-check-label" for="whatsapp_cara_mengirimkan">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12  my-3">
                            <label for="identitas" class="form-label text-white">Identitas(KTP/SIM) ukuran maksimal 300kb
                                <span class="text-danger">*</span></label>
                            <input data-bs-theme="dark" class="form-control" type="file" id="identitas"
                                accept=".jpg,.png,.pdf">
                        </div>
                        <div class="col-12  my-3">
                            <label for="akta_pendirian" class="form-label text-white">Akta pendirian ukuran maksimal 300kb
                                <span class="text-danger">*</span></label>
                            <input data-bs-theme="dark" class="form-control" type="file" id="identitas_2"
                                accept=".jpg,.png,.pdf">
                        </div>
        `;

            function updateForm() {
                formInputs.innerHTML = ""; // Clear existing form elements

                // Check the selected option and add the corresponding form
                if (perorangan.checked) {
                    formInputs.innerHTML = formPerorangan;
                } else if (masyarakat.checked) {
                    formInputs.innerHTML = formMasyarakat;
                } else if (hukum.checked) {
                    formInputs.innerHTML = formHukum;
                }
            }

            // Add event listeners to update the form when the selection changes
            perorangan.addEventListener("change", updateForm);
            hukum.addEventListener("change", updateForm);
            masyarakat.addEventListener("change", updateForm);

            // Initial form update
            updateForm();
        });
    </script>


</body>

</html>
