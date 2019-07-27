<?php
use App\Http\Controllers\VariabelController;
use App\Http\Controllers\KalkulasiController;
use App\Http\Controllers\RuleController;
use App\Parameter;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\FungsiController;

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

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
});

Route::group(['prefix' => '/kalkulasi', 'as' => 'kalkulasi.'], function() {
    Route::get('/show', [KalkulasiController::class, 'show'])->name('show');
    Route::get('/create', [KalkulasiController::class, 'create'])->name('create');
});
