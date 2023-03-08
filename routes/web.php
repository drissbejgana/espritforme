<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('home')->with('path','');
});

Route::get('acceuil/{lang}', function($lang){
    App::setLocale($lang);
    return view('home');  
});

Route::get('contact/{lang}', function ($lang) {
    App::setLocale($lang);
  
     return view('contact');
});


Route::view('tarifs', 'tarifs');


Route::get('categories/{lang}/{id}/{subcat}', [CategoryController::class,'show']);

// Route::view('test', 'test');
Route::get('piscine/{lang}',function($lang){

    App::setLocale($lang);
    return view('piscine');
});