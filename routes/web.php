<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.tonirovka');
})->name('index');

Route::post('/', [ClientController::class, 'someAction']);


Route::get('/admin', [AdminController::class, 'index']);


Route::get('/fox', function() { 
    return 'Quick brown fox jumps over lazy dog';
});

// Route::get('/admin/delete-number/{id}', function($id) { 
//     return 'Quick brown fox jumps over lazy dog';
// });