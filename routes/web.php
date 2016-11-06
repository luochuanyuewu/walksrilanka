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

use App\Article;
use App\Category;

Route::get('/', function () {
    $packages = Article::latest()->where('category_id', 1)->take(3)->get();
    $places = Article::latest()->where('category_id',2)->take(6)->get();
//    return $packages;
    return view('frontend.index', compact('packages','places'));
});

Route::get('aboutsrilanka', function () {
    return view('frontend.aboutSriLanka');
});

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('contacters/{SelectedPackage?}', ['as' => 'frontend.contacters', 'uses' => 'PageController@ContacterIndex']);

    Route::get('packages', ['as' => 'frontend.packages', 'uses' => 'PageController@PackageIndex']);

    Route::get('places', ['as' => 'frontend.places', 'uses' => 'PageController@PlaceIndex']);

    Route::get('activities', ['as' => 'frontend.activities', 'uses' => 'PageController@ActivityIndex']);

    Route::get('foods', ['as' => 'frontend.foods', 'uses' => 'PageController@FoodIndex']);

    Route::get('infos', ['as' => 'frontend.infos', 'uses' => 'PageController@InfoIndex']);

    Route::get('show/{id}', ['as' => 'frontend.show', 'uses' => 'PageController@ArticleShow']);
});


Route::post('packageRequest',['as'=>'request.store','uses'=>'Backend\PackageController@store']);
Route::post('messageFeedback',['as'=>'feedback.store','uses'=>'Backend\MessageController@store']);



//需要登录后才能访问的界面
Route::group(['prefix' => 'backend', 'namespace' => 'Backend', 'middleware' => ['IsLogin']], function () {

    //后台主页路由
    Route::get('/', ['as' => 'backend.index', function () {
        $categories = Category::all();

        return view('backend.index', compact('categories'));
    }]);

    //登出路由
    Route::get('logout', ['as' => 'backend.logout', 'uses' => 'BackendLoginController@Logout']);

    //联系人资源
    Route::resource('contacter', 'ContacterController');

    //文章资源
    Route::resource('article', 'ArticleController');

    //图片资源
    Route::resource('picture', 'PictureController');

    //套餐资源
    Route::resource('package','PackageController');

    //反馈资源
    Route::resource('message','MessageController');



});


//后台登录路由
Route::get('login', ['prefix' => 'backend', 'as' => 'backend.login', 'uses' => 'Backend\BackendLoginController@Index']);
Route::post('login', ['prefix' => 'backend', 'as' => 'backend.login', 'uses' => 'Backend\BackendLoginController@Login']);


