<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//auth
Route::post('/register', [ApiController::class, 'register'])->name('api.register');
Route::post('/login', [ApiController::class, 'login'])->name('api.login');

//categories
Route::post('/createCategories', [ApiController::class, 'createCategories'])->name('api.create-categories');
Route::get('/indexCategories', [ApiController::class, 'indexCategories'])->name('api.index-categories');
Route::get('/editCategories/{id}', [ApiController::class, 'editCategories'])->name('api.edit-categories');
Route::post('/updateCategories/{id}', [ApiController::class, 'updateCategories'])->name('api.update-categories');
Route::get('/destroyCategories/{id}', [ApiController::class, 'destroyCategories'])->name('api.destroy-categories');

//detail jastip
Route::post('/createShopper', [ApiController::class, 'createShopper'])->name('api.create-shopper');
Route::get('/indexPersonalShopper', [ApiController::class, 'indexPersonalShopper'])->name('api.index-shopper');
Route::get('/editPersonalShopper/{id}', [ApiController::class, 'editPersonalShopper'])->name('api.edit-shopper');
Route::post('/updatePersonalShopper/{id}', [ApiController::class, 'updatePersonalShopper'])->name('api.update-shopper');
Route::get('/destroyPersonalShopper/{id}', [ApiController::class, 'destroyPersonalShopper'])->name('api.destroy-shopper');
Route::get('/destroypersonalShopperImages/{id}', [ApiController::class, 'destroypersonalShopperImages'])->name('api.destroy-shopper-image');