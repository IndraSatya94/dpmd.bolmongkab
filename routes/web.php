<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HalamanController;
//crud

//dishub
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\TipController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StatikController;
use App\Http\Controllers\KategoriController;
//akhir dishub

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SlideController;
//akhir crud

//Halaman statis

//dishub
route::get('/',[halamanController::class,'index']);
route::get('/v-visimisi',[halamanController::class,'visimisi']);
route::get('/v-agenda',[halamanController::class,'agenda']);
route::get('/v-struktur',[halamanController::class,'struktur']);
route::get('/v-berita',[halamanController::class,'berita']);
route::get('/v-tugasfungsi',[halamanController::class,'tugasfungsi']);
route::get('/v-galeri',[halamanController::class,'galeri']);
route::get('/v-kontak',[halamanController::class,'kontak']);
route::get('/v-sambutan',[halamanController::class,'sambutan']);
route::get('/v-kelembagaan',[halamanController::class,'kelembagaan']);
route::get('/v-pemerintahan',[halamanController::class,'pemerintahan']);
route::get('/v-usaha',[halamanController::class,'usaha']);
route::get('/v-sekretariat',[halamanController::class,'sekretariat']);
route::get('/v-bidangrehabilitas',[halamanController::class,'bidangrehabilitas']);
route::get('/v-berita-detail/{beritas:id}',[halamanController::class,'beritadetail'])->name('berita-detail');
route::get('/berita-cari',[halamancontroller::class,'hascarberita']);
//akhir dishub

route::get('/pengumumantemp',[halamancontroller::class,'pengumuman']);
route::get('/pengumuman-cari',[halamancontroller::class,'hascarpengumuman']);
route::get('/downloadtemp',[halamanController::class,'download']);
route::get('/agenda-detail/{agenda:id}',[halamanController::class,'agendadet'])->name('agenda-detail');
route::get('/pengdet/{pengumuman:id}',[halamanController::class,'pengdet'])->name('pengdet');
route::get('/getdownload/{download:id}',[halamanController::class,'getDownload'])->name('getdownload');
//Akhir halaman statis

route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,operator']], function () {
    route::get('/home',[HomeController::class,'index'])->name('home');
    // route::get('/halaman',[HalamanController::class,'index'])->name('halaman');
   
    //crud
    Route::resource('download', DownloadController::class);
    Route::resource('pengumuman', PengumumanController::class);

    Route::resource('kategori', KategoriController::class);
    Route::resource('tags', TagController::class);
    Route::resource('slide', SlideController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('tips', TipController::class);
    Route::resource('beritas', BeritaController::class);
    Route::resource('galeris', GaleriController::class);
    Route::resource('kontaks', KontakController::class);
    Route::resource('statiks', StatikController::class);

    route::get('/admin',[LoginController::class,'index'])->name('admin');
    route::post('/deladmin/{users:id}',[LoginController::class,'destroy'])->name('deladmin');
    route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
    // akhir crud
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
    route::get('/edituser/{users:id}',[LoginController::class,'edit'])->name('edituser');   
    route::put('/postedit/{users:id}',[LoginController::class,'update'])->name('postedit');   
});
