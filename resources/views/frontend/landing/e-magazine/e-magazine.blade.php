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
    @include('components.header')
    @include('components.footer')

    @include('frontend.landing.e-magazine.content')
    @include('components.modal.modaldetail')
    @include('components.modal.modalonline')
    @include('components.modal.modal_login')
    @yield('modallogin')
    @yield('modaldetail')
    @yield('modalonline')

    @yield('header')
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
