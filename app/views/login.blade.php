@extends('main')

@section('title')
	login
@endsection

@section('content')
	<div class='titleForm'>
		<h3>SIGN IN</h3>
	</div>
	<form method="post" action="{{Asset('login')}}" id='login'>
		<div class='userName'>
			<p>User name:</p>
			<input type="text" name='username' id='username' placeholder='userName'>
		</div>
		<div class='userPass'>
			<p>Password:</p>
			<div>
				<input type="password" name='password' id='password' placeholder='userPass'>
			</div>
		</div>
		<div>
			<button class='btn btn-lg btn-primary' id='btnLogin'>Login</button>
		</div>
	</form>
@endsection
