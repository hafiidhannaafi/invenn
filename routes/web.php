<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataJenisAsetController;
use App\Http\Controllers\DataAsalPerolehanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataSatuanController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AuthController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

//LANDING PAGES
Route::get('/', function () {
    return view('landingpages');
});

//LOGIN REGISTER
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

//CEK STATUS
Route::get('/cekstatus/keperluanprojek', function () {
    return view('cekstatus.statusprojek');
});

Route::get('/cekstatus/peminjamanpribadi', function () {
    return view('cekstatus.statuspribadi');
});

//NAVBAR
Route::get('/profil', function () {
    return view('profil.index');
});

//SIDEBAR
Route::get('/datajenisaset', function () {
    return view('datajenisaset.index');
});

Route::get('/dataasalperolehan', function () {
    return view('dataasalperolehan.index');
});

Route::get('/statuspeminjaman', function () {
    return view('statuspeminjaman.index');
});

Route::get('/data-aset', function () {
    return view('dataaset.index');
});

Route::get('/data-aset/form', function () {
    return view('dataaset.form');
});

Route::get('/peminjaman/form', function () {
    return view('peminjaman.form');
});

Route::get('/peminjaman/riwayat', function () {
    return view('peminjaman.riwayat');
});

Route::get('/jenisbarang', function () {
    return view('jenisbarang.index');
});

Route::get('/datasatuan', function () {
    return view('datasatuan.index');
});

Route::get('/data-asetbergerak', function () {
    return view('dataasetbergerak.index');
});

Route::get('/data-asetbergerak/form', function () {
    return view('dataasetbergerak.form');
});

Route::get('/data-peralatan', function () {
    return view('dataperalatan.index');
});

Route::get('/data-peralatan/form', function () {
    return view('dataperalatan.form');
});

Route::get('/data-perlengkapan', function () {
    return view('dataperlengkapan.index');
});

Route::get('/data-perlengkapan/form', function () {
    return view('dataperlengkapan.form');
});

Route::get('/barang-keluar', function () {
    return view('barangkeluar.index');
});

Route::get('/barang-keluar/form', function () {
    return view('barangkeluar.form');
});

Route::get('/barang-masuk', function () {
    return view('barangmasuk.index');
});

Route::get('/barang-masuk/form', function () {
    return view('barangmasuk.form');
});

Route::get('/data-user', function () {
    return view('datauser.index');
});

Route::get('/data-admin/form', function () {
    return view('dataadmin.form');
});

Route::get('/data-admin', function () {
    return view('dataadmin.index');
});

Route::get('/data-kepala/form', function () {
    return view('datakepala.form');
});

Route::get('/data-kepala', function () {
    return view('datakepala.index');
});

