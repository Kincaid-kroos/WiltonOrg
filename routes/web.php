<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;

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

//show all the assets on the admin panel
Route::get('/assets', [AssetController::class, 'index']);

//register an newly acquired asset
Route::get('/assets/create', [AssetController::class, 'create']);

//storing a newly created asset
Route::post('/assets/store', [AssetController::class, 'store']);

//showing a single asset
Route::get('/assets/{id}', [AssetController::class, 'show']);

//showing edit form
Route::get('/assets/{id}/edit', [AssetController::class, 'edit']);

//updating the asset
Route::put('/assets/{id}/update', [AssetController::class, 'update']);

//deleting the asset
Route::delete('/assets/{id}/destroy', [AssetController::class, 'destroy']);
