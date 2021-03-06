<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\RoomsController;
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
    return redirect()->route('rooms.index');
});

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::resource('rooms', RoomsController::class);
    Route::resource('rooms.messages', MessagesController::class)->except(['index'])->shallow();
});
