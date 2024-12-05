<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category/{category}', function (\App\Category $category) {
    return $category->value;
});

Route::post('/upload', [\App\Http\Controllers\UploadImageController::class, 'store'])->name('upload');
//Route::get('/user/{name?}', function (?string $name = null) {
//
//})->name('user.view')->missing(function () {
//    return 'User not found';
/*Route::resource('users',\App\Http\Controllers\UserController::class);
Route::redirect('/','/users');
Route::get('/user/{name?}', function (?string $name = "John Doe") {
    return $name;
})->whereAlpha('name');*/
