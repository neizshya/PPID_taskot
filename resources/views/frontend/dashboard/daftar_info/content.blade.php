@section('content')
    
    

    {{-- modal tambah --}}
    <div class="modal fade" id="add_pic" tabindex="-1" aria-labelledby="add_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Daftar Informasi Publik</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body ">
                    <form class="row g-3" action="{{ route('info.tambah') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- Token untuk proteksi CSRF --> 
                        <div class="col-12">
                            <label for="judul_dokumen" class="form-label">Judul Dokumen</label>
                            <select class="form-select" aria-label="Default select example" name="judul" id="judul_dokumen" required>
                                <option selected hidden>Pilih Judul Dokumen</option>
                                @foreach($dokumenList as $dok)
                                <option value="{{ $dok->judul }}">{{ $dok->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="nama_instansi" class="form-label">Nama Instansi</label>
                            <select class="form-select" aria-label="Default select example" name="instansi" required>
                                <option selected hidden>Pilih Nama Instansi</option>
                                <option value="Diskominfo Kota Tasikmalaya">Diskominfo Kota Tasikmalaya</option>
                                @foreach($pembantuList as $pembantu)
                                <option value="{{ $pembantu->nama_instansi }}">{{ $pembantu->nama_instansi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_informasi" class="form-label">Jenis Informasi</label>
                            <input type="text" class="form-control bg-white" id="jenis_informasi" name="info" readonly placeholder="Jenis Informasi" >
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                            <input type="text" class="form-control bg-white" id="jenis_dokumen" name="dok" readonly placeholder="Jenis Dokumen" >
                        </div>
                        <div class="col-12">
                            <label for="jenis_ppid" class="form-label">Jenis PPID</label>
                            <input type="text" readonly class="form-control bg-white" id="jenis_ppid" name="layanan" placeholder="Jenis PPID">                             
                        </div>
                                                
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- konten --}}
    <div class="container-fluid p-4 d-flex justify-content-center">
        <div class=" card p-3 bg-white w-100 table-responsive min-vh-80">
            <div class="card-body">
                <div class="row">
                    <form class="col-6 text-start" id="searchForm">
                        <div class="input-group">
                            <button class="input-group-text text-body" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg>
                            </button>
                            <input type="text" class="form-control" id="searchInput" name="search" placeholder="Cari File...">
                        </div>
                    </form> 
                    <div class="col-6 text-end">
                        <button class="btn btn-success w-lg-50" data-bs-toggle="modal" data-bs-target="#add_pic">Tambah
                        </button>
                    </div>
                </div>

                <table class="table ">
                    <thead>
                        <tr class="">
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Judul Dokumen</th>
                            <th class="text-center" scope="col">Instansi</th>
                            <th class="text-center" scope="col">Jenis Informasi</th>
                            <th class="text-center" scope="col">Jenis Dokumen</th>
                            <th class="text-center" scope="col">Jenis PPID</th>

                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($file as $x)
                        <tr class="">
                           <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                           <td class="text-center">{{ $x->judul }}</td>
                           <td class="text-center">{{ $x->instansi }}</td>
                           <td class="text-center">{{ $x->info }}</td>
                           <td class="text-center">{{ $x->dok }}</td>
                           <td class="text-center">{{ $x->layanan }}</td>
                            <td class="text-center">

                                {{-- <button class="btn btn-warning" data-bs-toggle="modal" data-bs-toggle="modal"
                                    data-bs-target="#edit_pic_{{ $x->id }}">Edit</button>--}}
                                <button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete_pic_{{ $x->id }}">Hapus</button>

                            </td>
                        </tr>
                     {{-- modal delete --}}
                     <div class="modal fade" id="delete_pic_{{ $x->id }}" tabindex="-1" aria-labelledby="delete_pic_{{ $x->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-white">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus File</h1>
                                </div>
                                <div class="modal-body">
                                    <p>Yakin Hapus File Ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TIDAK</button>
                                    <form action="{{ route('info.delete', $x->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">YA</button>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    {{-- modal edit --}}
                    <div class="modal fade" id="edit_pic_{{ $x->id }}" tabindex="-1" aria-labelledby="edit_pic" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered">
                            <div class="modal-content bg-white">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit File</h1>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('file.update', $x->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-12">
                                            <label for="judul_dokumen" class="form-label">Judul Dokumen</label>
                                            <select class="form-select" aria-label="Default select example" name="judul" id="judul" required>
                                                <option selected hidden>Pilih Judul Dokumen</option>
                                                @foreach($dokumenList as $dok)
                                                    <option value="{{ $dok->judul }}" {{ $x->judul === $dok->judul ? 'selected' : '' }}>
                                                        {{ $dok->judul }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="nama_instansi" class="form-label">Nama Instansi</label>
                                            <select class="form-select" aria-label="Default select example" name="instansi" required>
                                                <option selected disabled hidden>Pilih Nama Instansi</option>
                                                <option value="Diskominfo Kota Tasikmalaya" {{ $x->instansi === 'Diskominfo Kota Tasikmalaya' ? 'selected' : '' }}>Diskominfo Kota Tasikmalaya</option>
                                                @foreach($pembantuList as $pembantu)
                                                    <option value="{{ $pembantu->nama_instansi }}" {{ $x->instansi === $pembantu->nama_instansi ? 'selected' : '' }}>{{ $pembantu->nama_instansi }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="jenis_informasi" class="form-label">Jenis Informasi</label>
                                            <input type="text" class="form-control bg-white" id="jenis_informasi" name="info" readonly placeholder="Jenis Informasi" >
                                        </div>
                                        <div class="col-12">
                                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                                            <input type="text" class="form-control bg-white" id="jenis_dokumen" name="dok" readonly placeholder="Jenis Dokumen" >
                                        </div>
                                        <div class="col-12">
                                            <label for="jenis_ppid" class="form-label">Jenis PPID</label>
                                            <input type="text" readonly class="form-control bg-white" id="jenis_ppid" name="layanan" placeholder="Jenis PPID">                             
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success">Ubah</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="card-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-secondary justify-content-end">
                        @if($file->previousPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $file->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif
            
                        <!-- Nomor Halaman -->
                        @php
                            $lastPage = min($file->lastPage(), 3); // Tampilkan maksimal tiga halaman
                        @endphp
            
                        @for($i = 1; $i <= $lastPage; $i++)
                            <li class="page-item {{ $file->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $file->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
            
                        @if($file->nextPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $file->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menyesuaikan nilai jenis informasi, jenis dokumen, dan jenis PPID
            function adjustValues(selectedJudul) {
                // Temukan data yang sesuai dengan judul yang dipilih
                var selectedDokumen = {!! json_encode($dokumenList) !!}.find(function(dok) {
                    return dok.judul === selectedJudul;
                });
    
                // Set nilai input jenis informasi, jenis dokumen, dan jenis PPID
                $('#jenis_informasi').val(selectedDokumen ? selectedDokumen.jenis_info : '');
                $('#jenis_dokumen').val(selectedDokumen ? selectedDokumen.jenis_dok : '');
                $('#jenis_ppid').val(selectedDokumen ? selectedDokumen.jenis_ppid : '');
            }
    
            // Panggil fungsi adjustValues saat modal ditampilkan
            $('.modal').on('shown.bs.modal', function () {
                var selectedJudul = $('#judul_dokumen').val();
                adjustValues(selectedJudul);
            });
    
            // Panggil fungsi adjustValues saat pilihan judul dokumen berubah
            $('#judul_dokumen').change(function() {
                var selectedJudul = $(this).val();
                adjustValues(selectedJudul);
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menampilkan nilai jenis informasi, jenis dokumen, dan jenis PPID berdasarkan judul dokumen yang terpilih
            function displayValues(selectedJudul) {
                // Temukan data yang sesuai dengan judul yang dipilih
                var selectedDokumen = {!! json_encode($dokumenList) !!}.find(function(dokumen) {
                    return dokumen.judul === selectedJudul;
                });
    
                // Set nilai input jenis informasi, jenis dokumen, dan jenis PPID
                $('#jenis_informasi').val(selectedDokumen ? selectedDokumen.jenis_info : '');
                $('#jenis_dokumen').val(selectedDokumen ? selectedDokumen.jenis_dok : '');
                $('#jenis_ppid').val(selectedDokumen ? selectedDokumen.jenis_ppid : '');
            }
    
            // Panggil fungsi displayValues saat halaman dimuat
            var selectedJudul = $('#judul').val(); // Dapatkan judul dokumen yang terpilih
            displayValues(selectedJudul);
    
            // Panggil fungsi displayValues saat pilihan judul dokumen berubah
            $('#judul').change(function() {
                var selectedJudul = $(this).val();
                displayValues(selectedJudul);
            });
        });
    </script>
    
                            
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Menambahkan event listener ke input untuk mendengarkan perubahan nilai
        $('#searchInput').on('input', function() {
            // Mendapatkan nilai input
            var keyword = $(this).val();
    
            // Mengirim permintaan Ajax ke endpoint pencarian
            $.ajax({
                type: 'GET',
                url: '{{ route('searchFile') }}',
                data: {
                    search: keyword
                },
                success: function(response) {
                    // Memperbarui tampilan dengan hasil pencarian yang sesuai
                    // Misalnya, perbarui tabel dengan hasil pencarian
                    var tableBody = $('.table tbody');
                    tableBody.empty(); // Membersihkan isi tabel sebelum menambahkan hasil pencarian baru
    
                    // Loop melalui hasil pencarian dan tambahkan baris ke tabel
                $.each(response.results, function(index, result) {
                    var newRow = '<tr class="">' +
                    '<th class="text-center" scope="row">' + (index + 1) + '</th>' +
                    '<td class="text-center">' + result.judul + '</td>' +
                    '<td class="text-center">' + result.instansi + '</td>' +
                    '<td class="text-center">' + result.info + '</td>' +
                    '<td class="text-center">' + result.dok + '</td>' +
                    '<td class="text-center">' + result.layanan + '</td>' +
                    '<td class="text-center">' +
                    // '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#file_' + result.id + '">Lihat File</button>' +
                    // '<button class="btn btn-warning" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#edit_pic_' + result.id + '">Edit</button>' +
                    '<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_pic_' + result.id + '">Hapus</button>' +
                    '</td></tr>';

                    tableBody.append(newRow);
                });
    
                }
            });
        });
    </script>


    @endsection
