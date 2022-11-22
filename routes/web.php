<?php
// backslash이다
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HiLowController;
use App\Http\Controllers\PhotoController;

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

// Request
Route::get('/form', [RequestSampleController::class, 'form']);
Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);


/** 
 * Route parameter (URL이름을 조작하기)
 * example)
 * http://localhost/users/2 
 * http://localhost/products/mik/2022?page=1
*/
Route::get('/users/{id}', [RequestSampleController::class, 'profile'])->name('profile'); //이름 붙이기
Route::get('/products/{catagory}/{year}', [RequestSampleController::class, 'productsArchive']);

// 이름 붙인거 확인하기
Route::get('/route-link', [RequestSampleController::class, 'routeLink']);

Route::get('/login', [RequestSampleController::class, 'loginForm']);
Route::post('/login', [RequestSampleController::class, 'login'])->name('login');

// event
// only로 사용하는 resource만 선택하기
Route::resource('/events', EventController::class)->only(['index', 'create', 'store']);


// ハイローゲーム
Route::get('/hi-low', [HiLowController::class, 'index'])->name('hi-low');
Route::post('/hi-low', [HiLowController::class, 'result']);

// 파일 업로드 관리
Route::resource('/photos', PhotoController::class)->only(['create','store']);