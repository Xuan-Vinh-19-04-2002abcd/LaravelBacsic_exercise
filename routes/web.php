<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Processform;
use Symfony\Component\Process\Process;
use App\Http\Controllers\ProcessformRequest;
use App\Http\Controllers\FormTicketController;

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

// Route::get('/', function () {
//     return view('test1');
// });
// Route::group(['prefix' => 'MyGroup'], function () {
//     Route::get('User1', function () {
//        return view('test2');
//     });
//     Route::get('/User2', function () {
//        return view('test3');
//     }); 
// });`
// Route::get('/{id}',[UserController::class, 'hello'])
// ->where([
//     'id' => '.+'
// ]);
// tạo route cho formrequest để làm bài tập dòng 36 37
// Route::get('/',[ProcessformRequest::class, 'getAdd']);
// Route::post('/', [ProcessformRequest::class, 'postAdd']);

// Route::post('/them_san_pham', [ProcessformRequest::class, 'postAddUseValidator']);
Route::get('/',[FormTicketController::class, 'getForm']);
Route::post('/', [FormTicketController::class, 'postForm']);
