<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SolariumController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('base');
// });

// Route::get('/search', function () {
//     return view('search');
// });

Route::get('/search', function () {
    return view('search2');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('result', function (){
//     return view('result2');
// });

// Route::get('dump', function(){
//     return view('datadump');
// });

Route::get('/ping', [SolariumController::class, 'ping']);
// Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
// Route::post('/result', [SolariumController::class, 'search']);
//Fallback
Route::fallback(function(){

    return view('search2');
});



