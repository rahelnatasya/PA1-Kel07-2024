<?php

use App\Http\Controllers\Admin\Dosen;
use App\Http\Controllers\AsramaController;
use App\Http\Controllers\RuangBacaController;
use App\Http\Controllers\GaleriRuangController;
use App\Http\Controllers\RuangSeminarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HimameraController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\MrClubController;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\SmartClassController;
use App\Http\Controllers\VisiMisiController;
use App\Models\GaleriRuang;
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

// Route::get('/main', function () {
//     return view('layout.main');
// });
Route::get('/', function () {
    return view('beranda');
});
Route::get('/visimisi', function () {
    return view('visimisi');
});
Route::get('/profillulusan', function () {
    return view('profil');
});
Route::get('/dosen', function () {
    return view('dosen');
});
// Route::get('/ruangseminar', function () {
//     return view('ruangseminar');
// });
Route::get('/smartclass', function () {
    return view('smartclass');
});
Route::get('/ruangbaca', function () {
    return view('ruangbaca');
});

Route::get('/strukturdosen', function () {
    return view('strukturdosen');
});
Route::get('/laboratorium', function () {
    return view('lab.laboratorium');
});
Route::get('/mrclub', function () {
    return view('mrclub');
});
// Route::get('/production', function () {
//     return view('lab.production');
// });
// Route::get('/productdesign', function () {
//     return view('lab.productdesign');
// });
// Route::get('/data', function () {
//     return view('lab.data');
// });
// Route::get('/fisika', function () {
//     return view('lab.fisika');
// });

Route::get('/galerywp', function () {
    return view('himamera.welcoming');
});
// Route::get('/galerygraduation', function () {
//     return view('himamera.graduation');
// });
// Route::get('/galerymrcup', function () {
//     return view('himamera.mrcup');
// });
// Route::get('/galerynonton', function () {
//     return view('himamera.nonton');
// });
// Route::get('/galerykaderisasi', function () {
//     return view('himamera.kaderisasi');
// });
Route::get('/dashboardadmin', function () {
    return view('dashboard.homepage');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});
// Route::get('/bahasa', [labBahasaController::class, 'index']);

// Route::prefix('Admin')->middleware('auth')->group(function () {
//     Route::get('/Admin', [DashboardController::class, 'index']);
// });
// Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::post('/login', [AuthController::class, 'authenticate']);
// Route::post('/logout', [AuthController::class, 'logout']);











Route::get('/kurikulum', [KurikulumController::class, 'index']);
Route::get('/profillulusan', [profilLulusanController::class, 'index']);
Route::get('/ruangbaca', [RuangBacaController::class, 'index']);
Route::get('/ruang', [GaleriRuangController::class, 'index']);
Route::get('/ruangseminar', [RuangSeminarController::class, 'index']);
Route::get('/smartclass', [SmartClassController::class, 'index']);
Route::get('/visimisi', [VisiMisiController::class, 'index']);
Route::get('/himamera', [HimameraController::class, 'index']);
Route::get('/mrclub', [MrClubController::class, 'index']);
Route::get('/asrama', [AsramaController::class, 'index']);
Route::get('/dosen', [DosenController::class, 'index']);




Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::prefix('admin')->middleware('auth')->group(function(){
Route::get('/', [DashboardController::class, 'index']);

//Kurikulum
Route::get('kurikulum', [App\Http\Controllers\Admin\KurikulumController::class,'index'])->name('admin.kurikulum.index');
Route::get('kurikulum/create', [App\Http\Controllers\Admin\KurikulumController::class,'create'])->name('admin.kurikulum.create');
Route::post('admin/kurikulum',[App\Http\Controllers\Admin\KurikulumController::class, 'store'])->name('admin.kurikulum.store');
Route::get('kurikulum/{kurikulum}/edit', [App\Http\Controllers\Admin\KurikulumController::class, 'edit'])->name('admin.kurikulum.edit');
Route::put('kurikulum/{kurikulum}', [App\Http\Controllers\Admin\KurikulumController::class, 'update'])->name('admin.kurikulum.update');
Route::delete('admin/kurikulum/{kurikulum}', [App\Http\Controllers\Admin\KurikulumController::class, 'destroy'])->name('admin.kurikulum.destroy');

//Profillulusan
Route::get('profillulusan', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'index'])->name('admin.profillulusan.index');
Route::get('profillulusan/{profillulusan}/edit', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'edit'])->name('admin.profillulusan.edit');
Route::get('profillulusan/create', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'create'])->name('admin.profillulusan.create');
Route::post('admin/profillulusan', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'store'])->name('admin.profillulusan.store');
Route::put('profillulusan/{profillulusan}', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'update'])->name('admin.profillulusan.update');
Route::delete('admin/profillulusan/{profillulusan}', [App\Http\Controllers\Admin\ProfilLulusanController::class, 'destroy'])->name('admin.profillulusan.destroy');

