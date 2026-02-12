@extends('layouts.app')

@section('title', 'Prestasi')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">

        <div class="card shadow border-0">
            <div class="card-body p-5">

                <!-- HEADER -->
                <div class="mb-5">
                    <small class="text-warning fw-bold">ACHIEVEMENTS</small>
                    <h2 class="fw-bold mt-2">Prestasi</h2>
                    <p class="text-muted mt-2">
                        Beberapa pencapaian akademik dan non-akademik yang telah diraih.
                    </p>
                </div>

                <div class="row align-items-start">

                    <!-- LIST PRESTASI -->
                    <div class="col-md-6">

                        <div class="mb-4">
                            <h6 class="fw-bold mb-1">Juara 1 Lomba</h6>
                            <small class="text-muted">
                                Kompetisi tingkat sekolah / kampus
                            </small>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold mb-1">Sertifikat Pelatihan</h6>
                            <small class="text-muted">
                                Workshop & pelatihan pendukung
                            </small>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold mb-1">Penghargaan</h6>
                            <small class="text-muted">
                                Prestasi akademik maupun non-akademik
                            </small>
                        </div>

                        <hr class="my-4">

                        <!-- UPLOAD -->
                        <div class="mt-3">
                            <h6 class="fw-bold mb-2">Upload Bukti Prestasi</h6>

                            <form action="/upload-prestasi" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="gambar" class="form-control mb-3" required>

                                <button class="btn btn-success btn-sm">
                                    <i class="bi bi-upload"></i> Upload
                                </button>
                            </form>
                        </div>

                    </div>

                    <!-- GAMBAR -->
                    <div class="col-md-6 text-center">
                        <h6 class="fw-bold mb-3">Bukti Prestasi</h6>

                        @if(session('gambar'))
                            <img src="{{ asset('storage/' . session('gambar')) }}"
                                 class="img-fluid rounded shadow"
                                 style="max-height:320px">
                        @else
                            <div class="border rounded p-5 text-muted">
                                <i class="bi bi-image fs-1"></i>
                                <p class="mt-2 mb-0">Belum ada gambar</p>
                            </div>
                        @endif
                    </div>

                </div>

                <!-- FOOTER -->
                <div class="text-end mt-5">
                    <a href="/" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
