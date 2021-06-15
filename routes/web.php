<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

use App\Http\Controllers\PostController;


/*
Route::get('/hello', function () {
    return "Hello world";
});

Route::get('/users/{id}', function($id){
    return $id;
});
*/


Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::resources([
    'posts' => PostController::class,
]);