<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdmin\JenisUnitController;
use App\Http\Controllers\SuperAdmin\UnitController;
use App\Http\Controllers\SuperAdmin\PegawaiController;
use App\Http\Controllers\SuperAdmin\InovasiController;
use App\Http\Controllers\SuperAdmin\InovasiPegawaiController;
use App\Http\Controllers\SuperAdmin\KategoriController;
use App\Http\Controllers\SuperAdmin\SubKategoriController;
use App\Http\Controllers\SuperAdmin\ArtikelController;
use App\Http\Controllers\SuperAdmin\KegiatanController;
use App\Http\Controllers\SuperAdmin\DashboardController;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\PegawaiAdminController;
use App\Http\Controllers\Admin\InovasiAdminController;
use App\Http\Controllers\Admin\ArtikelAdminController;
use App\Http\Controllers\Admin\InovasiPegawaiAdminController;
use App\Http\Controllers\Admin\KegiatanAdminController;

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ArtikelUserController;
use App\Http\Controllers\User\InovasiUserController;
use App\Http\Controllers\User\KegiatanUserController;
use App\Http\Controllers\User\InovasiPegawaiUserController;
use App\Http\Controllers\ForumDiskusiController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\KomentarController;

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

//Route Login & Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/proseslogin', [LoginController::class, 'store'])->name('login.store');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);

Route::get('/getsubkategori', [ArtikelController::class, 'getSubKategori']);
Route::get('/getartikel', [ForumDiskusiController::class, 'getArtikel']);
Route::get('/getpegawai', [ArtikelController::class, 'getPegawai']);

//Route Role Super Admin
Route::group(['middleware' => ['auth', 'checkrole:Super Admin']], function () {
    Route::any('superadmin/kegiatan/create/{id_inovasi}', [KegiatanController::class, 'add'])->name('kegiatan.add');
    Route::any('superadmin/jenisopd', [JenisUnitController::class, 'delete'])->name('jenisopd.delete');
    Route::any('superadmin/opd', [UnitController::class, 'delete'])->name('opd.delete');
    Route::any('superadmin/pegawai', [PegawaiController::class, 'delete'])->name('pegawai.delete');
    Route::any('superadmin/artikel', [ArtikelController::class, 'delete'])->name('artikel.delete');
    Route::any('superadmin/inovasi', [InovasiController::class, 'delete'])->name('inovasi.delete');
    Route::any('superadmin/inovasipegawai', [InovasiPegawaiController::class, 'delete'])->name('inovasipegawai.delete');
    Route::any('superadmin/kegiatan', [KegiatanController::class, 'delete'])->name('kegiatan.delete');
    Route::any('superadmin/kategori', [KategoriController::class, 'delete'])->name('kategori.delete');
    Route::any('superadmin/subkategori', [SubKategoriController::class, 'delete'])->name('subkategori.delete');

    Route::resource('superadmin/dashboard', DashboardController::class);
    Route::resource('superadmin/jenisopd', JenisUnitController::class);
    Route::resource('superadmin/opd', UnitController::class);
    Route::resource('superadmin/pegawai', PegawaiController::class);
    Route::resource('superadmin/inovasi', InovasiController::class);
    Route::resource('superadmin/members', InovasiPegawaiController::class);
    Route::resource('superadmin/kategori', KategoriController::class);
    Route::resource('superadmin/subkategori', SubKategoriController::class);
    Route::resource('superadmin/kegiatan', KegiatanController::class);
    Route::resource('superadmin/artikel', ArtikelController::class);

    Route::get(
        '/superadmin/artikel/approved/{id_artikel}',
        [ArtikelController::class, 'approved']
    )->name('artikel.approved');
    Route::any(
        '/superadmin/artikel/reject/{id_artikel}',
        [ArtikelController::class, 'reject']
    )->name('artikel.reject');

    Route::get('superadmin/artikel/download/{id_artikel}', [ArtikelController::class, 'download'])->name('artikel.download');
    Route::get('superadmin/inovasi/download/{id_inovasi}', [InovasiController::class, 'download'])->name('inovasi.download');
    Route::get('superadmin/kegiatan/download/{id_kegiatan}', [KegiatanController::class, 'download'])->name('kegiatan.download');
});

