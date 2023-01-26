<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Jobs Category</title>
<!-- Bootstrap stylesheet -->
<link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet"> 
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/style_orange.css" title="style_orange" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="css/ele-style.css" rel="stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- line-awesome -->
<link href="line-awesome/css/line-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="js/owl-carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--top start here -->
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-xs-12">
				<ul class="list-inline icon">
					<li>
						<!--language code start here-->
						<form  method="post" enctype="multipart/form-data" id="language">
							<div class="btn-group">
								<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
									<span class="text"><i class="la la-language"></i>English</span> <i class="la la-caret-down"></i>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="javascript:;"><img src="images/flag.jpg" alt="english" title="english" /> English</a></li>
								</ul>
							</div>
						</form>
						<!--language code end here-->
					</li>
					<li><a href="login.html"><i class="la la-plus-square"></i> <span>Login</span></a></li>
					<li><a href="register.html"><i class="la la-key"></i> <span>Register</span></a></li>
				</ul>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="topnav responsive" id="myTopnav">
					<ul class="list-inline">
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="index.html">Homepage</a></li>
										
									</ul>
								</div>
							</div>
						</li>
						<li><a href="aboutus.html">About</a></li>
						<li class="dropdown" ><a data-toggle="dropdown" href="#">Blog</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="blog.html">Our Blog</a></li>
										<li><a href="blogdetail.html">Blog Detail</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="contactus.html">Contact</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="price_plan.html">Pricing Plans</a></li>
										<li><a href="all_ads.html"> All Ads</a></li>
										<li><a href="ads_single_view.html">Ads Single View</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="terms_and_conditions.html">Term & Conditions</a></li>
						<li><a href="javascript:void(0);" class="icons" onclick="myFunction()">&#9776;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--top end here -->

<!-- header start here-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div id="logo">
					<a href="index.html"><img class="img-fluid logochange" src="images/logo.png" alt="logo" title="logo" /></a>
				</div>
			</div>
				
			<div class="col-md-7 col-sm-7 col-xs-12">
				<form class="form-horizontal category" method="post">
					<div class="row">
						<div class="col-sm-3 paddright">
							<div class="form-group">
								<select class="selectpicker form-control bs-select-hidden" name="location">
									<option value="1">Select City</option>
									<option value="0">Ludhiana</option>
									<option value="0">Jalandhar</option>
									<option value="0">Moga</option>
									<option value="0">Ambala</option>
									<option value="0">Amritsar</option>
									<option value="0">Delhi</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 paddright">
							<div class="form-group">
								<select class="selectpicker form-control bs-select-hidden" name="location">
									<option value="1">Select Category</option>
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
						<div class="col-sm-6 search">
							<div class="form-group">
								<input name="s" value="" class="form-control" placeholder="Enter Keyword" type="text">
								<button type="submit" value="submit" class="btn"><i class="icon_search" aria-hidden="true"></i></button>
							</div>
						</div>
                    </div>
				</form>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-12 center">
				<button class="btn-primary btn-block" type="button" onclick="location.href='add_listing.html'"> <i class="la la-edit"></i>Add listing</button>
			</div>
		</div>
	</div>
</header>
<!-- header end here -->

<!-- breadcrumb end here -->
<div class="bread-crumb">
	<div class="container">
		<div class="matter">
			<div class="pull-left">
				<ul class="list-inline">
					<li><a href="index.html">Home</a></li>
					<li><a href="jobs_category.html">Jobs Category</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>Jobs Category</h2>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb end here -->


