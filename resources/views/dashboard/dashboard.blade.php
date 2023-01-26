@include('assets.header')
@include('assets.dash_top')
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed. Curabitur non augue enim. Sed efficitur semper elit, eget gravida est scelerisque ut. </p>
						<p><a>Learn How It Work </a> -  Watch a short video that shows you have classifiedspot works.</p>
						<p><a>Get Help </a> -  View our help section and FAQ to get started on classifiedspot.</p>
					</div>
					<ul class="list-inline icons">
						<li>
							<div class="img"><img src="{{ asset('images/dashboard/cardboard.png') }}" alt="image" title="image" /></div>
							<p><a href="{{ route('my_ads') }}">My Ads</a></p></li>
						<li>
							<div class="img"><img src="{{ asset('images/dashboard/messages.png') }}" alt="image" title="image" /></div><p><a href="{{ route('messages') }}">Messages</a></p></li>
						<li><div class="img"><img src="{{ asset('images/dashboard/like.png') }}" alt="image" title="image" /></div><p><a href="{{ route('fav_ads') }}">Favourite Ads</a></p></li>
						<li><div class="img"><img src="{{ asset('images/dashboard/settings.png') }}" alt="image" title="image" /></div><p><a href="{{ route('settings') }}">Setting</a></p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@include('assets.footer')
