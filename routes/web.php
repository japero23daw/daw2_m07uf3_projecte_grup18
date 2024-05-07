<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorTreballador;
use App\Http\Controllers\AutosController;
use App\Http\Controllers\LlogaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PdfController;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('inici');
    
});
Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'adminAuth'], function(){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
        
    Route::get('/dashboard-basic', function () {
        return view('dashboard-basic');
    })->name('dashboard-basic');
            
    Route::get('trebs/index_basic', 'ControladorTreballador@index_basic')->name('trebs.index_basic');
    Route::get('trebs/show_basic/{tid}', 'ControladorTreballador@show_basic')->name('trebs.show_basic');
    Route::resource('auto', AutosController::class);
    Route::resource('llog', LlogaController::class);
    Route::resource('client', ClientController::class);
    Route::resource('trebs', ControladorTreballador::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
