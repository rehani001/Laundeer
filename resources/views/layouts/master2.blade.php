<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LAUNDEER | SMK Negeri 2 Sukabumi</title>

	<!-- Content 2 -->
    <link rel="stylesheet" href="{{asset('asset\bootstrap\css\bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('asset\bootstrap\css\bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset\bootstrap\css\bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('asset\bootstrap\css\bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset\bootstrap\css\bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('asset\bootstrap\css\bootstrap-reboot.min.css')}}">
</head>
<body>
	
	@include('layouts.includes._navbar')
	
	<div class="container">
	@yield('content2')
	</div>
</body>
</html>