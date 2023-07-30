<?php

use App\Models\NeracaPercobaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\NeracaPercobaanController;
use App\Http\Controllers\ProsedurAnalitisController;
use App\Http\Controllers\ProsedurAnalitisReviuController;
use App\Http\Controllers\ProsedurAnalitisAkuntansiController;

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



Auth::routes();



/*------------------------------------------

--------------------------------------------

Pengguna Admin

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/admin/kelola-pengguna-satker', function () {
        return view('admin.kelola-pengguna-satker', [
            "title" => "Kelola Pengguna Satker"
        ]);
    });

    Route::get('/admin/kelola-pengguna-pereviu', function () {
        return view('admin.kelola-pengguna-pereviu', [
            "title" => "Kelola Pengguna Pereviu"
        ]);
    });

    Route::get('/admin/kelola-dokumen-sumber', function () {
        return view('admin.kelola-dokumen-sumber', [
            "title" => "Kelola Dokumen Sumber"
        ]);
    });
    Route::get('/admin/monitoring', function () {
        return view('admin.monitoring',  [
            "title" => "Monitoring"
        ]);
    });

    Route::get('/admin/dokumen', function () {
        return view('admin.dokumen', [
            "title" => "File"
        ]);
    });
});



/*------------------------------------------

--------------------------------------------

Pengguna Satker

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:satker'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/satker', [HomeController::class, 'satkerHome'])->name('satker.home');
    Route::resource('/satker/prosedur-analitis', ProsedurAnalitisController::class);
    Route::post('file-import', [ProsedurAnalitisController::class, 'fileImport'])->name('file-import');
    Route::post('/satker/prosedur-analitis/update', [ProsedurAnalitisController::class, 'update'])->name('prosedur-analitis.update');

    Route::get('/satker/unggah-lk', function () {
        return view('satker.unggah-lk', [
            "title" => "Unggah LK"
        ]);
    });

    Route::get('/satker/catatan-hasil-reviu', function () {
        return view('satker.catatan-hasil-reviu', [
            "title" => "Catatan Hasil Reviu"
        ]);
    });

    Route::get('/satker/kertas-kerja-tindak-lanjut', function () {
        return view('satker.kertas-kerja-tindak-lanjut', [
            "title" => "Kertas Kerja Tindak Lanjut"
        ]);
    });

    Route::get('/satker/catatan-hasil-tindak-lanjut', function () {
        return view('satker.catatan-hasil-tindak-lanjut', [
            "title" => "Catatan Hasil Tindak Lanjut"
        ]);
    });

    Route::get('/satker/monitoring', function () {
        return view('satker.monitoring',  [
            "title" => "Monitoring"
        ]);
    });

    Route::get('/satker/dokumen', function () {
        return view('satker.dokumen', [
            "title" => "File"
        ]);
    });
});

Route::get('/akuntansi', function () {
    return view('akuntansi.home', [
        "title" => "Home"
    ]);
});


/*------------------------------------------

--------------------------------------------

Penggun Tim Pereviu

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:reviu'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('reviu', [HomeController::class, 'reviuHome'])->name('reviu.home');

    Route::resource('/reviu/prosedur-analitis', ProsedurAnalitisReviuController::class);
    // Route::post('file-import', [ProsedurAnalitisReviuController::class, 'fileImport'])->name('file-import');
    Route::post('/reviu/prosedur-analitis/update', [ProsedurAnalitisReviuController::class, 'update'])->name('prosedur-analitis.update');

    Route::get('/reviu/unggah-lk', function () {
        return view('reviu.unggah-lk', [
            "title" => "Dokumen Sumber"
        ]);
    });

    Route::get('/reviu/kertas-kerja-reviu', function () {
        return view('reviu.kertas-kerja-reviu', [
            "title" => "Kertas Kerja Reviu"
        ]);
    });

    Route::get('/reviu/catatan-hasil-reviu', function () {
        return view('reviu.catatan-hasil-reviu', [
            "title" => "Catatan Hasil Reviu"
        ]);
    });

    Route::get('/reviu/laporan-hasil-reviu', function () {
        return view('reviu.laporan-hasil-reviu', [
            "title" => "Laporan Hasil Reviu"
        ]);
    });

    Route::get('/reviu/unggah-lhr', function () {
        return view('reviu.unggah-lhr', [
            "title" => "Unggah LHR"
        ]);
    });

    Route::get('/reviu/kertas-kerja-tindak-lanjut', function () {
        return view('reviu.kertas-kerja-tindak-lanjut', [
            "title" => "Kertas Kerja Tindak Lanjut"
        ]);
    });

    Route::get('/reviu/catatan-hasil-tindak-lanjut', function () {
        return view('reviu.catatan-hasil-tindak-lanjut', [
            "title" => "Catatan Hasil Tindak Lanjut"
        ]);
    });

    Route::get('/reviu/laporan-hasil-tindak-lanjut', function () {
        return view('reviu.laporan-hasil-tindak-lanjut', [
            "title" => "Laporan Hasil Tindak Lanjut"
        ]);
    });

    Route::get('/reviu/unggah-lhtl', function () {
        return view('reviu.unggah-lhtl', [
            "title" => "Unggah LHTL"
        ]);
    });

    Route::get('/reviu/monitoring', function () {
        return view('reviu.monitoring',  [
            "title" => "Monitoring"
        ]);
    });

    Route::get('/reviu/dokumen', function () {
        return view('reviu.dokumen', [
            "title" => "File"
        ]);
    });
});

/*------------------------------------------

--------------------------------------------

Pengguna Bagian Akuntansi

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:akuntansi'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/akuntansi', [HomeController::class, 'akuntansiHome'])->name('akuntansi.home');

    Route::resource('/akuntansi/prosedur-analitis', ProsedurAnalitisAkuntansiController::class);
    // Route::post('file-import', [ProsedurAnalitisAkuntansiController::class, 'fileImport'])->name('file-import');
    Route::post('/akuntansi/prosedur-analitis/update', [ProsedurAnalitisAkuntansiController::class, 'update'])->name('prosedur-analitis.update');

    Route::get('/akuntansi/kertas-kerja-tindak-lanjut', function () {
        return view('akuntansi.kertas-kerja-tindak-lanjut',  [
            "title" => "Kertas Kerja Tindak Lanjut"
        ]);
    });

    Route::get('/akuntansi/monitoring', function () {
        return view('akuntansi.monitoring',  [
            "title" => "Monitoring"
        ]);
    });
});
