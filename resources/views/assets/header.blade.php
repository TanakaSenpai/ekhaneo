<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ekhaneo.com</title>
<link href="{{ asset('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/ele-style.css') }}" rel="stylesheet" type="text/css"/>
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('js/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('js/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="top">
	<div class="container">
		<div class="row">
            @if (Auth::check())
            <div class="col-sm-5 col-xs-12">
				<ul class="list-inline icon">
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu pr">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">My profile</a></li>
                        </ul>
                    </li>
					<li><a href="{{ route('logout') }}">Logout</a></li>
				</ul>
			</div>
            @else
			<div class="col-sm-5 col-xs-12">
				<ul class="list-inline icon">
					<li><a href="{{ route('login') }}"><i class="la la-plus-square"></i> <span>Login</span></a></li>
					<li><a href="{{ route('register') }}"><i class="la la-key"></i> <span>Register</span></a></li>
				</ul>
			</div>
            @endif
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="topnav responsive" id="myTopnav">
					<ul class="list-inline">
						<li class="dropdown"><a href="{{ route('home') }}">Home</a></li>
						<li><a href="{{ route('aboutus') }}">About us</a></li>
						<li><a href="{{ route('blog') }}">Blog</a></li>
						<li><a href="{{ route('contactus') }}">Contact us</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="{{ route('faq') }}">FAQ</a></li>
										<li><a href="{{ route('all_ads') }}"> All Ads</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="{{ route('terms_and_conditions') }}">Terms & Conditions</a></li>
						<li><a href="javascript:void(0);" class="icons" onclick="myFunction()">&#9776;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<header>
	<div class="container">
        <div class="row d-flex d-md-none justify-content-center">
			<div class="col-md-3 col-auto col-xs-12" style="margin-top: -6px; margin-bottom: -10px;">
				<div id="logo">
					<a href="{{ route('home') }}"><img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="logo" title="logo" /></a>
				</div>
			</div>
        </div>

		<div class="row">
			<div class="col-md-3 col-xs-12 d-none d-md-flex" style="margin-top: -6px; margin-bottom: -10px;">
				<div id="logo">
					<a href="{{ route('home') }}"><img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="logo" title="logo" /></a>
				</div>
			</div>

			<div class="col-md-7 col-sm-12 col-xs-12">
				<form class="form-horizontal category" method="post">
					<div class="row">
						<div class="col-sm-3 paddright">
							<div class="form-group">
								<select class="selectpicker form-control bs-select-hidden" name="district">
									<option value="0">Select Division</option>
									<option value="1">Dhaka</option>
									<option value="2">Barisal</option>
									<option value="3">Comilla</option>
									<option value="4">Rajshahi</option>
									<option value="5">Khulna</option>
									<option value="6">Chattogram</option>
									<option value="7">Sylhet</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4 paddright">
							<div class="form-group">
								<select class="selectpicker form-control bs-select-hidden" aria-label="Default select example" name="category">
									<option selected value="1">Select Category</option>
									<option value="0">Vehicle</option>
									<option value="0">Mobiles</option>
									<option value="0">Electonics</option>
									<option value="0">Real Estate</option>
									<option value="0">Fashion</option>
									<option value="0">Furniture</option>
									<option value="0">Jobs</option>
									<option value="0">Services</option>
									<option value="0">Pets</option>
									<option value="0">Education</option>
									<option value="0">Matrimony</option>
									<option value="0">Note and Coins</option>
								</select>
							</div>
						</div>
						<div class="col-sm-5 search">
							<div class="form-group">
								<input name="search" value="" class="form-control" placeholder="Enter Keyword" type="text">
								<button type="submit" value="submit" class="btn"><i class="icon_search" aria-hidden="true"></i></button>
							</div>
						</div>
                    </div>
				</form>
			</div>
			<div class="col-md-2 col-sm-12 col-xs-12 center">
				<button class="btn-primary btn-block fs-6" type="button" onclick="location.href='{{ route('add_post') }}'"> <i class="la la-edit fs-6"></i>Post Ad</button>
			</div>
		</div>
	</div>
</header>
