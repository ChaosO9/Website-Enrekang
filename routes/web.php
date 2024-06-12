<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\PenginapanController;

Route::get('/', function () {
    return view('rating');
});


Route::get('details', function () {
    return view('portfolio-details');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/wisataa', function () {
    return view('wisataa');
})->name('wisataa');

// Route::get('/penginapann', function () {
//     return view('penginapann');
// })->name('penginapann');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');


Route::controller(HomeController::class)->prefix('home')->group(function () {
    Route::get('', 'home')->name('home');
    Route::post('', 'urlParamBuilder')->name('home.urlParamBuilder');
});

Route::controller(WisataController::class)->prefix('wisata')->group(function () {
    Route::get('', 'index')->name('wisata');
    Route::get('tampil', 'nav')->name('wisata.tampil');
    Route::post('tampil', 'urlParamBuilder')->name('wisata.urlParamBuilder');
    Route::get('wisata2', 'index2')->name('wisata2');
    // Route::post('post','store')->name('foto_wisata');
    Route::get('tambah', 'tambah')->name('wisata.tambah');
    Route::post('tambah', 'simpan')->name('wisata.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('wisata.edit');
    Route::post('edit/{id}', 'update')->name('wisata.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('wisata.hapus');
    Route::get('show/{id}', 'show')->name('wisata.show');
    Route::get('/gambar/form/{id}', 'gambar')->name('wisata.gambar');
    Route::get('/gambar/form/hapus/{id}', 'hapusGambar')->name('wisata.hapus.gambar');
    Route::get('/gambar/form/edit/{id}', 'editGambar')->name('wisata.edit.gambar');
    Route::post('/gambar/form/edit/{id}', 'editGambarSimpan')->name('wisata.edit.gambar.simpan');
    Route::post('/gambar/form/{id}/{from?}', 'tambahGambar')->name('wisata.tambah.gambar');
    Route::get('/galeri', 'wisataGaleri')->name('wisata.galeri');
});

Route::controller(KulinerController::class)->prefix('kuliner')->group(function () {
    Route::get('', 'index')->name('kuliner');
    Route::get('tampil', 'nav')->name('kuliner.tampil');
    Route::get('2', 'index2')->name('kuliner2');
    Route::get('form', 'tambah')->name('kuliner.form');
    Route::post('form', 'simpan')->name('kuliner.form.simpan');
    Route::get('edit/{id}', 'edit')->name('kuliner.edit');
    Route::post('edit/{id}', 'update')->name('kuliner.form.update');
    Route::get('hapus/{id}', 'hapus')->name('kuliner.hapus');
    Route::get('show/{id}', 'show')->name('kuliner.show');
});

Route::controller(PenginapanController::class)->prefix('penginapan')->group(function () {
    Route::get('', 'index')->name('penginapan');
    Route::get('', 'nav')->name('tampil');
    Route::get('filter', 'filter')->name('filter');
    Route::get('2', 'index2')->name('penginapan2');
    Route::get('form', 'tambah')->name('penginapan.tambah');
    Route::get('detail', 'detail')->name('penginapan.detail');
    Route::post('form', 'simpan')->name('penginapan.form.simpan');
    Route::get('edit/{id}', 'edit')->name('penginapan.edit');
    Route::post('edit/{id}', 'update')->name('penginapan.form.update');
    Route::get('hapus/{id}', 'hapus')->name('penginapan.hapus');
    Route::get('show/{id}', 'show')->name('penginapan.show');
});

Route::controller(EventController::class)->prefix('event')->group(function () {
    Route::get('', 'index')->name('event');
    Route::get('tampil', 'nav')->name('event');
    Route::get('2', 'index2')->name('event2');
    Route::get('form', 'tambah')->name('event.form');
    Route::post('form', 'simpan')->name('event.form.simpan');
    Route::get('edit/{id}', 'edit')->name('event.edit');
    Route::post('edit/{id}', 'update')->name('event.form.update');
    Route::get('hapus/{id}', 'hapus')->name('event.hapus');
    Route::get('show/{id}', 'show')->name('event.show');
});

Route::controller(SaranController::class)->prefix('saran')->group(function () {
    Route::get('', 'index')->name('saran');
    Route::get('2', 'index2')->name('saran2');
    Route::get('form', 'tambah')->name('saran.form');
    Route::post('simpan', 'store')->name('simpan');
    Route::get('edit/{id}', 'edit')->name('saran.edit');
    Route::post('edit/{id}', 'update')->name('saran.form.update');
    Route::get('hapus/{id}', 'hapus')->name('saran.hapus');
});

Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
    Route::get('', 'index')->name('kategori');
    Route::get('form', 'create')->name('kategori.form');
    Route::post('simpan', 'store')->name('simpan.kategori');
    Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
});

Route::controller(FasilitasController::class)->prefix('fasilitas')->group(function () {
    Route::get('', 'index')->name('fasilitas');
    Route::get('form', 'create')->name('fasilitas.form');
    Route::post('simpan', 'store')->name('simpan.fasilitas');
    Route::get('hapus/{id}', 'hapus')->name('fasilitas.hapus');
});

Route::get('/wisata', [WisataController::class, 'search'])->name('wisata.search');


Route::post('/rating', [RatingController::class, 'store']);