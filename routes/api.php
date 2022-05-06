<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewConnectionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/v1/getProductsList', [ProductsController::class, 'V1_GetProductsList']);

Route::post('/v1/NewConnection/create', [NewConnectionController::class, 'V1_create']);
Route::get('/v1/NewConnection/list', [NewConnectionController::class, 'V1_list']);
Route::post('/v1/NewConnection/details', [NewConnectionController::class, 'V1_details']);

Route::post('/v1/Customer/create', [EmployeeController::class, 'V1_create']);



//ADMIN SERVICES
Route::prefix('/v1/admin')->group(function () {
    
    //Employee Actions
    Route::post('/signup',[EmployeeController::class, 'signup_V1']);
    Route::get('/employeeList',[EmployeeController::class, 'employeeList_V1']);
    Route::get('/employeeList/{id}',[EmployeeController::class, 'employeeList_V1']);
    Route::post('/employeeUpdate',[EmployeeController::class, 'employeeUpdate_V1']);
    Route::post('/login',[EmployeeController::class, 'login_V1']);
    
    //Admin Account
    Route::get('/adminProfile/{id}',[EmployeeController::class, 'adminProfile_V1']);
    Route::post('/adminUpdate',[EmployeeController::class, 'adminUpdate_V1']);
    
    //Customer Actions
    Route::get('/customerList',[CustomerController::class, 'customerListV1']);
    Route::get('/customerList/{id}',[CustomerController::class, 'customerListV1']);
    
});




//Route::post('/v1/admin/signup', 'App\Http\Controllers\RegisterController@register');

//Route::prefix('v1/admin')->group(function () {
//    Route::post('/signup', 'EmployeeController@V1_signup');
//});
