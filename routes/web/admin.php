<?php
use Illuminate\Support\Facades\Route;
Route::get('dashboard',function (){
   return view('admin.user.all');
});
Route::resource('user',\App\Http\Controllers\UserController::class);
Route::resource('permission',\App\Http\Controllers\PermissionController::class);
Route::resource('role',\App\Http\Controllers\RoleController::class);
