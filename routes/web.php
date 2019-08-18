<?php
use App\User;
use Illuminate\Http\Request;

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
Route::resource('home','HomeController');

// Route::resource('register','UserController');
Route::get('register','UserController@create');

Route::post('register','UserController@store');

Route::get('login',function(){
    return view('user/login');
});
Route::post('login',function(Request $request){
    if(User::check_login($request->user_input,md5(sha1($request->password))))
        return 'Đăng nhập thành công';
    else return 'Đăng nhập thất bại';
});