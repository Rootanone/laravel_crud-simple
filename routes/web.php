<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\general1462100106;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[general1462100106::class,'home']);
Route::get('/product',[general1462100106::class,'product']);
Route::get('/about',[general1462100106::class,'about']);
