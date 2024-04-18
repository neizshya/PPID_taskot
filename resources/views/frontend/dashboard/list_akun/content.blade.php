@section('content')
     

    {{-- modal tambah --}}
    <div class="modal fade" id="add_pic" tabindex="-1" aria-labelledby="add_pic" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body ">
                <form class="row g-3" action="{{ route('akun.tambah') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="col-12">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control bg-white" id="nama" name="name" placeholder="Nama"
                                required>
                        </div>
                        <div class="col-12">
                            <label for="nik" class="form-label">Username/NIK</label>
                            <input type="text" class="form-control bg-white" id="nik" required name="nik"
                                placeholder="64516351316">
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
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" aria-label="Default select example" name="role" required>
                                <option selected hidden>Pilih</option>
                                <option value="PU">PPID Utama</option>
                                <option value="PP">PPID Pembantu</option>
                                <option value="user">User</option> 
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="nim" class="form-label">Password</label>
                            <input type="password" class="form-control bg-white" id="nim" required name="password"
                                placeholder="64516351316">
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
            <div class="text-end">
                <button class="btn btn-success w-25 " data-bs-toggle="modal" data-bs-target="#add_pic">Tambah
                </button>
            </div>
            <table class="table rounded-3 overflow-hidden table-borderless">
                <thead>
                    <tr class="">
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Username/NIK</th>
                        <th class="text-center" scope="col">Instansi</th>
                        <th class="text-center" scope="col">Role</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $index => $user)
                    <tr class="">
                        <th class="text-center" scope="row">{{ $index + 1 }}</th>
                        <td class="text-center">{{ $user->name }}</td>
                        <td class="text-center">{{ $user->nik }}</td>
                        <td class="text-center">{{ $user->instansi }}</td>
                        <td class="text-center">
                            @if($user->role === 'PU')
                                PPID Utama
                            @elseif($user->role === 'PP')
                                PPID Pembantu
                            @elseif($user->role === 'user')
                               User
                            @endif
                        </td>                        
                        <td class="text-center">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_pic_{{ $user->id }}">Edit</button>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#reset_password_{{ $user->id }}">Reset</button>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_akun_{{ $user->id }}">Hapus</button>
                        </td>
                    </tr>

                {{-- modal edit --}}
                <div class="modal fade" id="edit_pic_{{ $user->id }}" tabindex="-1" aria-labelledby="edit_pic" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Akun</h1>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" action="{{ route('akun.update',  $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-12">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control bg-white" id="nama" placeholder="Nama" name="name" value="{{ $user->name }}" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="nik" class="form-label">Username/NIK</label>
                                        <input type="text" class="form-control bg-white" id="nik" name="nik" value="{{ $user->nik }}" required placeholder="64516351316">
                                    </div>
                                    <div class="col-12">
                                        <label for="nama_instansi" class="form-label">Nama Instansi</label>
                                        <select class="form-select" aria-label="Default select example" name="instansi" required>
                                            <option selected value="-">Pilih Nama Instansi</option>
                                            <option value="Diskominfo Kota Tasikmalaya" {{ $user->instansi === 'Diskominfo Kota Tasikmalaya' ? 'selected' : '' }}>Diskominfo Kota Tasikmalaya</option>
                                            @foreach($pembantuList as $pembantu)
                                                <option value="{{ $pembantu->nama_instansi }}" {{ $user->instansi === $pembantu->nama_instansi ? 'selected' : '' }}>{{ $pembantu->nama_instansi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example" name="role" required>
                                            <option value="PU" {{ $user->role === 'PU' ? 'selected' : '' }}>PPID Utama</option>
                                            <option value="PP" {{ $user->role === 'PP' ? 'selected' : '' }}>PPID Pembantu</option>
                                            <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- modal delete --}}
                <div class="modal fade" id="delete_akun_{{ $user->id }}" tabindex="-1" aria-labelledby="delete_pic" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Akun</h1>
                            </div>
                            <div class="modal-body ">

                                <p>Yakin hapus akun ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TIDAK</button>
                                <form action="{{ route('akun.delete', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">YA</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               {{-- modal Reset --}}
                <div class="modal fade" id="reset_password_{{ $user->id }}" tabindex="-1" aria-labelledby="delete_pic" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content bg-white">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Kata Sandi</h1>
                            </div>
                            <div class="modal-body">
                                <p>Yakin reset kata sandi?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('user.reset.password', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger">YA</button>
                                </form>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TIDAK</button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                
                </tbody>
            </table>
            
            
            
        </div>
    </div>
  
@endsection 
