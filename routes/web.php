<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('attach', [ShopController::class, 'attach']);
Route::get('detach', [ShopController::class, 'detach']);
Route::get('sync', [ShopController::class, 'sync']);
Route::get('sync-without-detaching', [ShopController::class, 'syncWithoutDetaching']);
Route::get('toggle', [ShopController::class, 'toggle']);