<!-- content start here -->
<div class="maincategory">
	<div class="container"> 
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
				<div class="left">
					<div class="category">
						<h1>Categories</h1>
						<ul class="list-unstyled">
							<li><a href="vehicle_category.html"><img src="images/blog/motorcycle.png" class="img-fluid" alt="image" title="image"> Vehicle</a></li>
							<li><a href="mobile_category.html"><img src="images/blog/tablet.png" class="img-fluid" alt="image" title="image"> Mobiles</a></li>
							<li><a href="electonics_category.html"><img src="images/blog/globe-bulb.png" class="img-fluid" alt="image" title="image"> Electonics</a></li>
							<li><a href="real_estate_category.html"><img src="images/blog/building.png" class="img-fluid" alt="image" title="image"> Real Estate</a></li>
							<li><a href="fashion_category.html"><img src="images/blog/trainer.png" class="img-fluid" alt="image" title="image"> Fashion</a></li>
							<li><a href="furniture_category.html"><img src="images/blog/chair.png" class="img-fluid" alt="image" title="image"> Furniture</a></li>
							<li><a href="jobs_category.html"><img src="images/blog/briefcase.png" class="img-fluid" alt="image" title="image"> Jobs</a></li>
							<li><a href="services_category.html"><img src="images/blog/maintenance.png" class="img-fluid" alt="image" title="image"> Services</a></li>
							<li><a href="pets_category.html"><img src="images/blog/dog.png" class="img-fluid" alt="image" title="image"> Pets</a></li>
							<li><a href="education_category.html"><img src="images/blog/books.png" class="img-fluid" alt="image" title="image"> Education</a></li>
							<li><a href="matrimony_category.html"><img src="images/blog/man-woman.png" class="img-fluid" alt="image" title="image"> Matrimony</a></li>
							<li><a href="note_coins_category.html"><img src="images/blog/paper-money.png" class="img-fluid" alt="image" title="image"> Notes and Coins</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-10 col-sm-9 col-md-9 padd0 col-xs-12 catebox">
				<div class="row">
					<div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12 cols">
							<div class="product-thumb">
								<div class="image">
									<a href="ads_single_view.html"><img src="images/jobs/01.jpg" alt="image" title="image" class="img-fluid"></a>
									<div class="onhover"> £3,000.00</div>
								</div>
								<div class="caption">
									<h4><a href="ads_single_view.html">Ads post title here</a></h4>
									<p class="des">Category : Vehicle</p>
									<ul class="list-unstyled">
										<li><i class="la la-map-marker"></i> Ludhiana, Punjab, India</li>
										<li><i class="la la-clock-o"></i> 09/03/2020</li>
									</ul>
									
								</div>
							</div>
						</div>
						
						<div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12 cols">
							<div class="product-thumb">
								<div class="image">
									<a href="ads_single_view.html"><img src="images/jobs/01.jpg" alt="image" title="image" class="img-fluid"></a>
									<div class="onhover"> £3,000.00</div>
								</div>
								<div class="caption">
									<h4><a href="ads_single_view.html">Ads post title here</a></h4>
									<p class="des">Category : Vehicle</p>
									<ul class="list-unstyled">
										<li><i class="la la-map-marker"></i> Ludhiana, Punjab, India</li>
										<li><i class="la la-clock-o"></i> 09/03/2020</li>
									</ul>
									
								</div>
							</div>
						</div>
						
						<div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12 cols">
							<div class="product-thumb">
								<div class="image">
									<a href="ads_single_view.html"><img src="images/jobs/01.jpg" alt="image" title="image" class="img-fluid"></a>
									<div class="onhover"> £3,000.00</div>
								</div>
								<div class="caption">
									<h4><a href="ads_single_view.html">Ads post title here</a></h4>
									<p class="des">Category : Vehicle</p>
									<ul class="list-unstyled">
										<li><i class="la la-map-marker"></i> Ludhiana, Punjab, India</li>
										<li><i class="la la-clock-o"></i> 09/03/2020</li>
									</ul>
									
								</div>
							</div>
						</div>
						
						<div class="product-layout product-grid col-lg-3 col-md-4 col-sm-6 col-xs-12 cols">
							<div class="product-thumb">
								<div class="image">
									<a href="ads_single_view.html"><img src="images/jobs/01.jpg" alt="image" title="image" class="img-fluid"></a>
									<div class="onhover"> £3,000.00</div>
								</div>
								<div class="caption">
									<h4><a href="ads_single_view.html">Ads post title here</a></h4>
									<p class="des">Category : Vehicle</p>
									<ul class="list-unstyled">
										<li><i class="la la-map-marker"></i> Ludhiana, Punjab, India</li>
										<li><i class="la la-clock-o"></i> 09/03/2020</li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>	
					
					<div class="text-center icon">
						<i class="la la-spinner fa-spin"></i>
					</div>
					
				</div>	
				
			</div>
			
		</div>
		
	</div>
</div>
<!-- content end here -->


<!-- footer start here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 matter">
                <img src="images/logo.png" class="img-fluid logochange" alt="logo" title="logo" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id euismod. Nam sollicitudin mi quis orci lobortis feugiat.</p>
				
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 info">
                <h5>Usefull Links</h5>
				<ul class="list-inline links">
                    <li><a href="index.html">Home</a></li>
					<li><a href="price_plan.html">Pricing Plans</a></li>
                    <li><a href="aboutus.html">About</a></li>
					 <li><a href="faq.html">FAQ</a></li>
                    <li><a href="blog.html">Blog</a></li>
					<li><a href="all_ads.html">All Ads</a></li>
                    <li><a href="login.html">Login</a></li>
					<li><a href="contactus.html">Help & Contact us</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="terms_and_conditions.html">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h5>Contact with us</h5>
				<ul class="list-inline social">
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://plus.google.com/" target="_blank"><i class="social_googleplus" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/" target="_blank"><i class="social_youtube"></i></a></li>
                    <li><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
	<div class="powered">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center">
					<p>© 2017 <span>Classifiedspot</span>. All rights reserved. Theme by <span>TMD Studio</span></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer end here -->
		
<!-- jquery -->
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="bootstrap4/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="js/dist/js/bootstrap-select.js"></script>
<!-- owlcarousel js -->
<script src="js/holder.min.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="js/owlinternal.js"></script>
<script src="js/internal.js"></script>
<script src="js/switcher.js"></script>
</body>
</html>
