<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use Carbon\Carbon;
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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/posts',[PostsController::class,'index']);


/**Crud Application */

//Route::resource('/posts/create',PostsController::class,['except'=>['create']]);
//Route::resource('/posts',PostsController::class);

// Route::group(['middleware' => 'web'], function(){

//     Route::resource('/posts', PostsController::class);
// });
