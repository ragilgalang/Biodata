@extends('layouts.app')

@section('title', 'Biodata')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">

        <div class="card shadow border-0 p-5">

            <!-- HEADER -->
            <div class="mb-4">
                <small class="text-primary fw-bold">ABOUT ME</small>
                <h2 class="fw-bold mt-2">Biodata</h2>
                <p class="text-muted mt-2">
                    Informasi pribadi singkat sebagai pengenalan diri.
                </p>
            </div>

            <div class="row align-items-center">

                <!-- FOTO + UPLOAD -->
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    @php
                        $foto = $profile['foto'] ?? null;
                    @endphp

                    @if($foto)
                        <img src="{{ asset('storage/' . $foto) }}"
                             class="img-fluid rounded-circle shadow mb-3"
                             width="180"
                             alt="Profile">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                             class="img-fluid rounded-circle shadow mb-3"
                             width="180"
                             alt="Profile">
                    @endif

                    <!-- FORM UPLOAD FOTO PROFIL -->
                    <form action="/upload-profile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="foto" class="form-control mb-2" required>
                        <button class="btn btn-primary btn-sm w-100">
                            <i class="bi bi-upload"></i> Upload Foto
                        </button>
                    </form>

                </div>

                <!-- DATA -->
                <div class="col-md-8">
                    <table class="table table-borderless">
                        <tr>
                            <th width="35%">Nama</th>
                            <td>: {{ $profile['nama'] ?? 'Galang Ragil' }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>: Sidoarjo</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>: 08-12-2004</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>: Tebel Timur Gedangan Sidoarjo</td>
                        </tr>
                    </table>
                </div>

            </div>

            <!-- FOOTER -->
            <div class="text-end mt-4">
                <a href="/" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>

        </div>

    </div>
</div>
@endsection
