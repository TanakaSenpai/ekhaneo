<div class="topimage">
	<img src="images/bck_bg.jpg" class="img-fluid" alt="image" title="image">
</div>

<div class="commontop">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="dashboard">
					<div class="profile">
						<div class="col-sm-3 col-xs-12">
							<img class="img-fluid" src="{{ asset('images/dashboard/dp.png') }}" alt="image" title="image">
						</div>
						<div class="col-sm-9 col-xs-12 padd0">
							<h4>{{ auth()->user()->name }}</h4>
							<div class="common">
								<p class="des"><i class="la la-map-marker"></i> {{ auth()->user()->division }}, Bangladesh</p>
								<p class="des1">Account Created : {{ auth()->user()->created_at->diffForHumans() }}</p>
							</div>
							<ul class="list-inline">
								<li class="active"><a href="{{ route('dashboard') }}"><img src="{{ asset('images/dashboard/grid.png') }}" alt="image" title="image" /><p>Dashboard</p></a></li>
								<li ><a href="{{ route('my_ads') }}"><img src="{{ asset('images/dashboard/card.png') }}" alt="image" title="image"/><p>My Ads</p></a></li>
								<li ><a href="{{ route('fav_ads') }}"><img src="{{ asset('images/dashboard/heart.png') }}" alt="image" title="image"/><p>Favourite Ads</p></a></li>
								<li><a href="{{ route('messages') }}"><img src="{{ asset('images/dashboard/message.png') }}" alt="image" title="image"/><p>Messages</p></a></li>
								<li><a href="{{ route('settings') }}"><img src="{{ asset('images/dashboard/setting.png') }}" alt="image" title="image"/><p>Setting</p></a></li>
							</ul>
						</div>
					</div>
