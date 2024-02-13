<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index', [
        'title' => ''
    ]);
});

Route::get('/tanah-lahan', function () {
    return view('tanah-lahan',[
        'title' => 'Tanah dan Lahan |'
    ]);
});

Route::get('/ruas-jalan', function () {
    return view('ruas-jalan',[
        'title' => 'Ruas Jalan |'
    ]);
});

Route::get('/peraturan', function () {
    return view('peraturan', [
        'title' => 'Peraturan |'
    ]);
});

Route::get('/statistik', function () {
    return view('statistik',[
        'title' => 'Statistik |'
    ]);
});

Route::get('/drainase', function () {
    return view('drainase',[
        'title' => 'Drainase |'
    ]);
});

Route::get('/peta', function () {
    return view('peta',[
        'title' => 'Peta |'
    ]);
});

Route::name('page.')->group(function () {
    Route::get('/dashboard', [AppController::class, 'dashboard'])->name('home');
    Route::get('/pengaturan-beranda', [AppController::class, 'pengaturanBeranda'])->name('setBeranda');
    Route::get('/pengaturan-disclaimer', [AppController::class, 'pengaturanDisclaimer'])->name('setDisclaimer');
    Route::get('/tanah-lahan', [AppController::class, 'tanahDanLahan'])->name('tanah-lahan');
    Route::get('/ruas-jalan', [AppController::class, 'ruasJalan'])->name('jalan');
    Route::get('/peraturan', [AppController::class, 'peraturanDashboard'])->name('peraturan');
    Route::get('/drainase', [AppController::class, 'drainaseDashboard'])->name('drainase');
});

Route::name('detail.')->group(function(){
    Route::get('detail-tanah-lahan', [DetailController::class, 'detailTanahLahan'])->name('detail-tanah');
    Route::get('detail-ruas-jalan', [DetailController::class, 'detailRuasJalan'])->name('jalan');
    Route::get('detail-peraturan', [DetailController::class, 'detailPeraturan'])->name('peraturan');
    Route::get('detail-drainase', [DetailController::class, 'detailDrainase'])->name('drainase');
});
