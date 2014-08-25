<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

/*Route::get('/blade',function(){
	return View::make('index', array('name' => 'tung'));
});*/

/*Route::get('/blade', function()
{
	return View::make('index',array('name'=>'tung'));
});*/


Route::group(array('prefix'=>'check'),function(){
	Route::post('check-username',function(){
		if(User::check_username(Input::get('username'))){
			return 'true';
		}else{
			return 'false';
		}
	});
	Route::post('check-email',function(){
		if(User::check_email(Input::get('email'))){
			return 'true';
		}else{
			return 'false';
		}
	});
});

Route::get('/login',function(){
	return View::make('login');
});
Route::post('/login',function(){
	if(User::check_login(Input::get('user_input'),Input::get('password'))){
		return Redirect::to('editprofile');
	}
});


Route::get('/register',function(){
	return View::make('register');
});

Route::post('/register',function(){
	$rules = array(
		"username"=>"required|min:3",
		"password"=>"required|min:6",
		"email"=>"required|email"
		);
	if(!Validator::make(Input::all(),$rules)->fails()){
		$user = new User();
		$user->userName = Input::get('username');
		$user->userPass = Input::get('password');
		$user->email = Input::get('email');
		$user->save();
		Session::put('register_success',Input::get('username'). ' đã đăng ký thành công!');
		return Redirect::to('login');
	}else{
		return "Đăng ký không thành công. Vui lòng đăng ký lại";
	}
});

Route::get('/editprofile',function(){
	return View::make('editProfile');
});