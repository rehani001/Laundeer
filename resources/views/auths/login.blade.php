<!DOCTYPE html>
<html lang="en">
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

    <style>
		body{
			font-family: sans-serif;
		}
		.login-box{
			padding: 40px 30px 40px 30px;
			position: absolute;
			transform: translate(-60%, 50%);
			left: 50%;
			top: 40%;
			box-shadow: 8px 7px 25px #ccc;
			border-radius: 4%;
		}

		.input{
			padding: 10px;
		}
		
		select{
			cursor: pointer;
			width: 100%;
		}

		.mgtop{
			margin-top: 20px;
		}

		.btn{
			padding: 10px 20px;
			cursor: pointer;
			border: none;
		}
		
		.btn-grey{
			background-color: #ccc;
			transition: 0.4s;
			color: #555;
		}

		.btn-grey:hover{
			background-color: #ccc;
			color: #ccc;
		}

		.title{
			text-align: center;
		}

		.title-login{
			font-size: 20px;
		}

	</style>
</head>
<body>

<!-- Blog Hero Section Begin -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                   <div class="login-box">
						<div class="title">
							<h2 class="title-login">Login Laundry</h2>
						</div>
						<form action="/postlogin" method="POST">
							{{csrf_field()}}
								<input type="username" name="username" placeholder="Masukan Username" required class="input"><br><br>
									
								<input type="Password" name="password" placeholder="Masukan Password" class="input"><br><br>

							<button class="btn btn-grey">Login</button>
						</form>
						<br>
						@if(Session::has('fail'))
							{{Session::get('fail')}}
						@endif
					</div>
                </div>
            </div>
        </div>
        <div class="blog__hero__pic set-bg" data-setbg="{{asset('asset/img/blog/details/details-hero.jpg')}}"></div>
    </section>
    <!-- Blog Hero Section End -->

<!-- Js Plugins -->
	    <script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
	    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	    <script src="{{asset('asset/js/jquery.slicknav.js')}}"></script>
	    <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
	    <script src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>
