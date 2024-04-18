@section('modallogin')
    <div class="modal fade text-white" id="modal_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-bs-theme="dark">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masuk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <form action="{{ route('login.proses') }}" method="POST">
                        @csrf <!-- Token untuk proteksi CSRF -->
                        <div class="mb-3">
                            <label for="nik" class="form-label">Username</label>
                            <input type="text" class="form-control" id="nik" name="nik" aria-describedby="nik"
                                placeholder="NIK (012345678910)" data-bs-theme="dark">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" data-bs-theme="dark"
                                placeholder="************">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection
