@section('content')
    

    {{-- modal tambah --}}
    <div class="modal fade" id="add_pic" tabindex="-1" aria-labelledby="add_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Judul Dokumen</h1>
                </div>
                <div class="modal-body ">
                    <form class="row g-3" action="{{ route('judul.tambah') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="col-12">
                            <label for="judul" class="form-label">Judul Dokumen</label>
                            <input type="text" class="form-control bg-white" id="judul"
                                placeholder="Judul Dokumen" name="judul">
                        </div>
                        <div class="col-12">
                            <label for="jenis_informasi" class="form-label">Jenis Informasi</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_info">
                                <option selected hidden>Pilih Jenis Informasi</option>
                                <option value="Informasi berkala">Informasi Berkala</option>
                                <option value="Informasi setiap saat">Informasi Setiap Saat</option>
                                <option value="Informasi serta merta">Informasi Serta Merta</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_dok" required>
                                <option selected hidden>Pilih Jenis Dokumen</option>
                                @foreach($dokumenList as $dok)
                                <option value="{{ $dok->jenis_dokumen }}">{{ $dok->jenis_dokumen }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_ppid" class="form-label">Jenis PPID (ppid pembantu pake input, ppid utama
                                pake select)</label>
                                <select class="form-select" aria-label="Default select example" required name="jenis_ppid">
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
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control bg-white" id="keterangan"
                                placeholder="Keterangan" name="keterangan">
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table ">
                    <thead>
                        <tr class="">
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Judul Dokumen</th>
                            <th class="text-center" scope="col">Jenis Informasi</th>
                            <th class="text-center" scope="col">Jenis Dokumen</th>
                            <th class="text-center" scope="col">Jenis PPID</th>
                            <th class="text-center" scope="col">Keterangan</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($judul as $x)
                        <tr class="">
                            <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                            <td class="text-center">{{ $x->judul }}</td>
                            <td class="text-center">{{ $x->jenis_info }}</td>
                            <td class="text-center">{{ $x->jenis_dok }}</td>
                            <td class="text-center">{{ $x->jenis_ppid }}</td>
                            <td class="text-center">{{ $x->keterangan }}</td>
                            <td class="text-center">
                                
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_pic_{{ $x->id }}">Edit</button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_pic_{{ $x->id }}">Hapus</button>
                            </td>
                        </tr>
                        {{-- modal delete --}}
                        <div class="modal fade" id="delete_pic_{{ $x->id }}" tabindex="-1" aria-labelledby="delete_pic_{{ $x->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content bg-white">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Judul Dokumen</h1>
                                    </div>
                                    <div class="modal-body">
                                        <p>Yakin Hapus Judul Dokumen Ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TIDAK</button>
                                        <form action="{{ route('judul.delete', $x->id) }}" method="POST">
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Judul Dokumen</h1>
                </div>
                <div class="modal-body ">
                    <form class="row g-3" action="{{ route('judul.update', $x->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Ubah sesuai dengan metode yang sesuai, seperti PUT atau PATCH -->
                        <div class="col-12">
                            <label for="exampleFormControlInput1" class="form-label">Judul Dokumen</label>
                            <input type="text" class="form-control bg-white" name="judul" id="judul" placeholder="Judul Dokumen" value="{{ $x->judul ?? '' }}">
                        </div>
                        <div class="col-12">
                            <label for="jenis_info" class="form-label">Jenis Informasi</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_info">
                                <option value="Informasi berkala" {{ $x->jenis_info === 'Informasi berkala' ? 'selected' : '' }} >Informasi Berkala</option>
                                <option value="Informasi setiap saat" {{ $x->jenis_info === 'Informasi setiap saat' ? 'selected' : '' }}>Informasi Setiap Saat</option>
                                <option value="Informasi serta merta" {{ $x->jenis_info === 'Informasi serta merta' ? 'selected' : '' }}>Informasi Serta Merta</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="jenis_dokumen" class="form-label">Jenis Dokumen</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_dok" required>
                                @foreach($dokumenList as $dok)
                                <option value="{{ $dok->jenis_dokumen }}" {{ $x->jenis_dok === $dok->jenis_dokumen ? 'selected' : '' }}>
                                    {{ $dok->jenis_dokumen }}
                                </option>
                            @endforeach
                            
                            </select>
                        </div>
                        
                        <div class="col-12">
                            <label for="jenis_ppid" class="form-label">Jenis PPID (ppid pembantu pake input, ppid utama pake select)</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_ppid" required>
                                <option selected hidden>Pilih Jenis Dokumen</option>
                                @if(Auth::user()->role === 'PP')
                                    <option value="PPID Pembantu" {{ $x->jenis_ppid === 'PPID Pembantu' ? 'selected' : '' }}>PPID Pembantu</option>
                                @else
                                    <option value="PPID Utama" {{ $x->jenis_ppid === 'PPID Utama' ? 'selected' : '' }}>PPID Utama</option>
                                    <option value="PPID Pembantu" {{ $x->jenis_ppid === 'PPID Pembantu' ? 'selected' : '' }}>PPID Pembantu</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                            <input type="text" class="form-control bg-white" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{ $x->keterangan ?? '' }}">
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
                        @if($judul->previousPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $judul->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif
            
                        <!-- Nomor Halaman -->
                        @php
                            $lastPage = min($judul->lastPage(), 3); // Tampilkan maksimal tiga halaman
                        @endphp
            
                        @for($i = 1; $i <= $lastPage; $i++)
                            <li class="page-item {{ $judul->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $judul->appends(['search' => request()->query('search')])->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
            
                        @if($judul->nextPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $judul->appends(['search' => request()->query('search')])->nextPageUrl() }}" aria-label="Next">
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
            url: '{{ route('searchJenis') }}',
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
                var newRow = '<tr><td class="text-center">' + (index + 1) + '</td><td class="text-center">' + result.jenis_dokumen + '</td><td class="text-center">' +
                    '<button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_pic_' + result.id + '">Edit</button>' +
                    '<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_pic_' + result.id + '">Hapus</button>' +
                    '</td></tr>';

                tableBody.append(newRow);
            });

            }
        });
    });
</script>
@endsection
