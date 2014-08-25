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
	<script type="text/javascript">

	//register 
	$('#register').validate({
		rules:{
			username:{
				required: true, 
				minlength: 3,
				remote:{
					url: '{{Asset("check/check-username")}}',
					type: 'post'
				}
			},
			password:{
				required: true,
				minlength: 6 
			},
			password_confirmation:{
				equalTo: "#password"
			},
			email:{
				required: true,
				email: true,
				remote:{
					url:'{{Asset("check/check-email")}}',
					type:'post'
				}
			}
		},
		messages:{
			username:{
				required: 'Vui lòng nhập user name',
				minlength: 'User name có độ dài ít nhất 3 ký tự',
				remote: 'user name đã tồn tại'
			},
			password:{
				required: 'Vui lòng nhập password',
				minlength: 'Password có độ dài ít nhất 6 ký tự'
			},
			password_confirmation:{
				equalTo: 'Password không trùng khớp'
			},
			email:{
				required: 'Vui lòng nhập email',
				email: 'Email không đúng',
				remote: 'email đã tồn tại'
			}
		}
	}); 

</script>
@endsection
