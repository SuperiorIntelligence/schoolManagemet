<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\AuthorController;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\Setup\StudentClassController;
use App\Http\Controllers\api\Setup\StudentYearController;
use App\Http\Controllers\api\Setup\StudentGroupController;
use App\Http\Controllers\api\Setup\StudentShiftController;
use App\Http\Controllers\api\Setup\FeeCategoryController;
use App\Http\Controllers\api\Setup\FeeAmountController;
use App\Http\Controllers\api\Setup\ExamTypeController;
use App\Http\Controllers\api\Setup\SchoolSubjectController;
use App\Http\Controllers\api\Setup\AssignSubjectController;
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
        Route::get("/edit/{id}",[AuthorController::class,"userEdit"])->name("api.editUser");
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
                                                    //Student class
        Route::get("/student/class/view",[StudentClassController::class,"studentClassView"])->name("api.studentClassView");
        Route::get("/student/class/add",[StudentClassController::class,"studentClassAdd"])->name("api.studentClassAdd");
        Route::post("/store/studentClass",[StudentClassController::class,"storeStudentClass"])->name("api.storeStudentClass");
        Route::get("/edit/studentClass/{id}",[StudentClassController::class,"studentClassEdit"])->name("api.studentClassEdit");
        Route::post("/update/studentClass/{id}",[StudentClassController::class,"updateStudentClass"])->name("api.updateStudentClass");
        Route::get("/delete/studentClass/{id}",[StudentClassController::class,"deleteStudentClass"])->name("api.deleteStudentClass");

                                                    //Student Year
        Route::get("/student/year/view",[StudentYearController::class,"studentYearView"])->name("api.studentYearView");
        Route::get("/student/year/add",[StudentYearController::class,"studentYearAdd"])->name("api.studentYearAdd");
        Route::post("/store/studentYear",[StudentYearController::class,"storeStudentYear"])->name("api.storeStudentYear");
        Route::get("/edit/studentYear/{id}",[StudentYearController::class,"studentYearEdit"])->name("api.studentYearEdit");
        Route::post("/update/studentYear/{id}",[StudentYearController::class,"updateStudentYear"])->name("api.updateStudentYear");
        Route::get("/delete/studentYear/{id}",[StudentYearController::class,"deleteStudentYear"])->name("api.deleteStudentYear");

                                                    //Student Year
        Route::get("/student/group/view",[StudentGroupController::class,"studentGroupView"])->name("api.studentGroupView");
        Route::get("/student/group/add",[StudentGroupController::class,"studentGroupAdd"])->name("api.studentGroupAdd");
        Route::post("/store/studentGroup",[StudentGroupController::class,"storeStudentGroup"])->name("api.storeStudentGroup");
        Route::get("/edit/studentGroup/{id}",[StudentGroupController::class,"studentGroupEdit"])->name("api.studentGroupEdit");
        Route::post("/update/studentGroup/{id}",[StudentGroupController::class,"updateStudentGroup"])->name("api.updateStudentGroup");
        Route::get("/delete/studentGroup/{id}",[StudentGroupController::class,"deleteStudentGroup"])->name("api.deleteStudentGroup");

                                                    // Student Shift
        Route::get("/student/shift/view",[StudentShiftController::class,"studentShiftView"])->name("api.studentShiftView");
        Route::get("/student/shift/add",[StudentShiftController::class,"studentShiftAdd"])->name("api.studentShiftAdd");
        Route::post("/store/studentShift",[StudentShiftController::class,"storeStudentShift"])->name("api.storeStudentShift");
        Route::get("/edit/studentShift/{id}",[StudentShiftController::class,"studentShiftEdit"])->name("api.studentShiftEdit");
        Route::post("/update/studentShift/{id}",[StudentShiftController::class,"updateStudentShift"])->name("api.updateStudentShift");
        Route::get("/delete/studentShift/{id}",[StudentShiftController::class,"deleteStudentShift"])->name("api.deleteStudentShift");

                                                    // Fee Category
        Route::get("/fee/category/view",[FeeCategoryController::class,"feeCategoryView"])->name("api.feeCategoryView");
        Route::get("/student/fee/category/add",[FeeCategoryController::class,"feeCategoryAdd"])->name("api.feeCategoryAdd");
        Route::post("/store/fee/category",[FeeCategoryController::class,"storeFeeCategory"])->name("api.storeFeeCategory");
        Route::get("/edit/feeCategory/{id}",[FeeCategoryController::class,"feeCategoryEdit"])->name("api.feeCategoryEdit");
        Route::post("/update/feeCategory/{id}",[FeeCategoryController::class,"updateFeeCategory"])->name("api.updateFeeCategory");
        Route::get("/delete/feeCategory/{id}",[FeeCategoryController::class,"deleteFeeCategory"])->name("api.deleteFeeCategory");

                                                    // Fee Category Amount
        Route::get("/fee/amount/view",[FeeAmountController::class,"feeAmountView"])->name("api.feeAmountView");
        Route::get("/fee/amount/add",[FeeAmountController::class,"feeAmountAdd"])->name("api.feeAmountAdd");
        Route::post("/store/fee/amount",[FeeAmountController::class,"storeFeeAmount"])->name("api.storeFeeAmount");
        Route::get("/edit/feeAmount/{id}",[FeeAmountController::class,"feeAmountEdit"])->name("api.feeAmountEdit");
        Route::post("/update/feeAmount/{id}",[FeeAmountController::class,"updateFeeAmount"])->name("api.updateFeeAmount");
        Route::get("/details/feeCategory/{id}",[FeeAmountController::class,"detailsFeeCategory"])->name("api.detailsFeeCategory");

                                                    // Exam Type
        Route::get("/exam/type/view",[ExamTypeController::class,"ExamTypeView"])->name("api.ExamTypeView");
        Route::get("/exam/type/add",[ExamTypeController::class,"examTypeAdd"])->name("api.examTypeAdd");
        Route::post("/store/exam/type",[ExamTypeController::class,"storeExamType"])->name("api.storeExamType");
        Route::get("/edit/examType/{id}",[ExamTypeController::class,"examTypeEdit"])->name("api.examTypeEdit");
        Route::post("/update/examType/{id}",[ExamTypeController::class,"updateExamType"])->name("api.updateExamType");
        Route::get("/delete/examType/{id}",[ExamTypeController::class,"deleteExamType"])->name("api.deleteExamType");

                                                    // School Subject
        Route::get("/school/subject/view",[SchoolSubjectController::class,"schoolSubjectView"])->name("api.schoolSubjectView");
        Route::get("/school/subject/add",[SchoolSubjectController::class,"schoolSubjectAdd"])->name("api.schoolSubjectAdd");
        Route::post("/store/school/subject",[SchoolSubjectController::class,"storeSchoolSubject"])->name("api.storeSchoolSubject");
        Route::get("/edit/schoolSubject/{id}",[SchoolSubjectController::class,"schoolSubjectEdit"])->name("api.schoolSubjectEdit");
        Route::post("/update/schoolSubject/{id}",[SchoolSubjectController::class,"updateSchoolSubject"])->name("api.updateSchoolSubject");
        Route::get("/delete/schoolSubject/{id}",[SchoolSubjectController::class,"deleteSchoolSubject"])->name("api.deleteSchoolSubject");

                                                    // Assign Subject
        Route::get("/assign/subject/view",[AssignSubjectController::class,"assignSubjectView"])->name("api.assignSubjectView");
        Route::get("/assign/subject/add",[AssignSubjectController::class,"assignSubjectAdd"])->name("api.assignSubjectAdd");
        Route::post("/store/assign/subject",[AssignSubjectController::class,"storeAssignSubject"])->name("api.storeAssignSubject");
        Route::get("/edit/assignSubject/{id}",[AssignSubjectController::class,"assignSubjectEdit"])->name("api.assignSubjectEdit");
        Route::post("/update/assignSubject/{id}",[AssignSubjectController::class,"updateAssignSubject"])->name("api.updateAssignSubject");
        Route::get("/details/assignSubject/{id}",[AssignSubjectController::class,"detailsAssignSubject"])->name("api.detailsAssignSubject");
    });
    //E
    //-------------------------------------------------




});

Route::middleware('auth:api')->get('/dashboard', function (Request $request) {
    return view("admin.index");
})->name('dashboard');
