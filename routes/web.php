<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('spiralsmoke903@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});
Route::post ('send',[App\Http\Controllers\ClienthomepageController::class,'send' ])->name('send.email');
///<!Homepage and admin Registration!>///
Route::get('/Tentacit/Home',[App\Http\Controllers\ClienthomepageController::class,'index' ])->name('client_homepage');
Route::get('/Tentacit/Home/About Us',[App\Http\Controllers\ClienthomepageController::class,'info' ])->name('client_aboutusinfo');
Route::get('/Contact',[App\Http\Controllers\ClienthomepageController::class,'contact' ])->name('client_contactinfo');
Route::post('/sent',[App\Http\Controllers\ClienthomepageController::class,'prospect' ])->name('submit_message');
///<!END OF ROUTE GROUP!>///   

///<!Music Library!>///
Route::get('/Tentacit/Music-Library/page',[App\Http\Controllers\ArtistController::class,'show_musiclist' ])->name('client_musiclistingshowdata');
Route::get('/All-Artist',[App\Http\Controllers\ArtistController::class,'show_artists'])->name('client_memberlist');
Route::get('/Music-Library/Play',[App\Http\Controllers\ArtistController::class,'play_song'])->name('client_play');
///<!END OF ROUTE GROUP!>///  


///<!Genre Filtering!>///
Route::get('/Tentacit/Music-Library/bounce',[App\Http\Controllers\ArtistController::class,'genre_bounce' ])->name('genre_bounce');
Route::get('/Tentacit/Music-Library/drumstep',[App\Http\Controllers\ArtistController::class,'genre_drumstep' ])->name('genre_drumstep_view');
Route::get('/Tentacit/Music-Library/futurehouse',[App\Http\Controllers\ArtistController::class,'genre_futurehouse' ])->name('genre_futurehouse');
Route::get('/Tentacit/Music-Library/orchestral',[App\Http\Controllers\ArtistController::class,'genre_orchestral' ])->name('genre_orchestral_view');
Route::get('/Tentacit/Music-Library/trap',[App\Http\Controllers\ArtistController::class,'genre_trap' ])->name('genre_trap');
Route::get('/Tentacit/Music-Library/kawaii',[App\Http\Controllers\ArtistController::class,'genre_kawaii' ])->name('genre_kawaii');
///<!END OF ROUTE GROUP!>///  

