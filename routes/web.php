<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryRoomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HimameraController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\MrClubController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\StrukturDosenController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;


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


// Route::prefix('Admin')->middleware('auth')->group(function () {
//     Route::get('/Admin', [DashboardController::class, 'index']);
// });
// Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::post('/login', [AuthController::class, 'authenticate']);
// Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/kurikulum', [KurikulumController::class, 'index']);
Route::get('/profillulusan', [profilLulusanController::class, 'index']);
Route::get('/visimisi', [VisiMisiController::class, 'index']);
Route::get('/himamera', [HimameraController::class, 'index']);
Route::get('/mrclub', [MrClubController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/', [BeritaController::class, 'index'])->name('home');
Route::get('/detail/{id}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/prestasi', [PrestasiController::class, 'index']);
Route::get('/fasilitas', [BeritaController::class, 'fasilitas']);

Route::get('/strukturdosen', [StrukturDosenController::class, 'index']);


Route::get('/some', function () {
    return view ('some');
});





Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function(){
Route::get('/', [DashboardController::class, 'index']);

//Berita
Route::get('berita', [App\Http\Controllers\Admin\BeritaController::class,'index'])->name('admin.berita.index');
Route::get('berita/create', [App\Http\Controllers\Admin\BeritaController::class,'create'])->name('admin.berita.create');
Route::post('admin/berita',[App\Http\Controllers\Admin\BeritaController::class, 'store'])->name('admin.berita.store');
Route::get('admin/berita/{id}/edit', [App\Http\Controllers\Admin\BeritaController::class, 'edit'])->name('admin.berita.edit');
Route::put('admin/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'update'])->name('admin.berita.update');
Route::delete('admin/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'destroy'])->name('admin.berita.destroy');

//Testimoni
Route::get('testimoni', [App\Http\Controllers\Admin\TestimoniController::class,'index'])->name('admin.testimoni.index');
Route::get('testimoni/create', [App\Http\Controllers\Admin\TestimoniController::class, 'create'])->name('admin.testimoni.create');
Route::post('admin/testimoni',[App\Http\Controllers\Admin\TestimoniController::class, 'store'])->name('admin.testimoni.store');
Route::get('admin/testimoni/{id}/edit', [App\Http\Controllers\Admin\TestimoniController::class, 'edit'])->name('admin.testimoni.edit');
Route::put('admin/testimoni/{id}', [App\Http\Controllers\Admin\TestimoniController::class, 'update'])->name('admin.testimoni.update');
Route::delete('admin/testimoni/{id}', [App\Http\Controllers\Admin\TestimoniController::class, 'destroy'])->name('admin.testimoni.destroy');

//Kurikulum
Route::get('kurikulum', [App\Http\Controllers\Admin\KurikulumController::class,'index'])->name('admin.kurikulum.index');
Route::get('kurikulum/create', [App\Http\Controllers\Admin\KurikulumController::class,'create'])->name('admin.kurikulum.create');
Route::post('admin/kurikulum',[App\Http\Controllers\Admin\KurikulumController::class, 'store'])->name('admin.kurikulum.store');
Route::get('kurikulum/{kurikulum}/edit', [App\Http\Controllers\Admin\KurikulumController::class, 'edit'])->name('admin.kurikulum.edit');
Route::put('kurikulum/{kurikulum}', [App\Http\Controllers\Admin\KurikulumController::class, 'update'])->name('admin.kurikulum.update');
Route::delete('admin/kurikulum/{kurikulum}', [App\Http\Controllers\Admin\KurikulumController::class, 'destroy'])->name('admin.kurikulum.destroy');

//Profillulusan
Route::get('profillulusan', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'index'])->name('admin.profillulusan.index');
Route::get('profillulusan/create', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'create'])->name('admin.profillulusan.create'); // Definisikan rute create sebelum rute edit
Route::get('profillulusan/{profillulusan}/edit', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'edit'])->name('admin.profillulusan.edit');
Route::post('admin/profillulusan', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'store'])->name('admin.profillulusan.store');
Route::put('profillulusan/{profillulusan}', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'update'])->name('admin.profillulusan.update');
Route::delete('admin/profillulusan/{profillulusan}', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'destroy'])->name('admin.profillulusan.destroy');

// Visi Misi Tujuan
Route::get('meta', [App\Http\Controllers\Admin\MetaController::class, 'index'])->name('admin.meta.index');
Route::get('meta/{meta}/edit', [App\Http\Controllers\Admin\MetaController::class, 'edit'])->name('admin.meta.edit');
Route::get('meta/create', [App\Http\Controllers\Admin\MetaController::class, 'create'])->name('admin.meta.create');
Route::post('admin/meta', [App\Http\Controllers\Admin\MetaController::class, 'store'])->name('admin.meta.store');
Route::put('meta/{meta}', [App\Http\Controllers\Admin\MetaController::class, 'update'])->name('admin.meta.update');
Route::delete('admin/meta/{meta}', [App\Http\Controllers\Admin\MetaController::class, 'destroy'])->name('admin.meta.destroy');

//Ruang
Route::get('ruang', [App\Http\Controllers\Admin\GaleriRuangController::class,'index'])->name('admin.ruang.index');
Route::get('galeriruang/create', [App\Http\Controllers\Admin\GaleriRuangController::class,'create'])->name('admin.ruang.create');
Route::post('/galeriruang',[App\Http\Controllers\Admin\GaleriRuangController::class, 'store'])->name('admin.ruang.store');
Route::get('admin/ruang/{id}/edit', [App\Http\Controllers\Admin\GaleriRuangController::class, 'edit'])->name('admin.ruang.edit');
Route::put('admin/ruang/{id}', [App\Http\Controllers\Admin\GaleriRuangController::class, 'update'])->name('admin.ruang.update');
Route::delete('admin/ruang/{id}', [App\Http\Controllers\Admin\GaleriRuangController::class, 'destroy'])->name('admin.ruang.destroy');

