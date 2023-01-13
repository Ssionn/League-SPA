<?php

use App\Http\Controllers\RiotController;
use App\Http\Controllers\SummonerController;
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

Route::get('/', function () {
    return view('league');
});

Route::resource('/summoner', SummonerController::class);

Route::post('/summoner', [SummonerController::class, 'getSummoner']);
