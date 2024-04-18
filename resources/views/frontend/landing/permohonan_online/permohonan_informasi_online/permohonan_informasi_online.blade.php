<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permohonan Informasi Online | PPID Kota Tasikmalaya</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('image/logo_tasik.svg') }}">
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=RcP4SgRW"></script>
</head>

<body>

    @include('components.footer')
    @include('components.header')
    @include('frontend.landing.Permohonan_online.permohonan_informasi_online.content')
    @include('components.modal.modal_login')
    @yield('modallogin')
    @yield('header')
    <div class="modal fade " id="after_form" tabindex="-1" aria-labelledby="after_form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Permohonan Berhasil Dikirim</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fs-5">Hasil permohonan dapat dilihat di dashboard dengan NIK dan password menggunakan
                        NIK yang telah dimasukan di form permohonan yang telah diisi sebelumnya</p>

                </div>

            </div>
        </div>
    </div>
    {{--
        data-bs-toggle="modal"
                            data-bs-target="#online_berkala"
        --}}
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
                                <input autocomplete="off" class="input" type="text" name="nama_pemohon" id="nama_pemohon" required
                                    placeholder="nama pemohon" />
                                <label class="label" for="nama_pemohon">
                                    Nama Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" name="ktp_sim" id="ktp_sim" required
                                    placeholder="No KTP/SIM" />
                                <label class="label" for="ktp_sim">
                                    No KTP/SIM <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nim" name="nim"
                                    placeholder="NIM (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="nim">
                                    NIM (Jika Pemohon adalah Mahasiswa)
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="univ" name="univ"
                                    placeholder="Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="univ">
                                    Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="alamat" name="alamat"
                                    placeholder="Alamat Pemohon" />
                                <label class="label" for="alamat">
                                    Alamat Pemohon <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="pekerjaan" required name="pekerjaan"
                                    placeholder="Pekerjaan" />
                                <label class="label" for="pekerjaan">
                                    Pekerjaan <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="tel" id="no_hp" required name="no_hp"
                                    placeholder="No Telepon/HP" />
                                <label class="label" for="no_hp">
                                    No Telepon/HP <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="email" id="email" required name="email"
                                    placeholder="E-mail" />
                                <label class="label" for="no_hp">
                                    E-mail <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>


                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="info" id="informasi_dibutuhkan" name="info"
                                    placeholder="Informasi Yang Dibutuhkan"></textarea>
                                <label class="label" for="informasi_dibutuhkan">
                                    Informasi Yang Dibutuhkan
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="input-wrapper">
                                <textarea required autocomplete="off" class="textarea" name="alasan" name="alasan" id="alasan_informasi"
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
                                    <input class="form-check-input" type="radio" name="memperoleh_info"
                                        id="langsung_cara_memperoleh" value="langsung" required>
                                    <label class="form-check-label" for="langsung_cara_memperoleh">Langsung</label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="memperoleh_info"
                                        id="email_cara_memperoleh" value="email">
                                    <label class="form-check-label" for="email_cara_memperoleh">Email</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="memperoleh_info"
                                        id="whatsapp_cara_memperoleh" value="whatsapp">
                                    <label class="form-check-label" for="whatsapp_cara_memperoleh">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 text-white">
                            <p class="text-capitalize"> cara mengirimkan informasi</p>
                            <div class="ps-4">
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="mengirim_info"
                                        id="langsung_cara_mengirimkan" value="langsung" required>
                                    <label class="form-check-label" for="langsung_cara_mengirimkan">Langsung</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="mengirim_info"
                                        id="email_cara_mengirimkan" value="email">
                                    <label class="form-check-label" for="email_cara_mengirimkan">Email</label>
                                </div>
                                <div class="form-check  ">
                                    <input class="form-check-input" type="radio" name="mengirim_info"
                                        id="whatsapp_cara_mengirimkan" value="whatsapp">
                                    <label class="form-check-label" for="whatsapp_cara_mengirimkan">Whatsapp</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-12  my-3">
                            <label for="identitas" class="form-label text-white">Identitas(KTP/SIM) Ukuran maksimal 300kb
                                <span class="text-danger">*</span></label>
                            <input data-bs-theme="dark" class="form-control" type="file" name="file_ktp" id="identitas"
                                accept=".jpg,.png,.pdf">
                        </div>
        `;
            const formMasyarakat = `
              <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="nama_pemohon" required
                                    placeholder="nama pemohon" />
                                <label class="label" for="nama_pemohon">
                                    Nama Kelompok Orang<span class="text-danger">*</span>
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
                                    NIM (Jika Pemohon adalah Mahasiswa)
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="univ"
                                    placeholder="Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="univ">
                                    Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)
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
                                    NIM (Jika Pemohon adalah Mahasiswa)
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <input autocomplete="off" class="input" type="text" id="univ"
                                    placeholder="Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)" />
                                <label class="label" for="univ">
                                    Perguruan Tinggi (Jika Pemohon adalah Mahasiswa)
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
