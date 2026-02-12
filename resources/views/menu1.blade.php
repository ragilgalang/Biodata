@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">

        <!-- HERO RESUME STYLE -->
        <div class="card shadow border-0 p-5">
            <div class="row align-items-center">

                <!-- TEKS -->
                <div class="col-md-7">
                    @php
                        $nama = $profile['nama'] ?? 'Galang Ragil';
                        $headline = $profile['headline'] ?? 'Mahasiswa | Laravel Developer';
                    @endphp

                    <small class="text-primary fw-bold">HELLO, I'M</small>
                    <h1 class="fw-bold mt-2">{{ $nama }}</h1>
                    <h5 class="text-muted mt-2">{{ $headline }}</h5>

                    <p class="mt-4 text-muted">
                        Seorang mahasiswa yang sedang mempelajari pengembangan web
                        menggunakan Laravel dan Bootstrap, dengan minat pada pembuatan
                        aplikasi web yang rapi dan fungsional.
                    </p>

                    <div class="mt-4">
                        <a href="/biodata" class="btn btn-primary me-2">
                            <i class="bi bi-person"></i> Biodata
                        </a>
                        <a href="/prestasi" class="btn btn-outline-warning">
                            <i class="bi bi-trophy"></i> Prestasi
                        </a>
                    </div>
                </div>

                <!-- FOTO PROFIL -->
                <div class="col-md-5 text-center">
                    @php
                        $foto = $profile['foto'] ?? null;
                    @endphp

                    @if($foto)
                        <img src="{{ asset('storage/' . $foto) }}"
                             class="img-fluid rounded-circle shadow"
                             width="220"
                             alt="Profile">
                    @else
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                             class="img-fluid rounded-circle shadow"
                             width="220"
                             alt="Profile">
                    @endif
                </div>

            </div>

            <!-- MENU CARD -->
            <div class="row mt-5 g-4 text-center">
                <div class="col-md-4">
                    <a href="/biodata" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <i class="bi bi-person-lines-fill text-primary fs-1"></i>
                            <h5 class="mt-3">Biodata</h5>
                            <p class="text-muted">Data diri lengkap</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/pendidikan" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <i class="bi bi-mortarboard-fill text-success fs-1"></i>
                            <h5 class="mt-3">Pendidikan</h5>
                            <p class="text-muted">Riwayat pendidikan</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="/prestasi" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <i class="bi bi-trophy-fill text-warning fs-1"></i>
                            <h5 class="mt-3">Prestasi</h5>
                            <p class="text-muted">Penghargaan & pencapaian</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
