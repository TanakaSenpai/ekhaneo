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
					<li><a href="{{ route('register') }}">Register</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>Register</h2>
			</div>
		</div>
	</div>
</div>

<div class="commontop">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12 login padd0">
			<div class="row">
                			<div class="col-md-6 col-sm-6 col-xs-12">
				<h1>Register here</h1>
                @if ($errors->any())
                    <div class="alert alert-danger errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				<form method="post" action="{{ route('reg') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
						<i class="la la-user"></i><input type="text" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control" />
					</div>
					<div class="form-group">
						<i class="la la-user"></i><input type="text" name="username" value="{{ old('username') }}" placeholder="Username" id="input-username" class="form-control" />
					</div>
					<div class="form-group">
						<i class="la la-envelope"></i><input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" id="input-email" class="form-control" />
					</div>
                    <div class="form-group">
                        <i class="la la-map-marker"></i>
                        <select class="form-select form-control text-dark divi rounded-pill" name="division">
                            <option selected disabled value="0">Select Division</option>
                            @foreach ($divisions as $division)
                                <option class="text-dark" value="{{ $division->divisions }}">{{ $division->divisions }}</option>
                            @endforeach
                        </select>
							</div>
                    <div class="form-group">
						<i class="la la-phone"></i><input type="tel" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone number" id="input-email" class="form-control" />
					</div>
					<div class="form-group">
						<i class="la la-unlock"></i><input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                        <label class="mx-2" style="font-size: .7rem;">Password must not be less than 5 characters.</label>
					</div>
					<div class="form-group">
						<i class="la la-unlock"></i><input type="password" name="password_confirmation" value="" placeholder="Repeat Your Password" id="input-repeat" class="form-control" />
					</div>
					<input type="submit" value="Register Now" class="btn btn-primary btn-block" />
				</form>
			</div>
                <div class="col-md-6 col-sm-6 col-xs-12 bor social">
                    <img class="img-fluid" id="logo" src="{{ asset('images/logo.png') }}" alt="logo" title="logo" />
                    <div class="donot">Have an account already? <a href="{{ route('login') }}">Login </a>and start posting in less than a minute.
                    </div>
                    <div class="or">
                        <span>or</span>
                        <hr/>
                    </div>
                    <h2>Login Via Social Accounts</h2>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/" target="_blank" class="fb"><i class="fa fa-facebook"></i> Login Via Facebook</a></li>
                        <li><a href="https://twitter.com/" target="_blank" class="tw"><i class="fa fa-twitter"></i> Login Via Twitter</a></li>
                        <li><a href="https://plus.google.com/" target="_blank" class="gp"><i class="fa fa-google"></i> Login Via Google</a></li>
                    </ul>
                </div>

			</div>
		</div>
	</div>
</div>
<!-- faq end here -->
@include('assets.footer')
