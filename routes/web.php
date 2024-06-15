<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('role:admin')->group(function() {
    Route::get('/admin-dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/kategori', [App\Http\Controllers\Admin\AdminController::class, 'kategori'])->name('admin.kategori');
    Route::get('/deletekategori/{id}', [App\Http\Controllers\Admin\AdminController::class, 'deleteKategori'])->name('admin.kategori.delete');
    Route::get('/editkategori/{id}', [App\Http\Controllers\Admin\AdminController::class, 'editKategori'])->name('admin.kategori.edit');
    Route::post('/savekategori', [App\Http\Controllers\Admin\AdminController::class, 'saveKategori'])->name('admin.save.kategori');
    Route::post('/updatekategori', [App\Http\Controllers\Admin\AdminController::class, 'updateKategori'])->name('admin.update.kategori');

    Route::get('/admin-berita', [App\Http\Controllers\Admin\AdminController::class, 'berita'])->name('admin.berita');
    Route::get('/deleteberita/{id}', [App\Http\Controllers\Admin\AdminController::class, 'deleteBerita'])->name('admin.berita.delete');
    Route::get('/editberita/{id}', [App\Http\Controllers\Admin\AdminController::class, 'editBerita'])->name('admin.berita.edit');
    Route::get('/viewberita/{id}', [App\Http\Controllers\Admin\AdminController::class, 'viewBerita'])->name('admin.berita.view');
    Route::post('/saveberita', [App\Http\Controllers\Admin\AdminController::class, 'saveBerita'])->name('admin.save.berita');
    Route::post('/updateberita', [App\Http\Controllers\Admin\AdminController::class, 'updateBerita'])->name('admin.update.berita');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('dasbor', function () {
    return view('dasbor');
});

Route::get('kontak_kami', function () {
    return view('kontak_kami');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('pelayanan', function () {
    return view('pelayanan');
});

Route::get('berita', function () {
    $berita = Berita::all();

    return view('berita', compact(['berita']));
});

Route::get('layanankk', function () {
    return view('layanankk');
});

Route::get('layananktp', function () {
    return view('layananktp');
});

Route::get('kematian', function () {
    return view('kematian');
});

Route::get('pindah', function () {
    return view('pindah');
});

Route::get('lahir', function () {
    return view('lahir');
});

Route::get('link1', function () {
    return view('link1');
});

Route::get('link2', function () {
    return view('link2');
});

Route::get('link3', function () {
    return view('link3');
});

Route::get('link4', function () {
    return view('link4');
});

Route::get('datapegawai', function () {
    return view('datapegawai');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/berita-detail/{id}', [App\Http\Controllers\HomeController::class, 'beritaDetail'])->name('berita-detail');
