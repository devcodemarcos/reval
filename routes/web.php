<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'inicio']);
Route::get('/historia', [WebController::class, 'story'])->name('story');
Route::get('/clientes', [WebController::class, 'clients'])->name('clients');
Route::get('/contacto', [WebController::class, 'contact'])->name('contact');
Route::get('/servicios', [WebController::class, 'services'])->name('services');

Route::get('/productos/{category}', [WebController::class, 'products'])->name('products');