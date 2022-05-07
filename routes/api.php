<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




//create artist//
Route::post('artist', [Controller::class, 'createArtist'])->name('artist.createArtist');

//get all artist with likes DESC//
Route::get('artist', [Controller::class, 'getAllArtist'])->name('artist.getAllArtist');

//get single artist with id//
Route::get('artist/{id}', [Controller::class, 'getArtist'])->name('artist.getArtist');

//delete artist with id//
Route::delete('artist/{id}',[Controller::class, 'deleteArtist'])->name('artist.deleteArtist');

//increment like artist with id//
Route::put('likeartist/{id}',[Controller::class, 'likeartist'])->name('likeartist.likeartist');

//increment dislike artist with id//
Route::put('dislikeartist/{id}',[Controller::class, 'dislikeartist'])->name('dislikeartist.dislikeartist');