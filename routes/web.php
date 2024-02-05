<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'accueil'])->name('accueil');
Route::get('/destination/{planete}', [PageController::class, 'destination'])->name('destination');
Route::get('/equipage/{equipe}', [PageController::class, 'equipage'])->name('equipage');
Route::get('/technologie/{techno}', [PageController::class, 'technologie'])->name('technologie');

Route::get('lang/{locale}', 'LangController@changeLocale')->name('change.locale');   // capture une variable locale à partir de l'URL et dirige la requête vers la méthode changeLocale du contrôleur LangController.

