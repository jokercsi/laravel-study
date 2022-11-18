<?php
// backslash이다
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/curriculum', function () {
    return view('curriculum');
});

// test 확인
Route::get('/hello_world1', fn () => 'hello_world');

// view 사용하기
Route::get('/hello_world2', fn () => view('hello_world2'));

// view 사용하기
Route::get('/hello_world3', fn () => view('hello_world3', ['name' => 'Jibin', 'course' => 'Laravel course']));


// 世界の時間
Route::get('/world-time', [UtilityController::class, 'worldTime']);

// おみくじ
Route::get('/omikuji', [GameController::class, 'omikuji']);

// モンティ・ホール問題
Route::get('/montyhall', [GameController::class, 'montyhall']);

// request
Route::get('/form', [RequestSampleController::class, 'form']);
Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);