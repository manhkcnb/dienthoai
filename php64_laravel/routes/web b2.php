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

Route::get('/', function () {
    return view('welcome');
});
//
//php artisan make:middleware Hello
Route::get('middleware', function () {
    echo "<h1>Hello world</h1>";
})->middleware("hello");
// php artisan make:controller HelloController
use App\Http\Controllers\HelloController;
// url :/controller/test1
Route::get('controller/test1',[HelloController::class,'index']);// goij hàm index trong class hellocontroller
// truyeen biens tren url
Route::get('controller/test2/{bien1}/{bien2}',[HelloController::class,'index2']);
Route::get('controller/form1',[HelloController::class,'form1']);
Route::post('controller/form1-post',[HelloController::class,'form1Post']);
Route::get('controller/form2',[HelloController::class,'form2']);
Route::post('controller/form2-post',[HelloController::class,'form2Post']);
Route::get('controller/validation',[HelloController::class,'validation']);
Route::post('controller/validation-post',[HelloController::class,'validationPost']);
// include view khac vao view hientai
Route::get('include', function () {
    return view('site.trang-chu');
});

