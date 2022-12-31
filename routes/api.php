<?php

use App\Http\Controllers\API\APIshowController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
*   here i make route group and make it authenticate by api from middleware in RouteServiceProivder prefix 
* and make route from method get for my route and you can show data in the browser by json 
* but setup exetension json viewer
* and you can use  postman for tasks by this link :localhost:8000/api/get-api-show
* and for route users by this link :localhost:8000/api/get-api-show
*and here i use auth and api for remember to prevent anyone to access api or data of website expected users & admins
*/
// Route::group(['middleware' => 'auth' ,'api']


//here api without login to easy use for postman by api as only prefix & middleware
Route::group(['middleware' => 'api'] , function () {

    Route::get('get-api-show', [APIshowController::Class , 'get_task_fun' ])->name('api_tasks');
    Route::get('get-api-users', [APIshowController::Class , 'get_user_fun' ])->name('api_users');

});