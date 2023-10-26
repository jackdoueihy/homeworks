<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Models\student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/insert_static_data", [StudentController::class, "insert_static_data"]);

Route::post("/dynamic_first_method", [StudentController::class, "insert_student"]);

Route::post("/method_2",[StudentController::class,"insert_student_method_2"]);

Route::post("/update_student/{id}",[StudentController::class,"update_student"]);

Route::delete("/delete_student/{id}",[StudentController::class,"delete_student"]);

Route::get("/get_all_students", [StudentController::class, "getAllStudents"]);

Route::get("/get_by_age/{name}/{age}",[StudentController::class,"getStudentByNameAndAge"]);