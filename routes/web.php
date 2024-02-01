<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LivreController;

Route::get('/home', [BookController::class,'index'])->name('home.index');

Route::get('/about', [AboutController::class,'about'])->name('home.about');

Route::resource('livre', LivreController::class);

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
