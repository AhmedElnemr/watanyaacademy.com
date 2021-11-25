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


// Route::group(
// [
// 	'prefix' => LaravelLocalization::setLocale(),
// 	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
//    'namespace' => 'Website'
// ], function(){
////


Route::group(['namespace' => 'Website'], function () {

    config(['auth.defaults.guard' => 'web']);

    Route::get('/','HomeController@index');


    Route::get('team_work','PageController@team_work');

/* open courses */
    Route::get('courses','PageController@courses');
    Route::get('course_details/{id}','PageController@course_details');
/* open courses */

    Route::get('team-member/{id}','PageController@teamMember');


/* courses */
    Route::get('courses-by-level/{level_id}','PageController@courses_by_level');
/* courses */


/* activity */
    Route::get('activities-by-activity-department/{activity_department_id}','PageController@activities_by_activity_department');
    Route::get('activity-detail/{activity_id}','PageController@activity_detail');
/* activity */


/* site_text */
    Route::get('site-text','PageController@site_text');
    Route::get('word-of-prestent','PageController@wordOfPrestent');
/* site_text */


    /*=== register ===*/
    Route::post('register','ActionController@register');
    /*=== register ===*/



    Route::get('how_to_study','PageController@how_to_study');
    Route::get('how_to_subscribe','PageController@how_to_subscribe');
    Route::get('news','PageController@news');
    Route::get('contact_us','PageController@contact_us');
    Route::post('send_contact','ActionController@send_contact');
    Route::get('register-with-academy','PageController@register');



    Route::group(['middleware' => ['auth']], function () {



        Route::get('logout','WebAuth@logout');//logout action

    });




});





//Clear route cache:
Route::get('/clear_cache', function() {
//    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    return 'cache cleared';
});
