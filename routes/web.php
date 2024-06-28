<?php

use Illuminate\Support\Facades\Route;

//landing
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Landing\AduanWargaController;


//dashboard
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\AduanController;
use App\Http\Controllers\Dashboard\AntrianController;
use App\Http\Controllers\Dashboard\AdminDesaController;
use App\Http\Controllers\Dashboard\PengajuanSuratController;
use App\Http\Controllers\Dashboard\WargaDesaController;
use App\Http\Controllers\Dashboard\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('explore', [LandingController::class, 'explore'])->name('explore.landing');
Route::get('pengajuan_surat/{id}', [LandingController::class, 'pengajuan_surat'])->name('explore.pengajuan');
Route::post('store_pengajuan_surat', [LandingController::class, 'store_pengajuan_surat'])->name('store.pengajuan');
Route::get('notifikasi', [LandingController::class, 'notifikasi'])->name('notifikasi');
Route::get('about', [LandingController::class, 'about'])->name('about');
Route::get('detail/{id}', [LandingController::class, 'detail'])->name('detail.landing');
Route::resource('/', LandingController::class);

Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum', 'verified']],
function(){
    //dashboard
    Route::resource('dashboard', DashboardController::class);

    //profile
    Route::resource('profile', ProfileController::class);
    Route::get('delete', [ProfileController::class,'delete'])->name('delete.photo');

    //admin desa
    Route::resource('admin_desa', AdminDesaController::class);

    //warga desa
    Route::resource('warga_desa', WargaDesaController::class);

    //aduan
    Route::resource('aduan', AduanController::class);

     //aduan
     Route::resource('aduanwarga', AduanWargaController::class);

    //antrian
    Route::resource('admin_desa', AntrianController::class);

    //pengajuan surat
    Route::get('detail/{id}', [PengajuanSuratController::class,'detail'])->name('detail.pengajuan_surat');
    Route::post('approve/{id}', [PengajuanSuratController::class,'approve'])->name('approve.pengajuan_surat');
    Route::get('reject/{id}', [PengajuanSuratController::class,'reject'])->name('reject.pengajuan_surat');
    Route::get('print-report', [PengajuanSuratController::class,'reporting'])->name('reporting.pengajuan_surat');
    Route::resource('pengajuan_surat', PengajuanSuratController::class);

});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