//Category Room
Route::get('category', [App\Http\Controllers\Admin\CategoryRoomController::class,'index'])->name('admin.category.index');
Route::get('category/create', [App\Http\Controllers\Admin\CategoryRoomController::class,'create'])->name('admin.category.create');
Route::post('category',[App\Http\Controllers\Admin\CategoryRoomController::class, 'store'])->name('admin.category.store');
Route::get('category/{id}/edit', [App\Http\Controllers\Admin\CategoryRoomController::class, 'edit'])->name('admin.category.edit');
Route::get('category/{id}', [App\Http\Controllers\Admin\CategoryRoomController::class,'show'])->name('admin.category.view');
Route::put('category/{id}', [App\Http\Controllers\Admin\CategoryRoomController::class, 'update'])->name('admin.category.update');
Route::delete('category/{id}', [App\Http\Controllers\Admin\CategoryRoomController::class, 'destroy'])->name('admin.category.destroy');

//Stuktur Dosen
Route::get('strukturdosen', [App\Http\Controllers\Admin\StrukturDosenController::class,'index'])->name('admin.strukturdosen.index');
Route::get('strukturdosen/create', [App\Http\Controllers\Admin\StrukturDosenController::class,'create'])->name('admin.strukturdosen.create');
Route::post('admin/strukturdosen',[App\Http\Controllers\Admin\StrukturDosenController::class, 'store'])->name('admin.strukturdosen.store');
Route::get('admin/strukturdosen/{id}/edit', [App\Http\Controllers\Admin\StrukturDosenController::class, 'edit'])->name('admin.strukturdosen.edit');
Route::put('admin/strukturdosen/{id}', [App\Http\Controllers\Admin\StrukturDosenController::class, 'update'])->name('admin.strukturdosen.update');
Route::delete('admin/strukturdosen/{id}', [App\Http\Controllers\Admin\StrukturDosenController::class, 'destroy'])->name('admin.strukturdosen.destroy');

//Himamera
Route::get('himamera', [App\Http\Controllers\Admin\HimameraController::class,'index'])->name('admin.himamera.index');
Route::get('himamera/create', [App\Http\Controllers\Admin\HimameraController::class,'create'])->name('admin.himamera.create');
Route::post('admin/himamera',[App\Http\Controllers\Admin\HimameraController::class, 'store'])->name('admin.himamera.store');
Route::get('admin/himamera/{id}/edit', [App\Http\Controllers\Admin\HimameraController::class, 'edit'])->name('admin.himamera.edit');
Route::put('admin/himamera/{id}', [App\Http\Controllers\Admin\HimameraController::class, 'update'])->name('admin.himamera.update');
Route::delete('admin/himamera/{id}', [App\Http\Controllers\Admin\HimameraController::class, 'destroy'])->name('admin.himamera.destroy');

//MR Club
Route::get('mrclub', [App\Http\Controllers\Admin\MrClubController::class,'index'])->name('admin.mrclub.index');
Route::get('mrclub/create', [App\Http\Controllers\Admin\MrClubController::class,'create'])->name('admin.mrclub.create');
Route::post('admin/mrclub',[App\Http\Controllers\Admin\MrClubController::class, 'store'])->name('admin.mrclub.store');
Route::get('admin/mrclub/{id}/edit', [App\Http\Controllers\Admin\MrClubController::class, 'edit'])->name('admin.mrclub.edit');
Route::put('admin/mrclub/{id}', [App\Http\Controllers\Admin\MrClubController::class, 'update'])->name('admin.mrclub.update');
Route::delete('admin/mrclub/{id}', [App\Http\Controllers\Admin\MrClubController::class, 'destroy'])->name('admin.mrclub.destroy');

//Dosen
Route::get('dosen', [App\Http\Controllers\Admin\DosenController::class, 'index'])->name('admin.dosen.index');
Route::get('dosen/create', [App\Http\Controllers\Admin\DosenController::class, 'create'])->name('admin.dosen.create');
Route::post('admin/dosen', [App\Http\Controllers\Admin\DosenController::class, 'store'])->name('admin.dosen.store');
Route::get('admin/dosen/{id}/edit', [App\Http\Controllers\Admin\DosenController::class, 'edit'])->name('admin.dosen.edit');
Route::put('admin/dosen/{id}', [App\Http\Controllers\Admin\DosenController::class, 'update'])->name('admin.dosen.update');
Route::delete('admin/dosen/{id}', [App\Http\Controllers\Admin\DosenController::class, 'destroy'])->name('admin.dosen.destroy');

//Prestasi
Route::get('prestasi', [App\Http\Controllers\Admin\PrestasiController::class,'index'])->name('admin.prestasi.index');
Route::get('/prestasi/create', [App\Http\Controllers\Admin\PrestasiController::class, 'create'])->name('admin.prestasi.create');
Route::post('admin/prestasi',[App\Http\Controllers\Admin\PrestasiController::class, 'store'])->name('admin.prestasi.store');
Route::get('admin/prestasi/{id}/edit', [App\Http\Controllers\Admin\PrestasiController::class, 'edit'])->name('admin.prestasi.edit');
Route::put('admin/prestasi/{id}', [App\Http\Controllers\Admin\PrestasiController::class, 'update'])->name('admin.prestasi.update');
Route::delete('admin/prestasi/{id}', [App\Http\Controllers\Admin\PrestasiController::class, 'destroy'])->name('admin.prestasi.destroy');

});