Route::get('/redirects',[HomeController::class,"index"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//DATA USER
Route::get('/data-user', [UserController::class, 'index']); //menampilkan data user
Route::get('/data-user/edit/{id}', 'App\Http\Controllers\UserController@edituser')->name('@edituser');
Route::post('/data-user/update/{id}', 'App\Http\Controllers\UserController@updateuser')->name('updateuser');
Route::get('/data-user/hapus/{id}', 'App\Http\Controllers\UserController@hapususer')->name('hapususer');

//DATA ADMIN
Route::POST('/data-admin', 'App\Http\Controllers\UserController@create')->name('data-admin');
Route::get('/data-admin', [UserController::class, 'dataadmin'])->name('data-admin');
Route::get('/data-admin/edit/{id}', 'App\Http\Controllers\UserController@editadmin')->name('editadmin');
Route::post('/data-admin/update/{id}', 'App\Http\Controllers\UserController@updateadmin')->name('updateadmin');
Route::get('/data-admin/hapus/{id}', 'App\Http\Controllers\UserController@hapusadmin')->name('hapusadmin');

//DATA KEPALA UNIT
Route::POST('/data-kepala', 'App\Http\Controllers\UserController@create')->name('data-kepala');
Route::get('/data-kepala', [UserController::class, 'datakepala'])->name('data-kepala');
Route::get('/data-kepala/edit/{id}', 'App\Http\Controllers\UserController@editkepala')->name('editkepala');
Route::post('/data-kepala/update/{id}', 'App\Http\Controllers\UserController@updatekepala')->name('updatekepala');
Route::get('/data-kepala/hapus/{id}', 'App\Http\Controllers\UserController@hapuskepala')->name('hapuskepala');

//DATA JENIS ASET
Route::POST('inputjenisaset', 'App\Http\Controllers\DataJenisAsetController@inputjenisaset')->name('inputjenisaset');
Route::get('/datajenisaset', [DataJenisAsetController::class, 'index']); 
Route::get('/datajenisaset/edit/{id}', 'App\Http\Controllers\DataJenisAsetController@editjenisaset')->name('editjenisaset');
Route::post('/datajenisaset/update/{id}', 'App\Http\Controllers\DataJenisAsetController@updatejenisaset')->name('updatejenisaset');
Route::get('/datajenisaset/hapusjenisaset/{id}', 'App\Http\Controllers\DataJenisAsetController@hapusjenisaset')->name('hapusjenisaset');


//DATA ASAL PEROLEHAN
Route::POST('inputasalperolehan', 'App\Http\Controllers\DataAsalPerolehanController@inputasalperolehan')->name('inputasalperolehan');
Route::get('/dataasalperolehan', [DataAsalPerolehanController::class, 'index']); 
Route::get('/dataasalperolehan/edit/{id}', 'App\Http\Controllers\DataAsalPerolehanController@editasalperolehan')->name('editasalperolehan');
Route::post('/dataasalperolehan/update/{id}', 'App\Http\Controllers\DataAsalPerolehanController@updateasalperolehan')->name('updateasalperolehan');
Route::get('/dataasalperolehan/hapusasalperolehan/{id}', 'App\Http\Controllers\DataAsalPerolehanController@hapusasalperolehan')->name('hapusasalperolehan');

//DATA SATUAN
Route::POST('inputsatuan', 'App\Http\Controllers\DataSatuanController@inputsatuan')->name('inputsatuan');
Route::get('/datasatuan', [DataSatuanController::class, 'index']); 
Route::get('/datasatuan/edit/{id}', 'App\Http\Controllers\DataSatuanController@editsatuan')->name('editsatuan');
Route::post('/datasatuan/update/{id}', 'App\Http\Controllers\DataSatuanController@updatesatuan')->name('updatesatuan');
Route::get('/datasatuan/hapussatuan/{id}', 'App\Http\Controllers\DataSatuanController@hapussatuan')->name('hapussatuan');

//DATA Jenis Barang
Route::POST('inputjenisbarang', 'App\Http\Controllers\JenisBarangController@inputjenisbarang')->name('inputjenisbarang');
Route::get('/jenisbarang', [JenisBarangController::class, 'index']); 
Route::get('/jenisbarang/edit/{id}', 'App\Http\Controllers\JenisBarangController@editjenisbarang')->name('editjenisbarang');
Route::post('/jenisbarang/update/{id}', 'App\Http\Controllers\JenisBarangController@updatejenisbarang')->name('updatejenisbarang');
Route::get('/jenisbarang/hapusjenisbarang/{id}', 'App\Http\Controllers\JenisBarangController@hapusjenisbarang')->name('hapusjenisbarang');

//DATA ASET
Route::POST('create', 'App\Http\Controllers\BarangController@create')->name('create');
Route::get('/data-aset/form', [BarangController::class, 'formasettidakbergerak']); 
Route::get('/data-aset', [BarangController::class, 'dataaset']); 
Route::get('/data-aset/edit/{id}', 'App\Http\Controllers\BarangController@editdataaset')->name('editdataaset');
Route::post('/data-aset/update/{id}', 'App\Http\Controllers\BarangController@update')->name('update');
Route::get('/data-aset/hapusdataaset/{id}', 'App\Http\Controllers\BarangController@hapusdataaset')->name('hapusdataaset');

//DATA ASET BERGERAK
// Route::POST('create', 'App\Http\Controllers\BarangController@create')->name('create');
Route::get('/data-asetbergerak/form', [BarangController::class, 'formasetbergerak']); 
Route::get('/data-asetbergerak', [BarangController::class, 'dataasetbergerak']); 
Route::get('/data-asetbergerak/edit/{id}', 'App\Http\Controllers\BarangController@editasetbergerak')->name('editasetbergerak');
Route::post('/data-asetbergerak/update/{id}', 'App\Http\Controllers\BarangController@update')->name('update');
Route::get('/data-asetbergerak/hapus/{id}', 'App\Http\Controllers\BarangController@hapusasetbergerak')->name('hapusasetbergerak');

//DATA ASET PERALATAN
// Route::POST('create', 'App\Http\Controllers\BarangController@create')->name('create');
Route::get('/data-peralatan/form', [BarangController::class, 'formperalatan']); 
Route::get('/data-peralatan', [BarangController::class, 'dataasetperalatan']); 
Route::get('/data-peralatan/edit/{id}', 'App\Http\Controllers\BarangController@editperalatan')->name('editperalatan');
Route::post('/data-peralatan/update/{id}', 'App\Http\Controllers\BarangController@update')->name('update');
Route::get('/data-peralatan/hapus/{id}', 'App\Http\Controllers\BarangController@hapusperalatan')->name('hapusperalatan');

//DATA ASET PERLENGKAPAN
// Route::POST('create', 'App\Http\Controllers\BarangController@create')->name('create');
Route::get('/data-perlengkapan/form', [BarangController::class, 'formperlengkapan']); 
Route::get('/data-perlengkapan', [BarangController::class, 'dataasetperlengkapan']); 
Route::get('/data-perlengkapan/edit/{id}', 'App\Http\Controllers\BarangController@editperlengkapan')->name('editperlengkapan');
Route::post('/data-perlengkapan/update/{id}', 'App\Http\Controllers\BarangController@update')->name('update');
Route::get('/data-perlengkapan/hapus/{id}', 'App\Http\Controllers\BarangController@hapusperlengkapan')->name('hapusperlengkapan');

//PENCATATAN STOK MASUK
Route::POST('inputstokmasuk', 'App\Http\Controllers\BarangMasukController@inputstokmasuk')->name('inputstokmasuk');
Route::get('/barang-masuk/form', [BarangMasukController::class, 'index']); 
Route::get('/barang-masuk', [BarangMasukController::class, 'barangmasuk']); 
Route::get('/barang-masuk/edit/{id}', 'App\Http\Controllers\BarangMasukController@editbarangmasuk')->name('editbarangmasuk');
Route::post('/barang-masuk/update/{id}', 'App\Http\Controllers\BarangMasukController@updatebarangmasuk')->name('updatebarangmasuk');
Route::get('/barang-masuk/hapus/{id}', 'App\Http\Controllers\BarangMasukController@hapusbarangmasuk')->name('hapusbarangmasuk');
Route::get('/barang-masuk/status_masuk/{id}', 'App\Http\Controllers\BarangMasukController@stok_masuk');

//PENCATATAN STOK/BARANG KELUAR
Route::POST('inputbarangkeluar', 'App\Http\Controllers\BarangKeluarController@inputbarangkeluar')->name('inputbarangkeluar');
Route::get('/barang-keluar/form', [BarangKeluarController::class, 'index']); 
Route::get('/barang-keluar', [BarangKeluarController::class, 'barangkeluar']); 
Route::get('/barang-keluar/edit/{id}', 'App\Http\Controllers\BarangKeluarController@editbarangkeluar')->name('editbarangkeluar');
Route::post('/barang-keluar/update/{id}', 'App\Http\Controllers\BarangKeluarController@updatebarangkeluar')->name('updatebarangkeluar');
Route::get('/barang-keluar/hapus/{id}', 'App\Http\Controllers\BarangKeluarController@hapusbarangkeluar')->name('hapusbarangkeluar');
Route::get('/barang-keluar/status_keluar/{id}', 'App\Http\Controllers\BarangKeluarController@stok_keluar');


//PEMINJAMAN//
Route::POST('inputpeminjaman', 'App\Http\Controllers\PeminjamanController@create')->name('inputpeminjaman');
Route::get('/peminjaman/form', [PeminjamanController::class, 'index']); 
Route::get('/peminjaman/riwayat', [PeminjamanController::class, 'peminjaman']); 
Route::get('/peminjaman/edit/{id}', 'App\Http\Controllers\PeminjamanController@editpeminjaman')->name('editpeminjaman');
Route::post('/peminjaman/update/{id}', 'App\Http\Controllers\PeminjamanController@updatepeminjaman')->name('updatepeminjaman');
Route::get('/peminjaman/hapus/{id}', 'App\Http\Controllers\PeminjamanController@hapuspeminjaman')->name('hapuspeminjaman');
Route::get('/status_setuju/{kode_peminjaman}', 'App\Http\Controllers\PeminjamanController@status_setuju');
Route::get('/status_ditolak/{kode_peminjaman}', 'App\Http\Controllers\PeminjamanController@status_ditolak');
Route::get('/status_barangdiambil/{kode_peminjaman}', 'App\Http\Controllers\PeminjamanController@status_barangdiambil');
Route::get('/status_kembali/{kode_peminjaman}', 'App\Http\Controllers\PeminjamanController@status_kembali');
 
//RIWAYAT PEMINJAM staff
Route::get('/peminjaman/pengajuan', [PeminjamanController::class, 'pengajuan']); 
Route::get('/detailbarang/{id}', [PeminjamanController::class, 'detail_barang']); 


//RIWAYAT PEMINJAM admin
Route::get('/peminjaman/peminjaman', [PeminjamanController::class, 'riwayat']); 

//PENCATATAN STOK/BARANG KELUAR kepala unit
Route::get('/pencatatan/barangkeluar', [BarangKeluarController::class, 'databarangkeluar']); 

//PENCATATAN STOK/BARANG MASUK kepala unit
Route::get('/pencatatan/barangmasuk', [BarangMasukController::class, 'databarangmasuk']); 

//DATA ASET kepala unit dan staff
Route::get('/aset/bergerak', [BarangController::class, 'asetbergerak']); 
Route::get('/aset/tidakbergerak', [BarangController::class, 'asettidakbergerak']); 
Route::get('/aset/peralatan', [BarangController::class, 'asetperalatan']); 
Route::get('/aset/perlengkapan', [BarangController::class, 'asetperlengkapan']); 

//LAPORAN
Route::get('/laporan/asetbergerak', [BarangController::class, 'laporanasetbergerak']);
Route::get('/laporan/asetbergerak', function () {
    return view('laporan.asetbergerak');
});

Route::get('/laporan/barangmasuk', [BarangMasukController::class, 'laporanbarangmasuk']);
Route::get('/laporan/barangkeluar', [BarangKeluarController::class, 'laporanbarangkeluar']);
Route::get('/laporan/asetbergerak', [BarangController::class, 'laporanasetbergerak']);
Route::get('/laporan/asettidakbergerak', [BarangController::class, 'laporanasettidakbergerak']);
Route::get('/laporan/perlengkapan', [BarangController::class, 'laporanasetperlengkapan']);
Route::get('/laporan/peralatan', [BarangController::class, 'laporanasetperalatan']);
Route::post('laporan/barangkeluar', 'App\Http\Controllers\BarangKeluarController@sortir')->name('barangkeluar');
Route::get('/laporan', function () {
    return view('laporan.menu');
});

//STATUS USER
Route::get('/ubah/status/{id}', 'App\Http\Controllers\UserController@ubahstatus');















