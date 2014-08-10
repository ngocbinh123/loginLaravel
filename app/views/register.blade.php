@extends('main')

@section('title')
	Register
@endsection

@section('content')
	<div class='titleForm'>
		<h3>REGISTER</h3>
	</div>
	<form method="post" action="{{Asset('register')}}" id='register'>
		<div class='userName'>
			<p>User name:</p>
			<input type="text" name='username' id='username' placeholder='userName'>
		</div>
		<div class='userPass'>
			<p>Password:</p>
			<div>
				<input type="password" name='password' id='password' placeholder='userPass'>
			</div>
			<p>Password Confirmation:</p>
			<div>
				<input type="password" name='password_comfirmation' id='password_confirmation' placeholder='Password_confirmation'>
			</div>
		</div>
		<div class='email'>
			<p>Email:</p>
			<input type="text" name='email' id='email' placeholder='userName'>
		</div>
		<div>
			<button class='btn btn-lg btn-primary' id='btnRegister'>Register</button>
		</div>
	</form>
@endsection