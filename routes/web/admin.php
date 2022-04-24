<?php
use Illuminate\Support\Facades\Route;
Route::get('dashboard',function (){
   return view('admin.user.all');
});
Route::resource('user',\App\Http\Controllers\UserController::class);
