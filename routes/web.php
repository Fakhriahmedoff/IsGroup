<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\OrdersController;
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
Route::get('/getlocations',[PagesController::class,'Locations'] )->name("Locations");

Route::get('/', function () {
    return redirect('/en/main-page');
});
Route::get('/{locale}/lang', function ($locale) {
    App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::post('/payment',[OrdersController::class,'postOrder'] )->name("payment");
Route::get('/getcardata',[OrdersController::class,'getCarData'] )->name("getCarData");
Route::get('/getbycategory',[OrdersController::class,'getCarByCategory'] )->name("getCarByCategory");
Route::get('/getcar',[OrdersController::class,'getCar'] )->name("getCar");
// Route::get('/{slug}',[PagesController::class,'getPage'] )->name("getPagess");



$lang = Request::segment(1);
if($lang == 'az'){
    Route::group(
        [
            'prefix' => 'az',
            'where' => ['locale' => '[a-zA-Z]{2}'],
            'middleware' => 'setlocale'
        ], function () {
            Route::get('/{slug}/{class?}/{carslug?}',[PagesController::class,'getPage'] );
    });
}
if($lang == 'en'){
Route::group(
    [
        'prefix' => 'en',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'
    ], function () {
        Route::get('/{slug}/{class?}/{carslug?}',[PagesController::class,'getPage'] );
});
}
if($lang == 'ru'){
Route::group(
    [
        'prefix' => 'ru',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'
    ], function () {
        Route::get('/{slug}/{class?}/{carslug?}',[PagesController::class,'getPage'] );
});
}

Route::group(['prefix' => 'admin'], function () {
    Route::get('shifarishler', [OrdersController::class,'getOrders'])->name('getorders');
    Voyager::routes();
});
