<?php

use Illuminate\Support\Facades\Route;
use App\Memo;



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
Route::get('/index', 'HomeController@index')->name('home');
Auth::routes();
Route::group(['middleware' => ['auth']], function(){
Route::get('/', 'MemosController@index')->name('index');

Route::get('/create', 'MemosController@create')->name('create');
Route::post('/store', 'MemosController@store')->name('store');

Route::get('/edit', 'MemosController@edit')->name('edit');
Route::post('/update', 'MemosController@update')->name('update');

Route::get('/delete', 'MemosController@delete')->name('delete');

Route::get('/calendar/index', 'CalendarController@index');
Route::get('/holiday', 'CalendarController@getHoliday');
Route::post('/holiday', 'CalendarController@postHoliday');
Route::get('/holiday/{id}','CalendarController@getHolidayId');
Route::delete('/holiday','CalendarController@deleteHoliday');
});