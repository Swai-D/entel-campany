<?php

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
//Home
Route::get('/', 'IndexController@index');

//Services Route
Route::get('/services-1', 'IndexController@services_1');
Route::get('/services-2', 'IndexController@services_2');
Route::get('/services-3', 'IndexController@services_3');
Route::get('/services-4', 'IndexController@services_4');
Route::get('/services-5', 'IndexController@services_5');
Route::get('/services-6', 'IndexController@services_6');

//ServicesSingle
Route::get('/single-service-1', 'IndexController@single_service_1');
//solutions
Route::get('/solution-1', 'IndexController@solution_1');
Route::get('/solution-2', 'IndexController@solution_2');
Route::get('/solution-3', 'IndexController@solution_3');
Route::get('/solution-4', 'IndexController@solution_4');

//Enterprice
Route::get('/enterprice-1', 'IndexController@enterprice_1');
Route::get('/enterprice-2', 'IndexController@enterprice_2');
Route::get('/enterprice-3', 'IndexController@enterprice_3');

//contact us
Route::get('/contact-us', 'IndexController@contact_us');


//email_subcribe
Route::post('/email_subcribe', 'ContactController@email_subcribe_store');

//contact-us
Route::post('/contact-us', 'ContactController@contact_us_customer_store');
//gmp_testbit


Route::get('/test', function(){
  return view('single-service');
});
