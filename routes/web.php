<?php

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
    return view('welcome');
});
Route::get("/capt", "Controller@MakeCaptcha");
Route::get('/user_add', function() {
    $user = new App\Repositoreis\User\User();
    $user->name = 'admin';
    $user->phone = '123456';
    $user->email = '421037083@qq.com';
    $user->password = \Illuminate\Support\Facades\Hash::make('sb123.++');
    $user->save();
});

Route::get('/login', 'TestController@login');
