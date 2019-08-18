<?php
use App\Http\Controllers\VariabelController;
use App\Http\Controllers\KalkulasiController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\FungsiController;
use App\Http\Controllers\GuestKalkulasiController;
use App\Http\Controllers\SaranController;

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

Route::get('/home', function () {
    return redirect()->route('variabel.index');
})->name('home');

Route::get('/', function () {
    return redirect()->route('variabel.index');
});

Route::group(['prefix' => '/variabel', 'as' => 'variabel.'], function() {
    Route::get('/index', [VariabelController::class, 'index'])->name('index');
    Route::get('/edit/{variabel}', [VariabelController::class, 'edit'])->name('edit');
    Route::post('/update/{variabel}', [VariabelController::class, 'update'])->name('update');
});

Route::group(['prefix' => '/variabel-parameter', 'as' => 'variabel-parameter.'], function() {
    Route::get('/index/{variabel}', 'VariabelParameterController@index')->name('index');
});

Route::group(['prefix' => '/parameter-fungsi', 'as' => 'parameter-fungsi.'], function() {
    Route::get('/index/{parameter}', 'ParameterFungsiController@index')->name('index');
});

Route::group(['prefix' => '/parameter', 'as' => 'parameter.'], function() {
    Route::get('/edit/{parameter}', [ParameterController::class, 'edit'])->name('edit');
    Route::post('/update/{parameter}', [ParameterController::class, 'update'])->name('update');
});

Route::group(['prefix' => '/fungsi', 'as' => 'fungsi.'], function() {
    Route::get('/edit/{fungsi}', [FungsiController::class, 'edit'])->name('edit');
    Route::post('/update/{fungsi}', [FungsiController::class, 'update'])->name('update');
});

Route::group(['prefix' => '/rule', 'as' => 'rule.'], function() {
    Route::get('/index', [RuleController::class, 'index'])->name('index');
    Route::get('/create', [RuleController::class, 'create'])->name('create');
    Route::post('/store', [RuleController::class, 'store'])->name('store');
    Route::get('/edit/{rule}', [RuleController::class, 'edit'])->name('edit');
    Route::post('/update/{rule}', [RuleController::class, 'update'])->name('update');
    Route::get('/delete/{rule}', [RuleController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => '/kalkulasi', 'as' => 'kalkulasi.'], function() {
    Route::get('/show', [KalkulasiController::class, 'show'])->name('show');
    Route::get('/create', [KalkulasiController::class, 'create'])->name('create');
});

Route::group(['prefix' => '/guest-kalkulasi', 'as' => 'guest-kalkulasi.'], function() {
    Route::get('/show', [GuestKalkulasiController::class, 'show'])->name('show');
    Route::get('/create', [GuestKalkulasiController::class, 'create'])->name('create');
});

Route::group(['prefix' => '/saran', 'as' => 'saran.'], function() {
    Route::get('/index', [SaranController::class, 'index'])->name('index');
    Route::get('/edit/{saran}', [SaranController::class, 'edit'])->name('edit');
    Route::post('/update/{saran}', [SaranController::class, 'update'])->name('update');
    Route::post('/delete/{saran}', [SaranController::class, 'delete'])->name('delete');
});
