<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para la categoria
Route::get("/categories",[categoriesController::class,"index"]);
Route::post("/categories",[categoriesController::class,"store"]);
Route::get("/category/{id}",[categoriesController::class,"show"]);
Route::put("/category/{id}",[categoriesController::class,"update"]);
Route::delete("/category/{id}",[categoriesController::class,"destroy"]);

// rutas para el producto
Route::get("/products",[productsController::class,"index"]);
Route::post("/products",[productsController::class,"store"]);
Route::get("/product/{id}",[productsController::class,"show"]);
Route::put("/product/{id}",[productsController::class,"update"]);
Route::delete("/product/{id}",[productsController::class,"destroy"]);