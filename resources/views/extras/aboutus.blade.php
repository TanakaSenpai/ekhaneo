@include('assets.header')
<div class="topimage">
	<img src="images/bck_bg.jpg" class="img-fluid" alt="image" title="image" />
</div>
<div class="bread-crumb">
	<div class="container">
		<div class="matter">
			<div class="pull-left">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('aboutus') }}">About us</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>About us</h2>
			</div>
		</div>
	</div>
</div>

<div class="commontop">
	<div class="container">
		<div class="row about">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h1>About us</h1>
				<hr>
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12">
				<img src="images/about/05.jpg" class="img-fluid" alt="image" title="image" />
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<h2>Introduction</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id euismod. Nam sollicitudin mi quis orci lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu.</p>
				<h2>How we can help</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id euismod. Nam sollicitudin mi quis orci lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id euismod. Nam sollicitudin mi quis orci lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu.</p>
			</div>
		</div>
		<div class="row team">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h1>Our Team</h1>
				<hr>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="box">
					<img src="images/about/01.jpg" class="img-fluid" alt="image" title="image" />
					<div class="caption">
						<h4>Senpai</h4>
						<p>Founder / CEO</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="box">
					<img src="images/about/01.jpg" class="img-fluid" alt="image" title="image" />
					<div class="caption">
						<h4>Senpai</h4>
						<p>Founder / CEO</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="box">
					<img src="images/about/01.jpg" class="img-fluid" alt="image" title="image" />
					<div class="caption">
						<h4>Senpai</h4>
						<p>Founder / CEO</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="box">
					<img src="images/about/01.jpg" class="img-fluid" alt="image" title="image" />
					<div class="caption">
						<h4>Senpai</h4>
						<p>Founder / CEO</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="abouticon">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="box">
					<img src="images/about/icon1.png" class="img-fluid" alt="icon" title="icon" />
					<h4>764</h4>
					<p>Cup of Coffee</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="box">
					<img src="images/about/icon2.png" class="img-fluid" alt="icon" title="icon" />
					<h4>12,544</h4>
					<p>Happy Users</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="box">
					<img src="images/about/icon3.png" class="img-fluid" alt="icon" title="icon" />
					<h4>16,786</h4>
					<p>Ads Posts</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="box">
					<img src="images/about/icon4.png" class="img-fluid" alt="icon" title="icon" />
					<h4>19.985</h4>
					<p>Total Users</p>
				</div>
			</div>
		</div>
	</div>
</div>

@include('assets.footer')
