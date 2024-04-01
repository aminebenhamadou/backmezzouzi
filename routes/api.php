<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnanceController;
use App\Http\Controllers\BoiteReceptionController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SimpleUserController;
use App\Http\Controllers\SousCategorieController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('scategories', SousCategorieController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('admins', AdminController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('annance', AnnanceController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('BoiteReception', BoiteReceptionController::class);
});


Route::middleware('api')->group(function () {
    Route::resource('forum', ForumController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('profil', ProfilController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('simpleUsers', SimpleUserController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('utilisateur', UtilisateurController::class);
});


