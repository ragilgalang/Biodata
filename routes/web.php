<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/
Route::get('/', function () {

    $profile = [
        'nama'     => 'Galang Ragil',
        'headline' => 'Mahasiswa | Laravel Developer',
        'foto'     => session('profile_foto'),
    ];

    return view('menu1', compact('profile'));
});

/*
|--------------------------------------------------------------------------
| BIODATA
|--------------------------------------------------------------------------
*/
Route::get('/biodata', function () {

    $profile = [
        'nama'     => 'Galang Ragil',
        'headline' => 'Mahasiswa | Laravel Developer',
        'foto'     => session('profile_foto'),
    ];

    return view('menu2', compact('profile'));
});

/*
|--------------------------------------------------------------------------
| PENDIDIKAN
|--------------------------------------------------------------------------
*/
Route::get('/pendidikan', function () {
    return view('menu3');
});

/*
|--------------------------------------------------------------------------
| PRESTASI
|--------------------------------------------------------------------------
*/
Route::get('/prestasi', function () {
    return view('menu4');
});

/*
|--------------------------------------------------------------------------
| UPLOAD FOTO PROFIL (LOCAL + SESSION)
|--------------------------------------------------------------------------
*/
Route::post('/upload-profile', function (Request $request) {

    $request->validate([
        'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // simpan file ke storage
    $path = $request->file('foto')->store('profile', 'public');

    // simpan path ke session agar bisa dipakai di view
    session(['profile_foto' => $path]);

    return redirect('/biodata');
});

/*
|--------------------------------------------------------------------------
| UPLOAD PRESTASI (LOCAL)
|--------------------------------------------------------------------------
*/
Route::post('/upload-prestasi', function (Request $request) {

    $request->validate([
        'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $path = $request->file('gambar')->store('prestasi', 'public');

    return redirect('/prestasi')->with('gambar', $path);
});
