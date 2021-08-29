<?php

use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthorController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\Setup\StudentClassController;
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
/*
 * https://localhost/
 * https://localhost/api/
 * */

Route::get("login",function (){
    return view("RegLog.login");
})->name("login");

Route::get("register",function (){
    return view("RegLog.register");
});

Route::get("main",function (){
        return view("pageLoad.main",['url'=>route('mainPage'),'method'=>'GET','location'=>'end','kind'=>1]);
})->name("main");


Route::get('/', function () {
    return view('welcome');
});




//Route::get("test",function (){
//    $author  = Author::where("remember_token",$_COOKIE['Authorization'])->first();
//    $author->remember_token = "";
//    return $author;
//});
