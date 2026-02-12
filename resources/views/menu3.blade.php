@extends('layouts.app')

@section('title', 'Riwayat Pendidikan')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-9">

        <div class="card shadow border-0 p-5">

            <!-- HEADER -->
            <div class="mb-4">
                <small class="text-success fw-bold">EDUCATION</small>
                <h2 class="fw-bold mt-2">Riwayat Pendidikan</h2>
                <p class="text-muted mt-2">
                    Perjalanan pendidikan formal yang telah ditempuh.
                </p>
            </div>

            <!-- TIMELINE -->
            <div class="border-start border-3 border-success ps-4">

                <div class="mb-4">
                    <h6 class="fw-bold mb-1">SD Negeri</h6>
                    <small class="text-muted">Pendidikan Dasar</small>
                </div>

                <div class="mb-4">
                    <h6 class="fw-bold mb-1">SMP</h6>
                    <small class="text-muted">Pendidikan Menengah Pertama</small>
                </div>

                <div class="mb-4">
                    <h6 class="fw-bold mb-1">SMA</h6>
                    <small class="text-muted">Pendidikan Menengah Atas</small>
                </div>

                <div class="mb-4">
                    <h6 class="fw-bold mb-1">Perguruan Tinggi</h6>
                    <small class="text-muted">Universitas ...</small>
                </div>

            </div>

            <div class="text-end mt-4">
                <a href="/" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>

        </div>

    </div>
</div>
@endsection
