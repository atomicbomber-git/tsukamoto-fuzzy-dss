<?php
use App\Http\Controllers\VariabelController;
use App\Http\Controllers\RuleController;

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
    Route::get('/create', [VariabelController::class, 'create'])->name('create');
    Route::post('/store', [VariabelController::class, 'store'])->name('store');
    Route::get('/edit/{variabel}', [VariabelController::class, 'edit'])->name('edit');
    Route::post('/update/{variabel}', [VariabelController::class, 'update'])->name('update');
    Route::post('/delete/{variabel}', [VariabelController::class, 'delete'])->name('delete');
});

Route::group(['prefix' => '/variabel-parameter', 'as' => 'variabel-parameter.'], function() {
    Route::get('/index/{variabel}', 'VariabelParameterController@index')->name('index');
});

Route::group(['prefix' => '/parameter-fungsi', 'as' => 'parameter-fungsi.'], function() {
    Route::get('/index/{parameter}', 'ParameterFungsiController@index')->name('index');
});

Route::group(['prefix' => '/rule', 'as' => 'rule.'], function() {
    Route::get('/index', [RuleController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/kalkulasi', 'as' => 'kalkulasi.'], function() {
    Route::get('/index', [KalkulasiController::class, 'index'])->name('index');
});
