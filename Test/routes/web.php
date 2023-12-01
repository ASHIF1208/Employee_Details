<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// Route::get('/', function () {
//     return view('employee');
// });

Route::get('/dept', function () {
    return view('department');
});

Route::get('/desig', function () {
    return view('designation');
}); 

Route::post('/empdetailsShow',[TestController::class,'employeeDetails']);
Route::get('/',[TestController::class,'employee']);
Route::get('/Show',[TestController::class,'employeeForm']);
Route::get('/update/{id}',[TestController::class,'updated']);
Route::post('/updating/{id}',[TestController::class,'updating']);
Route::get('/delete/{id}',[TestController::class,'deleteEmp']);

Route::post('/adddept',[TestController::class,'dept']);
Route::post('/adddesign',[TestController::class,'design']);

Route::get('/dptFormShow',[TestController::class,'departmentForm']);
Route::get('/desFormShow',[TestController::class,'designationForm']);
