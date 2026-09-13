<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
Route::get('/profil', function(){
    return view('profil');
});

Route::get('/reports', function(){
    return view('reports.index');
})->name('reports.index');


Route::get('/reports/{id}', [ReportController::class, 'show'])
    ->name('reports.show');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/profil', [HomeController::class, 'profil'])-> name('profil');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');
