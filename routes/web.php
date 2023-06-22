<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;

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

Route::controller(PublicController::class)->group(function() {
    Route::get('/', 'homepage')->name('public.homepage');
});

Route::controller(ContactController::class)->group(function() {
    Route::get('/contatti', 'contacts')->name('public.contacts');
    Route::post('/contact/submit', 'contactSubmit')->name('public.form')->middleware(ProtectAgainstSpam::class);
    Route::get('/thank-you/{name}', 'thanks')->name('public.thanks');
});
