<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

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

Route::get('/', HomeController::class);

Route::controller(BlogController::class)->group(function(){
    Route::get('blog', 'index');
    Route::get('blog/create', 'create');
    Route::get('blog/{entry}', 'show');
});

require __DIR__.'/auth.php';
