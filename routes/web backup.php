<?php

use App\Models\NeracaPercobaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\NeracaPercobaanController;
use App\Http\Controllers\ProsedurAnalitisController;
use App\Http\Controllers\ProsedurAnalitisReviuController;

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
//     return view('welcome', [
//         "active" => true
//     ]);
// });

// Route::get('/', [HomeController::class, 'index']);

// // Tampilan Menu Untuk Satker

// Route::get('/satker', function () {
//     return view('satker.home', [
//         "title" => "Home | Satker"
//     ]);
// });

// Route::resource('/satker/prosedur-analitis', ProsedurAnalitisController::class);
// Route::post('file-import', [ProsedurAnalitisController::class, 'fileImport'])->name('file-import');
// Route::post('/satker/prosedur-analitis/update', [ProsedurAnalitisController::class, 'update'])->name('prosedur-analitis.update');

// Route::get('/satker/unggah-lk', function () {
//     return view('satker.unggah-lk', [
//         "title" => "Unggah LK"
//     ]);
// });

// Route::get('/satker/catatan-hasil-reviu', function () {
//     return view('satker.catatan-hasil-reviu', [
//         "title" => "Catatan Hasil Reviu"
//     ]);
// });

// Route::get('/satker/kertas-kerja-tindak-lanjut', function () {
//     return view('satker.kertas-kerja-tindak-lanjut', [
//         "title" => "Kertas Kerja Tindak Lanjut"
//     ]);
// });

// Route::get('/satker/catatan-hasil-tindak-lanjut', function () {
//     return view('satker.catatan-hasil-tindak-lanjut', [
//         "title" => "Catatan Hasil Tindak Lanjut"
//     ]);
// });

// Route::get('/satker/monitoring', function () {
//     return view('satker.monitoring',  [
//         "title" => "Monitoring"
//     ]);
// });

// Route::get('/satker/dokumen', function () {
//     return view('satker.dokumen', [
//         "title" => "File"
//     ]);
// });

// // Tampilan Menu Untuk Pereviu
// Route::get('/reviu', function () {
//     return view('reviu.home', [
//         "title" => "Home | Reviu"
//     ]);
// });

// Route::get('/reviu/unggah-lk', function () {
//     return view('reviu.unggah-lk', [
//         "title" => "Dokumen Sumber"
//     ]);
// });

// Route::get('/reviu/kertas-kerja-reviu', function () {
//     return view('reviu.kertas-kerja-reviu', [
//         "title" => "Kertas Kerja Reviu"
//     ]);
// });

// Route::get('/reviu/catatan-hasil-reviu', function () {
//     return view('reviu.catatan-hasil-reviu', [
//         "title" => "Catatan Hasil Reviu"
//     ]);
// });

// Route::get('/reviu/laporan-hasil-reviu', function () {
//     return view('reviu.laporan-hasil-reviu', [
//         "title" => "Laporan Hasil Reviu"
//     ]);
// });

// Route::get('/reviu/unggah-lhr', function () {
//     return view('reviu.unggah-lhr', [
//         "title" => "Unggah LHR"
//     ]);
// });

// Route::get('/reviu/kertas-kerja-tindak-lanjut', function () {
//     return view('reviu.kertas-kerja-tindak-lanjut', [
//         "title" => "Kertas Kerja Tindak Lanjut"
//     ]);
// });

// Route::get('/reviu/catatan-hasil-tindak-lanjut', function () {
//     return view('reviu.catatan-hasil-tindak-lanjut', [
//         "title" => "Catatan Hasil Tindak Lanjut"
//     ]);
// });

// Route::get('/reviu/laporan-hasil-tindak-lanjut', function () {
//     return view('reviu.laporan-hasil-tindak-lanjut', [
//         "title" => "Laporan Hasil Tindak Lanjut"
//     ]);
// });

// Route::get('/reviu/unggah-lhtl', function () {
//     return view('reviu.unggah-lhtl', [
//         "title" => "Unggah LHTL"
//     ]);
// });

// Route::get('/reviu/monitoring', function () {
//     return view('reviu.monitoring',  [
//         "title" => "Monitoring"
//     ]);
// });

// Route::get('/reviu/dokumen', function () {
//     return view('reviu.dokumen', [
//         "title" => "File"
//     ]);
// });

// // Tampilan Menu Admin
// Route::get('/admin', function () {
//     return view('admin.home', [
//         "title" => "Home | Admin"
//     ]);
// });

// Route::get('/admin/kelola-pengguna-satker', function () {
//     return view('admin.kelola-pengguna-satker', [
//         "title" => "Kelola Pengguna Satker"
//     ]);
// });

// Route::get('/admin/kelola-pengguna-pereviu', function () {
//     return view('admin.kelola-pengguna-pereviu', [
//         "title" => "Kelola Pengguna Pereviu"
//     ]);
// });

