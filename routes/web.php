<?php

use App\Http\Controllers\DetailController;
use App\Models\Detail;
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

Route::get('/', [DetailController::class,'index']);

Route::get('/test',function(){
    Detail::create([
        'user_id' => 1,
        'slack_username' => 'Ifeanyichukwu John',
        'backend' => true,
        'age' => 23,
        'bio' => 'I am a fullstack web developer',
    ]);
});