// Visi Misi Tujuan
Route::get('visimisi', [App\Http\Controllers\Admin\VisiMisiController::class, 'index'])->name('admin.visimisi.index');
Route::get('visimisi/{visimisi}/edit', [App\Http\Controllers\Admin\VisiMisiController::class, 'edit'])->name('admin.visimisi.edit');
Route::get('visimisi/create', [App\Http\Controllers\Admin\VisiMisiController::class, 'create'])->name('admin.visimisi.create');
Route::post('admin/visimisi', [App\Http\Controllers\Admin\VisiMisiController::class, 'store'])->name('admin.visimisi.store');
Route::put('visimisi/{visimisi}', [App\Http\Controllers\Admin\VisiMisiController::class, 'update'])->name('admin.visimisi.update');
Route::delete('admin/visimisi/{visimisi}', [App\Http\Controllers\Admin\VisiMisiController::class, 'destroy'])->name('admin.visimisi.destroy');

//Ruang
Route::get('ruang', [App\Http\Controllers\Admin\GaleriRuangController::class,'index'])->name('admin.ruang.index');
Route::get('galeriruang/create', [App\Http\Controllers\Admin\GaleriRuangController::class,'create'])->name('admin.ruang.create');
Route::post('admin/galeriruang',[App\Http\Controllers\Admin\GaleriRuangController::class, 'store'])->name('admin.ruang.store');
Route::get('admin/ruang/{id}/edit', [App\Http\Controllers\Admin\GaleriRuangController::class, 'edit'])->name('admin.ruang.edit');
Route::put('admin/ruang/{id}', [App\Http\Controllers\Admin\GaleriRuangController::class, 'update'])->name('admin.ruang.update');
Route::delete('admin/ruang/{id}', [App\Http\Controllers\Admin\GaleriRuangController::class, 'destroy'])->name('admin.ruang.destroy');

//Himamera
Route::get('himamera', [App\Http\Controllers\Admin\HimameraController::class,'index'])->name('admin.himamera.index');
Route::get('himamera/create', [App\Http\Controllers\Admin\HimameraController::class,'create'])->name('admin.himamera.create');
Route::post('admin/himamera',[App\Http\Controllers\Admin\HimameraController::class, 'store'])->name('admin.himamera.store');
Route::get('admin/himamera/{id}/edit', [App\Http\Controllers\Admin\HimameraController::class, 'edit'])->name('admin.himamera.edit');
Route::put('admin/himamera/{id}', [App\Http\Controllers\Admin\HimameraController::class, 'update'])->name('admin.himamera.update');
Route::delete('admin/himamera/{id}', [App\Http\Controllers\Admin\HimameraController::class, 'destroy'])->name('admin.himamera.destroy');

//Asrama
Route::get('asrama', [App\Http\Controllers\Admin\AsramaController::class,'index'])->name('admin.asrama.index');
Route::get('asrama/create', [App\Http\Controllers\Admin\AsramaController::class,'create'])->name('admin.asrama.create');
Route::post('admin/asrama',[App\Http\Controllers\Admin\AsramaController::class, 'store'])->name('admin.asrama.store');
Route::get('admin/asrama/{id}/edit', [App\Http\Controllers\Admin\AsramaController::class, 'edit'])->name('admin.asrama.edit');
Route::put('admin/asrama/{id}', [App\Http\Controllers\Admin\AsramaController::class, 'update'])->name('admin.asrama.update');
Route::delete('admin/asrama/{id}', [App\Http\Controllers\Admin\AsramaController::class, 'destroy'])->name('admin.asrama.destroy');


//MR Club
Route::get('mrclub', [App\Http\Controllers\Admin\MrClubController::class,'index'])->name('admin.mrclub.index');
Route::get('mrclub/create', [App\Http\Controllers\Admin\MrClubController::class,'create'])->name('admin.mrclub.create');
Route::post('admin/mrclub',[App\Http\Controllers\Admin\MrClubController::class, 'store'])->name('admin.mrclub.store');
Route::get('admin/mrclub/{id}/edit', [App\Http\Controllers\Admin\MrClubController::class, 'edit'])->name('admin.mrclub.edit');
Route::put('admin/mrclub/{id}', [App\Http\Controllers\Admin\MrClubController::class, 'update'])->name('admin.mrclub.update');
Route::delete('admin/mrclub/{id}', [App\Http\Controllers\Admin\MrClubController::class, 'destroy'])->name('admin.mrclub.destroy');

//Dosen
Route::get('dosen', [App\Http\Controllers\Admin\DosenController::class,'index'])->name('admin.dosen.index');
Route::get('dosen/create', [App\Http\Controllers\Admin\DosenController::class,'create'])->name('admin.dosen.create');
Route::post('admin/dosen',[App\Http\Controllers\Admin\DosenController::class, 'store'])->name('admin.dosen.store');
Route::get('admin/dosen/{id}/edit', [App\Http\Controllers\Admin\DosenController::class, 'edit'])->name('admin.dosen.edit');
Route::put('admin/dosen/{id}', [App\Http\Controllers\Admin\DosenController::class, 'update'])->name('admin.dosen.update');
Route::delete('admin/dosen/{id}', [App\Http\Controllers\Admin\DosenController::class, 'destroy'])->name('admin.dosen.destroy');

});