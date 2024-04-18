@section('content')
    <div class="mt-3 container-fluid text-center text-white mb-5 ">
        <p id="page-title" class="fs-1 ">E-Magazine</p>
        <div id="titleHr" class="border border-3 border-white m-0 m-auto"></div>
    </div>
    <div class="container d-flex justify-content-center">
        <table class="table rounded-3 overflow-hidden table-borderless">
            <thead>
                <tr class="table-light">
                    <th class="text-center" scope="col">No</th>
                    <th class="text-center" scope="col">Judul E-Magazine</th>
                    <!-- <th class="text-center" scope="col">Tanggal Terbit</th> -->
                    <th class="text-center" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if($magazine['status'] === true)
                @foreach ($magazine['items'] as $index => $dataMagazine)
                    <tr class="table-light">
                        <th class="text-center" scope="row">{{ $index + 1 }}</th>
                        <td class="text-center">{{ $dataMagazine['title'] }}</td>
                        <td class="text-center">
                            <button class="btn btn-warning text-white view-online" type="button"
                                    data-bs-toggle="modal" data-bs-target="#online_berkala"
                                    data-title="{{ $dataMagazine['title'] }}"
                                    data-embed="{{ $dataMagazine['embed_url'] }}">
                                Lihat Online
                            </button>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>Data berita tidak tersedia.</p>
            @endif
            

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="online_berkala" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $dataMagazine['title'] }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio" style="--bs-aspect-ratio: 50%;">
                        <iframe id="online-iframe" style="width: 100%; height:100%" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bagian JavaScript untuk mengganti src dari iframe -->
    <script>
        const viewOnlineBtns = document.querySelectorAll('.view-online');
    
        viewOnlineBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const embedUrl = btn.getAttribute('data-embed');
                const iframe = document.getElementById('online-iframe');
                iframe.src = embedUrl;
            });
        });
    </script>
@endsection