//Route Role Admin
Route::group(['middleware' => ['auth', 'checkrole:Admin']], function () {
    Route::get('admin/dashboard', [DashboardAdminController::class, 'index'])->name('dashboardadmin.index');
    
    Route::get('admin/pegawai', [PegawaiAdminController::class, 'index'])->name('pegawaiadmin.index');
    Route::get('admin/pegawai/create', [PegawaiAdminController::class, 'create'])->name('pegawaiadmin.create');
    Route::post('admin/pegawai/store', [PegawaiAdminController::class, 'store'])->name('pegawaiadmin.store');
    Route::get('admin/pegawai/{id_pegawai}/edit', [PegawaiAdminController::class, 'edit'])->name('pegawaiadmin.edit');
    Route::put('admin/pegawai/{id_pegawai}', [PegawaiAdminController::class, 'update'])->name('pegawaiadmin.update');
    Route::get('admin/pegawai/{id_pegawai}', [PegawaiAdminController::class, 'show'])->name('pegawaiadmin.show');
    Route::post('admin/pegawai', [PegawaiAdminController::class, 'delete'])->name('pegawaiadmin.delete');

    Route::get('admin/inovasi', [InovasiAdminController::class, 'index'])->name('inovasiadmin.index');
    Route::get('admin/myinovasi', [InovasiAdminController::class, 'myinovasi'])->name('inovasiadmin.myinovasi');
    Route::get('admin/inovasi/create', [InovasiAdminController::class, 'create'])->name('inovasiadmin.create');
    Route::post('admin/inovasi/store', [InovasiAdminController::class, 'store'])->name('inovasiadmin.store');
    Route::get('admin/inovasi/{id_inovasi}/edit', [InovasiAdminController::class, 'edit'])->name('inovasiadmin.edit');
    Route::get('admin/myinovasi/{id_inovasi}/edit', [InovasiAdminController::class, 'myinovasiedit'])->name('inovasiadmin.myinovasiedit');
    Route::put('admin/inovasi/{id_inovasi}', [InovasiAdminController::class, 'update'])->name('inovasiadmin.update');
    Route::put('admin/myinovasi/{id_inovasi}', [InovasiAdminController::class, 'myinovasiupdate'])->name('inovasiadmin.myinovasiupdate');
    Route::get('admin/inovasi/{id_inovasi}', [InovasiAdminController::class, 'show'])->name('inovasiadmin.show');
    Route::get('admin/myinovasi/{id_inovasi}', [InovasiAdminController::class, 'myinovasishow'])->name('inovasiadmin.myinovasishow');
    Route::post('admin/inovasi', [InovasiAdminController::class, 'delete'])->name('inovasiadmin.delete');
    Route::post('admin/myinovasi/delete', [InovasiAdminController::class, 'myinovasidelete'])->name('inovasiadmin.myinovasidelete');

    Route::post('admin/kegiatan', [KegiatanAdminController::class, 'store'])->name('kegiatanadmin.store');
    Route::post('admin/mykegiatan', [KegiatanAdminController::class, 'mykegiatanstore'])->name('kegiatanadmin.mykegiatanstore');
    Route::get('admin/kegiatan/create/{id_inovasi}', [KegiatanAdminController::class, 'add'])->name('kegiatanadmin.add');
    Route::get('admin/mykegiatan/create/{id_inovasi}', [KegiatanAdminController::class, 'mykegiatanadd'])->name('kegiatanadmin.mykegiatanadd');
    Route::get('admin/kegiatan/{id_kegiatan}/edit', [KegiatanAdminController::class, 'edit'])->name('kegiatanadmin.edit');
    Route::get('admin/mykegiatan/{id_kegiatan}/edit', [KegiatanAdminController::class, 'mykegiatanedit'])->name('kegiatanadmin.mykegiatanedit');
    Route::put('admin/kegiatan/{id_kegiatan}', [KegiatanAdminController::class, 'update'])->name('kegiatanadmin.update');
    Route::put('admin/mykegiatan/{id_kegiatan}', [KegiatanAdminController::class, 'mykegiatanupdate'])->name('kegiatanadmin.mykegiatanupdate');
    Route::get('admin/kegiatan/{id_kegiatan}', [KegiatanAdminController::class, 'show'])->name('kegiatanadmin.show');
    Route::get('admin/mykegiatan/{id_kegiatan}', [KegiatanAdminController::class, 'mykegiatanshow'])->name('kegiatanadmin.mykegiatanshow');
    Route::post('admin/kegiatan/delete', [KegiatanAdminController::class, 'delete'])->name('kegiatanadmin.delete');
    Route::post('admin/mykegiatan/delete', [KegiatanAdminController::class, 'mykegiatandelete'])->name('kegiatanadmin.mykegiatandelete');

    Route::get('admin/members/{id_inovasi}', [InovasiPegawaiAdminController::class, 'show'])->name('membersadmin.show');
    Route::get('admin/mymembers/{id_inovasi}', [InovasiPegawaiAdminController::class, 'myshow'])->name('membersadmin.myshow');
    Route::post('admin/members', [InovasiPegawaiAdminController::class, 'store'])->name('membersadmin.store');
    Route::post('admin/mymembers', [InovasiPegawaiAdminController::class, 'mystore'])->name('membersadmin.mystore');
    Route::post('admin/members/delete', [InovasiPegawaiAdminController::class, 'delete'])->name('membersadmin.delete');
    Route::post('admin/mymembers/delete', [InovasiPegawaiAdminController::class, 'mydelete'])->name('membersadmin.mydelete');

    Route::get('admin/artikel', [ArtikelAdminController::class, 'index'])->name('artikeladmin.index');
    Route::get('admin/myartikel', [ArtikelAdminController::class, 'myartikel'])->name('artikeladmin.myartikel');
    Route::get('admin/artikel/create', [ArtikelAdminController::class, 'create'])->name('artikeladmin.create');
    Route::post('admin/artikel/store', [ArtikelAdminController::class, 'store'])->name('artikeladmin.store');
    Route::get('admin/artikel/{id_inovasi}/edit', [ArtikelAdminController::class, 'edit'])->name('artikeladmin.edit');
    Route::get('admin/myartikel/{id_inovasi}/edit', [ArtikelAdminController::class, 'myedit'])->name('artikeladmin.myedit');
    Route::put('admin/artikel/{id_inovasi}', [ArtikelAdminController::class, 'update'])->name('artikeladmin.update');
    Route::put('admin/myartikel/{id_inovasi}', [ArtikelAdminController::class, 'myupdate'])->name('artikeladmin.myupdate');
    Route::get('admin/artikel/{id_inovasi}', [ArtikelAdminController::class, 'show'])->name('artikeladmin.show');
    Route::get('admin/myartikel/{id_inovasi}', [ArtikelAdminController::class, 'myshow'])->name('artikeladmin.myshow');
    Route::post('admin/artikel/delete', [ArtikelAdminController::class, 'delete'])->name('artikeladmin.delete');
    Route::post('admin/myartikel/delete', [ArtikelAdminController::class, 'mydelete'])->name('artikeladmin.mydelete');


    Route::get('admin/inovasi/download/{id_inovasi}', [InovasiAdminController::class, 'download'])->name('inovasiadmin.download');
    Route::get('admin/kegiatan/download/{id_inovasi}', [KegiatanAdminController::class, 'download'])->name('kegiatanadmin.download');
    Route::get('admin/artikel/download/{id_artikel}', [ArtikelController::class, 'download'])->name('artikeladmin.download');

    Route::get('/admin/artikel/approved/{id_artikel}', [ArtikelAdminController::class, 'approved'])->name('artikeladmin.approved');
    Route::any('/admin/artikel/reject/{id_artikel}',[ArtikelAdminController::class, 'reject'])->name('artikeladmin.reject');
    
    Route::get('/admin/myartikel/approved/{id_artikel}', [ArtikelAdminController::class, 'myapproved'])->name('artikeladmin.myapproved');
    Route::any('/admin/myartikel/reject/{id_artikel}',[ArtikelAdminController::class, 'myreject'])->name('artikeladmin.myreject');
});


