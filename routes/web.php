<?php

use App\Http\Controllers\articlesController;
use Illuminate\Support\Facades\Route;
//la route principale
Route::get('/', [articlesController::class,'index'])->name('index');
//

//la route qui affiche les details de l'articles
Route::get('/details/{id}', [articlesController::class , 'details'])->name('details');
//


// les routes qui s'occupe de l'ajout
Route::get('/ajouter', [articlesController::class,'ajouter'])->name('ajouter');

Route::post('/ajouter', [articlesController::class ,'ajouter_traitement'])->name('creat');
//

//lesroute qui s'occupe de la modiffication
Route::get('/modifier/{id}', [articlesController::class ,'modifier'])->name('modifier');

Route::put('/modifier/{id}', [articlesController::class ,'modifier_traitement'])->name('update');
//

//la route de susppression
Route::get('/supprimer/{id}',[articlesController::class ,'supprimer'])->name('suppression');

