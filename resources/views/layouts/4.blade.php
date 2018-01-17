<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
		 
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css')}}">
	@include('template.HeadGallery')
	@yield('konten')<br>
	@include('template.footer')
</body>
</html>