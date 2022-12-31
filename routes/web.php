<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowMyTaskController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// HERE WE WILL MAKE UI:AUTH OF PROJECT
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


// HERE WE WILL MAKE ROUTE TO GO TO HOME PAGE FOR LOGIN MULTI-USER (ADMINS || USERS)
Route::get('/', function () {
    return view('welcome');
});

// HERE WE MAKE NEW VIEWS WITH CONTROLLER WITH RESOURCES ONLY FOR ADMIN 
//  AND MAKE GUARD FOR THIS ROUTE TO PREVENT ACCESS FROM ANYONE
Route::resource('/tasks', TaskController::class)->middleware('auth');

// HERE WE MAKE NEW VIEWS FOR USERS AND BACK FOR OLD PAGE AND MAKE GUARD FOR THIS ROUTE TO PREVENT ACCESS FROM ANYONE
Route::get('/mytask', [ShowMyTaskController::class, 'index'])->name('mytask')->middleware('auth');
Route::get('/userback', [ShowMyTaskController::class, 'back'])->name('userback')->middleware('auth');