// Route::get('/admin/kelola-dokumen-sumber', function () {
//     return view('admin.kelola-dokumen-sumber', [
//         "title" => "Kelola Dokumen Sumber"
//     ]);
// });
// Route::get('/admin/monitoring', function () {
//     return view('admin.monitoring',  [
//         "title" => "Monitoring"
//     ]);
// });

// Route::get('/admin/dokumen', function () {
//     return view('admin.dokumen', [
//         "title" => "File"
//     ]);
// });

// // Tampilan Semua

// Route::resource('/reviu/prosedur-analitis', ProsedurAnalitisReviuController::class);
// Route::post('file-import', [ProsedurAnalitisReviuController::class, 'fileImport'])->name('file-import');
// Route::post('/reviu/prosedur-analitis/update', [ProsedurAnalitisReviuController::class, 'update'])->name('prosedur-analitis.update');

// // Route::get('/kertas-kerja-satker', function () {
// //     return view('satker.kertas-kerja-satker', [
// //         "title" => "Kertas Kerja Satker"
// //     ]);
// // });

// Route::get('/kelola-pengguna-satker', function () {
//     return view('admin.kelola-pengguna-satker', [
//         "title" => "Kelola Pengguna Satker"
//     ]);
// });

// Route::get('/kelola-pengguna-pereviu', function () {
//     return view('admin.kelola-pengguna-pereviu', [
//         "title" => "Kelola Pengguna Pereviu"
//     ]);
// });

// Route::get('/kelola-dokumen-sumber', function () {
//     return view('admin.kelola-dokumen-sumber', [
//         "title" => "Kelola Dokumen Sumber"
//     ]);
// });

// Route::get('/unggah-lk', function () {
//     return view('satker.unggah-lk', [
//         "title" => "Unggah LK"
//     ]);
// });

// // Kertas Kerja Reviu
// Route::get('/kertas-kerja-reviu', function () {
//     return view('reviu.kertas-kerja-reviu', [
//         "title" => "Kertas Kerja Reviu"
//     ]);
// });

// Route::get('/catatan-hasil-reviu', function () {
//     return view('reviu.catatan-hasil-reviu', [
//         "title" => "Catatan Hasil Reviu"
//     ]);
// });

// Route::get('/laporan-hasil-reviu', function () {
//     return view('reviu.laporan-hasil-reviu', [
//         "title" => "Laporan Hasil Reviu"
//     ]);
// });

// Route::get('/unggah-lhr', function () {
//     return view('reviu.unggah-lhr', [
//         "title" => "Unggah LHR"
//     ]);
// });

// // Kertas Kerja Tindak Lanjut
// Route::get('/kertas-kerja-tindak-lanjut', function () {
//     return view('tindak-lanjut.kertas-kerja-tindak-lanjut', [
//         "title" => "Kertas Kerja Tindak Lanjut"
//     ]);
// });

// Route::get('/catatan-hasil-tindak-lanjut', function () {
//     return view('tindak-lanjut.catatan-hasil-tindak-lanjut', [
//         "title" => "Catatan Hasil Tindak Lanjut"
//     ]);
// });

// Route::get('/laporan-hasil-tindak-lanjut', function () {
//     return view('tindak-lanjut.laporan-hasil-tindak-lanjut', [
//         "title" => "Laporan Hasil Tindak Lanjut"
//     ]);
// });

// Route::get('/unggah-lhtl', function () {
//     return view('tindak-lanjut.unggah-lhtl', [
//         "title" => "Unggah LHTL"
//     ]);
// });

// Route::get('/coba', function () {
//     return view('coba',  [
//         "title" => "Coba"
//     ]);
// });

// Route::get('/login', function () {
//     return view('login.index',  [
//         "title" => "Login"
//     ]);
// });

// Route::resource('companies', CompanyController::class);

// // Route::resource('/prosedur-analitis', ProsedurAnalitisController::class);
// // Route::post('file-import', [ProsedurAnalitisController::class, 'fileImport'])->name('file-import');
// // Route::post('/prosedur-analitis/update', [ProsedurAnalitisController::class, 'update'])->name('prosedur-analitis.update');

// Route::get('/dokumen', function () {
//     return view('admin.dokumen', [
//         "title" => "File"
//     ]);
// });

// Route::get('/monitoring', function () {
//     return view('monitoring',  [
//         "title" => "Monitoring"
//     ]);
// });

// // Route::get('/coba', function () {
// //     return view('coba', [
// //         "title" => "Coba"
// //     ]);
// // });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();



/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

// Route::middleware(['auth', 'user-access:admin'])->group(function () {
//     Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
// });

Route::middleware(['auth', 'user-access:satker'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/satker', [HomeController::class, 'satkerHome'])->name('satker.home');

    // Route::get('/satker', function () {
    //     return view('satker.home', [
    //         "title" => "Home | Satker"
    //     ]);
    // });

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

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
