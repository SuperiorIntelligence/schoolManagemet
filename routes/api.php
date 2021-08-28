<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\AuthorController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\Setup\StudentClassController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//See User


//Route::get("main",function (){
////    return view("admin.index",["url"=>"","method"=>"","location"=>""]);
//    return view("pageLoad.main",['url'=>'mainPage','method'=>'GET','location'=>'end']);
//})->name("main");








//See User


Route::post("register",[AuthorController::class,"register"])->name('api.register');




Route::post("login",[AuthorController::class,"login"])->name("api.login");


Route::group(["middleware"=>"auth:api"],function (){

    Route::get("mainPage",[AuthorController::class,"mainPage"])->name("mainPage");
    Route::get("logout",[AuthorController::class,"logout"])->name("api.logout");


    //S User Management
    Route::prefix("user")->group(function (){
        Route::get("/view",[AuthorController::class,"userView"])->name("api.userview");
        Route::get("/add",[AuthorController::class,"userAdd"])->name("api.userAdd");
        Route::post("/store",[AuthorController::class,"userStore"])->name("api.userStore");
        Route::get("/edite/{id}",[AuthorController::class,"userEdite"])->name("api.editeUser");
        Route::post("/update/{id}",[AuthorController::class,"userUpdate"])->name("api.userUpdate");
        Route::get("/delete/{id}",[AuthorController::class,"userDelete"])->name("api.deleteUser");
    });

    //E
    //-------------------------------------------------

    //S User Profile and Change Password
    Route::prefix("profile")->group(function (){
        Route::get("/view",[ProfileController::class,"profileView"])->name("api.profileView");
        Route::post("/store/{id}",[ProfileController::class,"updateProfile"])->name("api.updateProfile");
        Route::get("/change/password",[ProfileController::class,"changePassword"])->name("api.changePassword");
        Route::post("/password",[ProfileController::class,"passwordUpdate"])->name("api.passwordUpdate");
    });
    //E
    //-------------------------------------------------

    //S Setups
    Route::prefix("setups")->group(function (){
                                                    //student class
        Route::get("/student/class/view",[StudentClassController::class,"studentClassView"])->name("api.studentClassView");
        Route::get("/student/class/add",[StudentClassController::class,"studentClassAdd"])->name("api.studentClassAdd");
        Route::post("/store/studentClass",[StudentClassController::class,"storeStudentClass"])->name("api.storeStudentClass");
        Route::get("/edite/studentaClass/{id}",[StudentClassController::class,"studentClassEdite"])->name("api.studentClassEdite");
        Route::post("/update/studentClass/{id}",[StudentClassController::class,"updateStudentClass"])->name("api.updateStudentClass");
        Route::get("/delete/studentaClass/{id}",[StudentClassController::class,"deleteStudentClass"])->name("api.deleteStudentClass");

    });
    //E
    //-------------------------------------------------




});

Route::middleware('auth:api')->get('/dashboard', function (Request $request) {
    return view("admin.index");
})->name('dashboard');
