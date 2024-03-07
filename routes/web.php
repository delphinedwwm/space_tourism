<?php

use App\Http\Controllers\Backoffice\DestinationController;
use App\Http\Controllers\Backoffice\CrewController;
use App\Http\Controllers\Backoffice\TechnologyController;

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
Route::get('/crew/{id}', [PageController::class, 'crew'])->middleware('navlinks')->name('crew');
Route::get('/technology/{id}', [PageController::class, 'technology'])->middleware('navlinks')->name('technology');

Route::get('lang/{locale}', [LangController::class, 'changeLocale'])->name('change.locale');
// Route::get('lang/{locale}', 'LangController@changeLocale')->name('change.locale');   // capture une variable locale à partir de l'URL et dirige la requête vers la méthode changeLocale du contrôleur LangController.

// route pour backoffice destination _________________________________________________________________________________
Route::get('backoffice/destination', [DestinationController::class, 'index'])->name('backoffice.destination.index');
Route::get('backoffice/destination/show/{id}', [DestinationController::class, 'show'])->name('backoffice.destination.show');

Route::get('backoffice/destination/create', [DestinationController::class, 'create'])->name('backoffice.destination.create');
Route::post('backoffice/destination/store', [DestinationController::class, 'store'])->name('backoffice.destination.store');

Route::get('backoffice/destination/edit/{id}', [DestinationController::class, 'edit'])->name('backoffice.destination.edit');
Route::post('backoffice/destination/update/{id}', [DestinationController::class, 'update'])->name('backoffice.destination.update');

Route::get('backoffice/destination/delete/{id}', [DestinationController::class, 'delete'])->name('backoffice.destination.delete');
Route::delete('backoffice/destination/destroy/{id}', [DestinationController::class, 'destroy'])->name('backoffice.destination.destroy');
// ______________________________________________________________________________________________________________________________

// route pour backoffice crew _________________________________________________________________________________
Route::get('backoffice/crew', [CrewController::class, 'index'])->name('backoffice.crew.index');
Route::get('backoffice/crew/show/{id}', [CrewController::class, 'show'])->name('backoffice.crew.show');

Route::get('backoffice/crew/create', [CrewController::class, 'create'])->name('backoffice.crew.create');
Route::post('backoffice/crew/store', [CrewController::class, 'store'])->name('backoffice.crew.store');

Route::get('backoffice/crew/edit/{id}', [CrewController::class, 'edit'])->name('backoffice.crew.edit');
Route::post('backoffice/crew/update/{id}', [CrewController::class, 'update'])->name('backoffice.crew.update');

Route::get('backoffice/crew/delete/{id}', [CrewController::class, 'delete'])->name('backoffice.crew.delete');
Route::delete('backoffice/crew/destroy/{id}', [CrewController::class, 'destroy'])->name('backoffice.crew.destroy');

// ______________________________________________________________________________________________________________________________

// route pour backoffice technology _________________________________________________________________________________
Route::get('backoffice/technology', [TechnologyController::class, 'index'])->name('backoffice.technology.index');
Route::get('backoffice/technology/show/{id}', [TechnologyController::class, 'show'])->name('backoffice.technology.show');

Route::get('backoffice/technology/create', [TechnologyController::class, 'create'])->name('backoffice.technology.create');
Route::post('backoffice/technology/store', [TechnologyController::class, 'store'])->name('backoffice.technology.store');

Route::get('backoffice/technology/edit/{id}', [TechnologyController::class, 'edit'])->name('backoffice.technology.edit');
Route::post('backoffice/technology/update/{id}', [TechnologyController::class, 'update'])->name('backoffice.technology.update');

Route::get('backoffice/technology/delete/{id}', [TechnologyController::class, 'delete'])->name('backoffice.technology.delete');
Route::delete('backoffice/technology/destroy/{id}', [TechnologyController::class, 'destroy'])->name('backoffice.technology.destroy');

// ______________________________________________________________________________________________________________________________
