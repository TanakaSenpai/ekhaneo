<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 matter" id="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="logo" title="logo" /></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda repellat vero sint voluptatibus nobis? Sit labore earum suscipit odit ullam vel ratione quibusdam, rerum accusantium voluptatum quisquam ducimus doloribus aperiam debitis error hic quo incidunt velit maxime laboriosam pariatur dolor?</p>

            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 info">
                <h5>Usefull Links</h5>
				<ul class="list-inline links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('aboutus') }}">About</a></li>
					<li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('all_ads') }}">All Ads</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
					<li><a href="{{ route('contactus') }}">Help & Contact us</a></li>
                    <li><a href="{{ route('terms_and_conditions') }}">Terms & Conditions</a></li>
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
					<p>© 2023 <span>ekhaneo.com</span>. All rights reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap4/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap5/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/dist/js/bootstrap-select.js') }}"></script>
<script src="{{ asset('js/holder.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/owlinternal.js') }}"></script>
<script src="{{ asset('js/internal.js') }}"></script>
<script src="{{ asset('js/switcher.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115890069-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115890069-6');
</script>

</body>
</html>
