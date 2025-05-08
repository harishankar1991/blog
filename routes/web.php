<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',[PostController::class,'index'] );
Route::get('/posts/{id}',[PostController::class,'details'])->where('id','[0-9]+')->name('posts.details');
// Route::get('/posts/{id}',[PostController::class,'details'])->where('id','[0-9]+')->name('posts.detai
Route::get('/old-url',[PostController::class,'oldurl']);
Route::get('/new-somthingurl',[PostController::class,'newurl'])->name('new_url');// Route::get('/',function(){
//     return "<h1>hello php laravel </h1>";   
// });
  