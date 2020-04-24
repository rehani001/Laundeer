<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Deerhost Template">
    <meta name="keywords" content="Deerhost, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAUNDEER | SMK Negeri 2 Sukabumi</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css">

    
</head>

<body>

		@include('layouts.includes._header')
		
		@yield('content')

    <!-- Js Plugins -->
    <script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/js/main.js')}}"></script>

</body>

</html>