//Route Role User
Route::group(['middleware' => ['auth', 'checkrole:User']], function () {
    Route::get('/inovasi', [InovasiUserController::class, 'index'])->name('inovasiuser.index');
    Route::post('/inovasi', [InovasiUserController::class, 'store'])->name('inovasiuser.store');
    Route::post('/inovasi/delete', [InovasiUserController::class, 'delete'])->name('inovasiuser.delete');
    Route::put('/inovasi/{id_inovasi}', [InovasiUserController::class, 'update'])->name('inovasiuser.update');
    Route::get('/inovasi/create', [InovasiUserController::class, 'create'])->name('inovasiuser.create');
    Route::get('/inovasi/{id_inovasi}/edit', [InovasiUserController::class, 'edit'])->name('inovasiuser.edit');
    Route::get('/inovasi/{id_inovasi}', [InovasiUserController::class, 'show'])->name('inovasiuser.show');
    Route::get('/search/inovasi', [InovasiUserController::class, 'search'])->name('search.inovasi');
    Route::get('/kegiatan/{id_kegiatan}', [KegiatanUserController::class, 'show'])->name('kegiatanuser.show');
    Route::get('/kegiatan/create/{id_inovasi}', [KegiatanUserController::class, 'create'])->name('kegiatanuser.create');
    Route::post('/kegiatan', [KegiatanUserController::class, 'store'])->name('kegiatanuser.store');
    Route::get('/kegiatan/{id_kegiatan}/edit', [KegiatanUserController::class, 'edit'])->name('kegiatanuser.edit');
    Route::put('/kegiatan/{id_kegiatan}', [KegiatanUserController::class, 'update'])->name('kegiatanuser.update');
    Route::post('/kegiatan/delete', [KegiatanUserController::class, 'delete'])->name('kegiatanuser.delete');
    Route::post('/members/store', [InovasiPegawaiUserController::class, 'store'])->name('membersuser.store');
    Route::get('/members/{id_inovasi}', [InovasiPegawaiUserController::class, 'show'])->name('membersuser.show');
    Route::post('/members/delete', [InovasiPegawaiUserController::class, 'delete'])->name('membersuser.delete');
    Route::get('/artikel/create', [ArtikelUserController::class, 'create'])->name('artikeluser.create');
    Route::post('/artikel/store', [ArtikelUserController::class, 'store'])->name('artikeluser.store');
    Route::get('/artikel/{id_artikel}/edit', [ArtikelUserController::class, 'edit'])->name('artikeluser.edit');
    Route::put('/artikel/{id_artikel}', [ArtikelUserController::class, 'update'])->name('artikeluser.update');
    Route::post('/artikel/delete', [ArtikelUserController::class, 'delete'])->name('artikeluser.delete');
    Route::get('artikel/download/{id_artikel}', [ArtikelUserController::class, 'download'])->name('artikeluser.download');
    Route::get('inovasi/download/{id_artikel}', [InovasiUserController::class, 'download'])->name('inovasiuser.download');
});
Route::resource('/home', HomeController::class);
Route::get('/artikel', [ArtikelUserController::class, 'index'])->name('artikeluser.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/artikel/{id_artikel}', [ArtikelUserController::class, 'show'])->name('artikeluser.show');
Route::get('/search/artikel', [ArtikelUserController::class, 'search'])->name('search.artikel');

//Route Forum Diskusi
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/forum-diskusi', ForumDiskusiController::class);
    Route::resource('/forum-diskusi/topic', TopicController::class);
    Route::resource('/forum-diskusi/topic/komentar', KomentarController::class);
});