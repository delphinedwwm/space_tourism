<?php

use App\Http\Controllers\Backoffice\DestinationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LangController;
use App\Http\Middleware\NavLinks;

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

Route::get('/', [PageController::class, 'accueil'])->middleware(['navlinks'])->name('accueil');
Route::get('/destination/{id}', [PageController::class, 'destination'])->middleware('navlinks')->name('destination');
Route::get('/equipage/{equipe}', [PageController::class, 'equipage'])->middleware('navlinks')->name('equipage');
Route::get('/technologie/{techno}', [PageController::class, 'technologie'])->middleware('navlinks')->name('technologie');

Route::get('lang/{locale}', [LangController::class, 'changeLocale'])->name('change.locale');
// Route::get('lang/{locale}', 'LangController@changeLocale')->name('change.locale');   // capture une variable locale à partir de l'URL et dirige la requête vers la méthode changeLocale du contrôleur LangController.

Route::get('backoffice/destination', [DestinationController::class, 'index'])->name('backoffice.destination.index');
Route::get('backoffice/destination/show/{id}', [DestinationController::class, 'show'])->name('backoffice.destination.show');

Route::get('backoffice/destination/create', [DestinationController::class, 'create'])->name('backoffice.destination.create');
Route::post('backoffice/destination/store', [DestinationController::class, 'store'])->name('backoffice.destination.store');

Route::get('backoffice/destination/edit/{id}', [DestinationController::class, 'edit'])->name('backoffice.destination.edit');
Route::put('backoffice/destination/update/{id}', [DestinationController::class, 'update'])->name('backoffice.destination.update');

Route::get('backoffice/destination/delete/{id}', [DestinationController::class, 'delete'])->name('backoffice.destination.delete');
Route::delete('backoffice/destination/destroy/{id}', [DestinationController::class, 'destroy'])->name('backoffice.destination.destroy');