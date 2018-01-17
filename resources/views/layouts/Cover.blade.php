<!DOCTYPE html>
<html>
<head>
	<title>Cover</title>
</head>
<body>
		 
<link rel="stylesheet" type="text/css" href="{{ asset('BS/examples/cover/cover.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('BS/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('BS/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('BS/css/bootstrap-theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('BS/css/bootstrap-theme.min.css')}}">
	@include('template.cover')
	@yield('konten')<br>
	@include('template.footer')
</body>
</html>