<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\indexController;
use App\Http\Controllers\Practicecontroller;
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
// Route::get('/index',[indexController::class,'index']);
Route::get('/index','indexController@index');
Route::get('/products','indexController@product');
Route::get('/product-details/{id}','indexController@detail')->name('product-details');
Route::get('/checkout/{id}','indexController@checkout')->name('checkout');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/register', 'indexController@register');
Route::get('/practice','Practicecontroller@index');
