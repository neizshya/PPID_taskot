<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-magazine | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">


</head>

<body>

    @include('components.footer')

    @include('frontend.landing.e-magazine.content')
    @include('components.modal.modaldetail')
    @include('components.modal.modalonline')
    @include('components.modal.modal_login')
    @yield('modallogin')
    @yield('modaldetail')
    @yield('modalonline')
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
                    {{-- fix --}}
                    <ul class="nav nav-pills flex-column mb-md-0 text-white">
                        <li class="nav-item"><a href="#" class="nav-link link-header  rounded-0">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link link-header rounded-0" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">PPID Center</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link-header dropdown-toggle  rounded-0" href="#" role="button"
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
                            <a class="nav-link link-header dropdown-toggle rounded-0" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Permohonan informasi</a>
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
                        <li class="nav-item"><a href="#"
                                class="nav-link link-header rounded-0 actived">E-magazine</a>
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
                    <li class="nav-item"><a href="#" class="nav-link px-2 link-header rounded-0">Beranda</a>
                    </li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link px-2 link-header rounded-0">PPID
                            Center</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link-header dropdown-toggle rounded-0" href="#" role="button"
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
                        <a class="nav-link link-header dropdown-toggle rounded-0" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                    <li class="nav-item"><a href="#"
                            class="nav-link px-2 link-header rounded-0 actived ">E-magazine</a>
                    </li>
                    <li class=""><button class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal_login">Login</button>
                    </li>
                </ul>
            </div>
        </div>



    </header>

    <main class="container-fluid" style="min-height: 40vh">
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
    {{-- <h1>PDF.js Previous/Next example</h1>

    <div>
        <button id="prev">Previous</button>
        <button id="next">Next</button>
        &nbsp; &nbsp;
        <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
    </div>

    <canvas id="the-canvas" style="border: 1px solid black; direction: ltr;"></canvas>

    <script src="{{ asset('pdf-js/build/pdf.mjs') }}"></script>
    <script>
        var url = 'https://drive.google.com/uc?id=1tK7Rpw-IUGg8umeweOoiS8ppq92OXI2F';

        var pdfjsLib = window['pdfjs-dist/build/pdf.mjs'];

        pdfjsLib.GlobalWorkerOptions.workerSrc = '{{ asset('pdf-js/build/pdf.worker.mjs') }}';



        var pdfDoc = null;
        var pageNum = 1;
        var pageRendering = false;
        var pageNumPending = null;
        var scale = 1.5; // Adjust the scale as needed
        var canvas = document.getElementById('the-canvas');
        var ctx = canvas.getContext('2d');

        function renderPage(num) {
            pageRendering = true;
            pdfDoc.getPage(num).then(function(page) {
                var viewport = page.getViewport({
                    scale: scale
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);

                renderTask.promise.then(function() {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });

            document.getElementById('page_num').textContent = num;
        }

        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num);
            }
        }

        function onPrevPage() {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            queueRenderPage(pageNum);
        }

        function onNextPage() {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            queueRenderPage(pageNum);
        }

        pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
            pdfDoc = pdfDoc_;
            document.getElementById('page_count').textContent = pdfDoc.numPages;
            renderPage(pageNum);
        });

        document.getElementById('prev').addEventListener('click', onPrevPage);
        document.getElementById('next').addEventListener('click', onNextPage);
    </script> --}}
</body>

</html>
