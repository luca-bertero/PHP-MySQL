<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

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

Route::get('/',function () {
    return view( 'welcome' );
});

Route::patch('/schedule/{schedule}/completed',[ScheduleController::class,'completed']);
Route::get('/schedule/today',[ScheduleController::class,'today']);
Route::get('/schedule/week',[ScheduleController::class,'week']);

Route::resource('/schedule', ScheduleController::class);


