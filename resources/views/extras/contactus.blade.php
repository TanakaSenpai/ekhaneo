@include('assets.header')
<div class="topimage">
	<img src="{{ asset('images/bck_bg.jpg') }}" class="img-fluid" alt="image" title="image" />
</div>
<div class="bread-crumb">
	<div class="container">
		<div class="matter">
			<div class="pull-left">
				<ul class="list-inline">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('contactus') }}">Contact us</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>Contact us</h2>
			</div>
		</div>
	</div>
</div>
<div class="contactus">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="map">
					<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=signboard&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>
			</div>
			<div class="col-md-9 col-xs-12">
				<form method="post" enctype="multipart/form-data" class="form-horizontal">
					<h5>Send us an email</h5>
					<hr />
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 mb-3">
							<div class="form-group">
								<input name="name" value="" id="input-name" class="form-control" placeholder="Name" type="text" required>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 mb-3">
							<div class="form-group">
								<input name="email" value="" id="input-email" class="form-control" placeholder="Your email address" type="text" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 mb-3">
							<div class="form-group">
								<input name="name" value="" id="input-subject" class="form-control" placeholder="Subject" type="text">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<input name="phone" value="" id="input-phone" class="form-control" placeholder="Your phone number" type="text">
							</div>
						</div>
					</div>
					<div class="form-group">
							<textarea name="enquiry" id="input-enquiry" class="form-control">Write message</textarea>
					</div>
					<div class="buttons">
						<input class="btn btn-primary" value="Send" type="submit">
					</div>
				</form>
			</div>
			<div class="col-md-3 col-xs-12">
				<div class="address mar-b">
					<h3>Address</h3>
					<p>Narayanganj, Dhaka, Bangladesh</p>
				</div>
				<div class="address">
					<h3>Contact Info</h3>
					<ul class="list-unstyled">
						<li><span>Email : </span><p><a href="#">programmarsenpai@gmail.com</a></p></li>
						<li><span>Phone : </span><p>+880 1633769745</p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@include('assets.footer')
