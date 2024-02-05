<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ReservationControlle;

Route::get('/home', [HomeController::class,'index'])->name('home.index');
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::resource('livre', LivreController::class);

Route::get('reservation', 'ReservationController@create')->name('reservation.create');
Route::post('reservation', 'ReservationController@store')->name('reservation.store');


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
