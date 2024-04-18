@section('content')
  
   
    {{-- modal tambah --}}
    <div class="modal fade" id="add_pic" tabindex="-1" aria-labelledby="add_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah PPID Pembantu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body ">

                    <form class="row g-3" action="{{ route('tambah-ppid-pembantu') }}" method="POST" enctype="multipart/form-data">
                        @csrf <!-- Token untuk proteksi CSRF --> 
                    
                        <div class="col-12">
                            <input class="form-control bg-white" type="file" name="foto" id="formFile" accept=".jpg,.png">
                        </div>
                    
                        <div class="col-12">
                            <label for="nama_instansi" class="form-label">Nama Instansi</label>
                            <input type="text" class="form-control bg-white" name="nama_instansi" id="nama_instansi" placeholder="Nama Instansi">
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
        <div class=" card p-3 bg-white w-100 table-responsive min-vh-80 d-flex ">
            <div class="card-body">
                <div class="text-end">
                    <button class="btn btn-success w-25 " data-bs-toggle="modal" data-bs-target="#add_pic">Tambah
                    </button>
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
                <table class="table">
                    <thead>
                        <tr class="">
                            <th class="text-center" scope="col">No</th>
                            <th class="text-center" scope="col">Nama PPID Pembantu</th>
                            <th class="text-center" scope="col">Gambar</th>

                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($p_pembantus as $x)
                        <tr class="">
                            <th class="text-center" scope="row">{{ $loop->index + 1 }}</th>
                            <td class="text-center">{{ $x->nama_instansi }}</td>
                            <td class="d-flex justify-content-center">
                                <div class="rounded-3 overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="w-100 h-100 img-responsive" src="{{ asset($x->foto) }}" alt="">
                                </div>
                            </td>
                            <td class="text-center">
                                
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit_pic_{{ $x->id }}">Edit</button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_pic_{{ $x->id }}">Hapus</button>
                            </td>
                        </tr>
                            <!-- modal delete -->
                        <div class="modal fade" id="delete_pic_{{ $x->id }}" tabindex="-1" aria-labelledby="delete_pic_{{ $x->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content bg-white">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus PPID Pembantu</h1>
                                    </div>
                                    <div class="modal-body">
                                        <p>Yakin Hapus PPID Pembantu Ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TIDAK</button>
                                        <form action="{{ route('hapus_pembantu', $x->id) }}" method="POST">
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
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content bg-white">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit PPID Pembantu</h1>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="{{ route('pembantu.update', $x->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT') <!-- Ubah sesuai dengan metode yang sesuai, seperti PUT atau PATCH -->

                                            <div class="col-12">
                                                <input class="form-control bg-white" type="file" name="foto" id="formFile" accept=".jpg,.png">
                                            </div>

                                            <div class="col-12">
                                                <label for="exampleFormControlInput1" class="form-label">Nama PPID</label>
                                                <input type="text" class="form-control bg-white" name="nama_instansi" id="nama_gambar" placeholder="Nama Gambar" value="{{ $x->nama_instansi ?? '' }}">
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
                        @if($p_pembantus->previousPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $p_pembantus->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        @endif
            
                        <!-- Nomor Halaman -->
                        @php
                            $lastPage = min($p_pembantus->lastPage(), 3); // Tampilkan maksimal tiga halaman
                        @endphp
            
                        @for($i = 1; $i <= $lastPage; $i++)
                            <li class="page-item {{ $p_pembantus->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $p_pembantus->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
            
                        @if($p_pembantus->nextPageUrl())
                            <li class="page-item">
                                <a class="page-link" href="{{ $p_pembantus->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
            
        </div>
    </div>
@endsection
