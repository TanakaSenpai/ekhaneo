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
					<li><a href="{{ route('login') }}">Login</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>Login</h2>
			</div>
		</div>
	</div>
</div>

<div class="commontop">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12 login padd0">
			<div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
				<h1>Login</h1>
                @if ($errors->any())
                    <div class="alert alert-danger errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				<form method="post" action="{{ route('loginuser') }}" enctype="multipart/form-data">
                    @csrf
					<div class="form-group">
						<i class="la la-envelope-o"></i><input type="email" name="email" value="" placeholder="Email" id="input-email" class="form-control" />
					</div>
					<div class="form-group">
						<i class="la la-unlock"></i><input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
					</div>
					<div class="links">
						<input type="checkbox" class="rounded" name="remember"> Remember me
						<a href="" class="pull-right">Forgot Password?</a>
					</div>
                    @if (session()->has('error'))
                        <div class="alert alert-danger rounded-pill m-2 text-danger text-center" style="padding: .1rem 0;">{{ session()->get('error') }}</div>
                    @endif
                    @if (session()->has('login'))
                        <div class="alert alert-success text-secondary m-2 mt-1 rounded-pill text-center" style="padding: .1rem 0;">{{ session()->get('login') }}</div>
                    @endif
                    @if (session()->has('logto'))
                        <div class="alert alert-warning text-danger m-2 mt-1 rounded-pill text-center px-1 px-md-0" style="padding: .1rem 0;">{{ session()->get('logto') }}</div>
                    @endif
                    <button type="submit" class="btn btn-primary btn-block" >Login</button>
				</form>
			</div>
                <div class="col-md-6 col-sm-6 col-xs-12 bor social">
                    <img class="img-fluid" id="logo" src="{{ asset('images/logo.png') }}" alt="logo" title="logo" />
                    <div class="donot">Don't have an account? <a href="{{ route('register') }}">Create your account</a>
                    </div>
                    <p> less than a minute</p>
                    <div class="or">
                        <span>or</span>
                        <hr/>
                    </div>
                    <h2>Login Via Social Accounts</h2>
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/" target="_blank" class="fb"><i class="fa fa-facebook"></i> Login Via Facebook</a></li>
                        <li><a href="https://twitter.com/" target="_blank" class="tw"><i class="fa fa-twitter"></i> Login Via Twitter</a></li>
                        <li><a href="https://plus.google.com/" target="_blank" class="gp"><i class="fa fa-google-plus"></i> Login Via Google+</a></li>
                    </ul>
                </div>

			</div>
		</div>
	</div>
</div>
@include('assets.footer')
