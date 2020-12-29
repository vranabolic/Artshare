<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\WorkplaceController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\User_CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;



Route::middleware(['auth'])->group(function () {

    /* homepage, primjetiti ->name('home') na kraju */
    Route::get('/', function () {
        return view('welcome');
    })->name('home');



Route::resource('countries', CountryController::class);
Route::resource('roles', RoleController::class);
Route::resource('companies', CompanyController::class);
Route::resource('workplaces', WorkplaceController::class);
Route::resource('documents', DocumentController::class);
Route::resource('followers', FollowerController::class);
Route::resource('user_comments', User_CommentController::class);
Route::resource('messages', MessageController::class);
Route::resource('users',UserController::class);
});
require __DIR__.'/auth.php';

