<?php

use App\Http\Controllers\FormulaireController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('confirmation/email/id={id}&token={token}',[FormulaireController::class,'verificationEmail']);
Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');

URL::forceScheme('https');
