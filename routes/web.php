<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.stor');
Route::get('/register', [HomeController::class,'register'])->name('register');
Route::post('/register', [RegisterController::class,'register'])->name('register.stor');
Route::resource('livre', LivreController::class);

// Route::group(['middleware' => 'admin'], function()
// {
//     Route::resource('livre', LivreController::class, ['except' => ['index','show']]);
// });
// Route::resource('reservation', ReservationController::class);

// Route::get('reservations', [ReservationController , 'create'])->name('reser');

// Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');



// Route::get('/home/{$categorie?}/{$item?}', function ($categorie=null,$item=null)
//  {    if(isset($categorie)){
//       if(isset($item)){
//         return "<h1>{$item}</h1>";
//       }
//       return "<h1>{$categorie}</h1>";
//  }else{
//     return "<h1>home</h1>";
//  }
//  });
