<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;
use App\Models\Scategorie;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get("/categories",[CategorieController::class,'index']);
Route::post("/categories",[CategorieController::class,'store']);
Route::get("/categories/{id}",[CategorieController::class,'show']);
Route::delete("/categories/{id}",[CategorieController::class,'destroy']);
Route::put("/categories/{id}",[CategorieController::class,'update']);

Route::get("/article",[ArticleController::class,'index']);
Route::post("/article",[ArticleController::class,'store']);
Route::get("/article/{id}",[ArticleController::class,'show']);
Route::delete("/article/{id}",[ArticleController::class,'destroy']);
Route::put("/article/{id}",[ArticleController::class,'update']);

Route::get("/scategorie",[Scategorie::class,'index']);
Route::post("/scategorie",[Scategorie::class,'store']);
Route::get("/scategorie/{id}",[Scategorie::class,'show']);
Route::delete("/scategorie/{id}",[Scategorie::class,'destroy']);
Route::put("/scategorie/{id}",[Scategorie::class,'update']);

Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
    });

    Route::middleware('api')->group(function () {
        Route::resource('scategories', ScategorieController::class);
        });

   Route::middleware('api')->group(function () {
     Route::resource('articles', ArticleController::class);
            });
    Route::get('/articles/art/articlespaginate', [ArticleController::class, 'articlesPaginate']);
