<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


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
Route::get('/',function(){
    return View('Admin.dashboard'); 
});
Route::prefix('categories')->group(function(){

Route::get('/create',[CategoryController::class,'index'])
->name('categories.index');
Route::get('/',[CategoryController::class,'index2'])
->name('categories.index2');
Route::get('/{id}',[CategoryController::class,'show'])
->name('categories.show'); 
Route::get('/{id}',[CategoryController::class,'showupdate'])
->name('categories.showupdate'); 
Route::post('/',[CategoryController::class,'create'])
->name('categories.create'); 
Route::put('/{id}',[CategoryController::class,'update'])
->name('categories.update'); 
Route::delete('/{id}',[CategoryController::class,'delete'])
->name('categories.delete'); 

});

Route::prefix('products')->group(function(){

    Route::get('/',[ProductController::class,'index'])
    ->name('products.index');
    Route::get('/{id}',[ProductControllert::class,'show'])
    ->name('products.show'); 
    Route::post('/',[ProductController::class,'create'])
    ->name('products.create'); 
    Route::put('/{id}',[ProductController::class,'update'])
    ->name('products.update'); 
    
    
    });


    Route::prefix('subcategories')->group(function(){

        Route::get('/',[SubCategoryController::class,'index'])
        ->name('subcategories.index');
        Route::get('/{id}',[SubCategoryController::class,'show'])
        ->name('subcategories.show'); 
        Route::post('/',[SubCategoryController::class,'create'])
        ->name('subcategories.create'); 
        Route::put('/{id}',[SubCategoryController::class,'update'])
        ->name('subcategories.update'); 
        
        
        });