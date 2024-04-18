@section('content')
    
    

    {{-- modal tambah --}}
    <div class="modal fade" id="add_pic" tabindex="-1" aria-labelledby="add_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah File</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body ">
                    <form class="row g-3" action="{{ route('file.tambah') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- Token untuk proteksi CSRF --> 
                        <div class="col-12">
                            <label for="judul_dokumen" class="form-label">Judul Dokumen</label>
                            <input type="text" class="form-control bg-white" id="judul_dokumen" name="judul"
                                placeholder="Judul Dokumen">
                        </div>
                        {{-- @unless(Auth::user()->role !== 'PP') --}}
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
                        {{-- @endunless --}}
                        <div class="col-12">
                            <label for="jenis_informasi" class="form-label">Jenis Informasi</label>
                            <select class="form-select" aria-label="Default select example" name="info">
                                <option selected hidden>Pilih Jenis Informasi</option>
                                <option value="Informasi berkala">Informasi Berkala</option>
                                <option value="Informasi setiap saat">Informasi Setiap Saat</option>
                                <option value="Informasi serta merta">Informasi Serta Merta</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                            <select class="form-select" aria-label="Default select example" name="dok" required>
                                <option selected hidden>Pilih Jenis Dokumen</option>
                                @foreach($dokumenList as $dok)
                                <option value="{{ $dok->jenis_dokumen }}">{{ $dok->jenis_dokumen }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_ppid" class="form-label">Jenis PPID (ppid pembantu pake input, ppid utama
                                pake select)</label>
                                <select class="form-select" aria-label="Default select example" required name="layanan">
                                    <option selected hidden>Pilih Jenis Dokumen</option>
                                    @if(Auth::user()->role === 'PP')
                                        <option value="PPID Pembantu" selected>PPID Pembantu</option>
                                    @else
                                        <option value="PPID Utama" selected>PPID Utama</option>
                                        <option value="PPID Pembantu" selected>PPID Pembantu</option>
                                        
                                    @endif
                                    
                                </select>                                
                        </div>
                        <div class="col-12">
                            <label for="formFile" class="form-label">File</label>
                            <input class="form-control bg-white" type="file" name="file" id="formFile" accept=".pdf">
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

                                @if ($x->file !== null && $x->file !== "NULL")
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#file_{{ $x->id }}">Lihat File</button>
                            @endif
                            
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-toggle="modal"
                                    data-bs-target="#edit_pic_{{ $x->id }}">Upload</button>
                                {{--<button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete_pic_{{ $x->id }}">Hapus</button>--}}

                            </td>
                        </tr>
                        {{-- modal lihat --}}
                        <div class="modal fade" id="file_{{ $x->id }}" tabindex="-1" aria-labelledby="file" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content bg-white">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat File</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body ">
                                        <div class="ratio" style="--bs-aspect-ratio: 50%;">
                                            <iframe src="{{ asset('storage/' . $x->file) }}" style="width: 100%; height:100%" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     {{-- modal delete 
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
                                    <form action="{{ route('file.delete', $x->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">YA</button>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>--}}

                    {{-- modal edit --}}
    <div class="modal fade" id="edit_pic_{{ $x->id }}" tabindex="-1" aria-labelledby="edit_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upload File</h1>
                </div>
                <div class="modal-body ">
                    <form action="{{ route('file.update', $x->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="col-12">
                            <label for="formFile" class="form-label">File</label>
                            <input class="form-control bg-white" type="file" id="formFile" name="file" accept=".pdf">
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
                    '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#file_' + result.id + '">Lihat File</button>' +
                    '<button class="btn btn-warning" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#edit_pic_' + result.id + '">Edit</button>' +
                    '<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_pic_' + result.id + '">Hapus</button>' +
                    '</td></tr>';

                    tableBody.append(newRow);
                });
    
                }
            });
        });
    </script>

    @endsection
