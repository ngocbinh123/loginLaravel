<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{Asset('assets/css/common.css')}}">
	<script type="text/javascript" src="{{Asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/jquery-validate/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{Asset('assets/js/myValidate.js')}}"></script>
</head>
<body>
	<div class="content container">@yield('content')</div>
</body>
</html>