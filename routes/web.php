<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('contact', ['as' => 'frontend.contact', function () {

    $contacters = App\Contacter::all();
    return view('frontend.contacter.index', compact('contacters'));
}]);


Route::group(['prefix' => 'backend', 'middleware' => ['IsLogin']], function () {

    //后台主页路由
    Route::get('/', ['as' => 'backend.index', function () {
        return view('backend.index');
    }]);

    Route::get('logout', ['as' => 'backend.logout', 'uses' => 'BackendLoginController@Logout']);

});


Route::group(['prefix' => 'backend'], function () {

//后台登陆路由
    Route::get('login', ['as' => 'backend.login', function () {
        return view('backend.login');
    }]);

    Route::post('login', ['as' => 'backend.login', 'uses' => 'BackendLoginController@Login']);


});

