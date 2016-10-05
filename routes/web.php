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

Route::get('contacters', ['as' => 'frontend.contacters', 'uses' => 'PageController@ContacterIndex']);

Route::get('packages', ['as' => 'frontend.packages', 'uses' => 'PageController@PackageIndex']);

Route::get('places', ['as' => 'frontend.places', 'uses' => 'PageController@PlaceIndex']);

Route::get('activities', ['as' => 'frontend.activities', 'uses' => 'PageController@ActivityIndex']);

Route::get('foods', ['as' => 'frontend.foods', 'uses' => 'PageController@FoodIndex']);

Route::get('infos', ['as' => 'frontend.infos', 'uses' => 'PageController@InfoIndex']);

Route::get('show/{id}',['as'=>'frontend.show','uses'=>'PageController@ArticleShow']);


//需要登录后才能访问的界面
Route::group(['prefix' => 'backend', 'namespace' => 'Backend', 'middleware' => ['IsLogin']], function () {

    //后台主页路由
    Route::get('/', ['as' => 'backend.index', function () {
        return view('backend.index');
    }]);

    //登出路由
    Route::get('logout', ['as' => 'backend.logout', 'uses' => 'BackendLoginController@Logout']);

    //联系人资源
    Route::resource('contacter', 'ContacterController');

    //文章资源
    Route::resource('article', 'ArticleController');


});


//后台登录路由
Route::get('login', ['prefix' => 'backend', 'as' => 'backend.login', 'uses' => 'Backend\BackendLoginController@Index']);
Route::post('login', ['prefix' => 'backend', 'as' => 'backend.login', 'uses' => 'Backend\BackendLoginController@Login']);


//Route::group(['prefix' => 'api', 'middleware' => 'IsLogin'], function () {
//
//
//    Route::get('settings', ['as' => 'site.settings', function () {
//        $settings = Setting::all();
//        Setting::set('Site.Description', '你拥有无比的好奇心,想要体验生活中最大的乐趣吗?那么欢迎大家来到斯里兰卡。在这里,名胜古迹,美丽的风景,激流壮阔的海浪,舒适的的气候和天气,特色的美食等等应有尽有。在这里你什么都能看到。。而我们,则希望给你们带来最美好的生活体验。');
//        Setting::set('Site.Keywords', 'sanbusililanka, 旅游, 斯里兰卡, 散步, 旅行社, 美丽的地方, travel sri lanka, 锡兰, 旅游斯里兰卡,散步斯里兰卡, 宾馆, 风景');
//        Setting::save();
//        return Setting::get('Site.Description');
//
//    }]);
//});

