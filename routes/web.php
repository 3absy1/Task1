<?php

use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//***************************************   Users   ************************************************************

Route::get('Users', function () {
    return view('users.users',[
        'users' => User::all()
    ]);
});
//--------edit--------
Route::get('{usersID}/edit2',[UserController::class ,'show']);
Route::put('{usersID}/update2', [UserController::class,'update']);
//--------delete--------
Route::get('{usersID}/delete2', [UserController::class,'destroy']);
//--------create--------
Route::get('create2',[UserController::class ,'index']);
Route::get('add2', [UserController::class,'create']);

//***************************************   Sign in    ************************************************************

Route::post('Login',[SignInController::class,'store']);
Route::get('Login',[SignInController::class,'show']);


//***************************************   Sign Up    ************************************************************

Route::post('SignUp',[SignUpController::class,'create']);
Route::get('SignUp',[SignUpController::class,'show']);


