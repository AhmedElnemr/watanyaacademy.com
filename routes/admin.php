<?php

// Route::group(
// [
// 	'prefix' => LaravelLocalization::setLocale(),
// 	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
// ], function(){
//


    Route::get('power', 'Admin\AdminAuth@login');

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {


            Config::set('auth.defines', 'admin');
             app()->setLocale('ar');



            //================ Auth ================
//            Route::get('login', 'AdminAuth@login');
            Route::post('power', 'AdminAuth@dologin');
            Route::get('forgot/password', 'AdminAuth@forgot_password');
            Route::post('forgot/password', 'AdminAuth@forgot_password_post');
            Route::get('reset/password/{token}', 'AdminAuth@reset_password');
            Route::post('reset/password/{token}', 'AdminAuth@reset_password_final');


        //********************* after login *********************
            Route::group(['middleware' => 'admin:admin'], function () {


                Route::get('/', function () {
                        return view('admin.index');
                    });



               //================ settings ================
                Route::get('settings', 'SettingController@setting_page');
                Route::post('operate_page', 'SettingController@operate_page')->name('operate_page');;
                Route::post('settings', 'SettingController@send_settings')->name('send_settings');




                //================ admin ================
                Route::resource('admin', 'AdminController');
                Route::delete('admin/destroy/all', 'AdminController@multi_delete')->name('delete_all_admin');


                //================ contact ================
                Route::resource('contact', 'ContactController');
                Route::delete('contact/destroy/all', 'ContactController@multi_delete')->name('delete_all_contact');


                //================ site_text ================
                Route::resource('site_text', 'SiteTextController');
                Route::delete('site_text/destroy/all', 'SiteTextController@multi_delete')->name('delete_all_site_text');


                //================ banner ================
                Route::resource('banner', 'BannerController');
                Route::delete('banner/destroy/all', 'BannerController@multi_delete')->name('delete_all_banner');


                //================== level ==================
                Route::resource('level', 'LevelController');
                Route::delete('level/destroy/all', 'LevelController@multi_delete')->name('delete_all_level');


                //================== course ==================
                Route::resource('course', 'CourseController');
                Route::delete('course/destroy/all', 'CourseController@multi_delete')->name('delete_all_course');


                //================ open_course ===============
                Route::resource('open_course', 'OpenCourseController');
                Route::delete('open_course/destroy/all', 'OpenCourseController@multi_delete')->name('delete_all_open_course');


                //================== team ==================
                Route::resource('team', 'TeamController');
                Route::delete('team/destroy/all', 'TeamController@multi_delete')->name('delete_all_team');


                //================== new ==================
                Route::resource('new', 'NewController');
                Route::delete('new/destroy/all', 'NewController@multi_delete')->name('delete_all_new');


                //================== activity_department ==================
                Route::resource('activity_department', 'ActivityDepartmentController');
                Route::delete('activity_department/destroy/all', 'ActivityDepartmentController@multi_delete')->name('delete_all_activity_department');


                //================== activity ==================
                Route::resource('activity', 'ActivityController');
                Route::delete('activity/destroy/all', 'ActivityController@multi_delete')->name('delete_all_activity');
                Route::post('activity/delete_img', 'ActivityController@delete_img')->name('delete_img_activity');


                //================== client ==================
                Route::resource('client', 'ClientController');
                Route::delete('client/destroy/all', 'ClientController@multi_delete')->name('delete_all_client');


                //================== client ==================
                Route::resource('register', 'RegisterController');
                Route::delete('register/destroy/all', 'RegisterController@multi_delete')->name('delete_all_register');



                Route::any('logout', 'AdminAuth@logout');

                });

        });

	//
	// });
