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
					<li><a href="{{ route('faq') }}">FAQ</a></li>
				</ul>
			</div>
			<div class="pull-right">
				<h2>FAQ</h2>
			</div>
		</div>
	</div>
</div>

<div class="commontop">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="faq">
					<h5>FAQ</h5>
					<hr />
					<div class="panel-group" id="accordion">
						<div class="panel panel-default active">
							<div class="panel-heading">
								<a data-toggle="collapse" href="#collapse1" role="button" aria-expanded="true" aria-controls="collapse1"><h4 class="panel-title">
								What payment options are available?  <i class="fa fa-angle-down" aria-hidden="true"></i></h4>
								</a>
							</div>
							<div id="collapse1" class="panel-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed. Curabitur non augue enim. Sed efficitur semper elit, eget gravida est scelerisque ut. Curabitur non ex lobortis ligula auctor dignissim vel in est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vel rutrum tellus, vitae hendrerit libero. Morbi posuere augue at egestas cursus. Curabitur ut leo malesuada nibh facilisis semper vel non justo.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a data-toggle="collapse" href="#collapse2" role="button" aria-expanded="true" aria-controls="collapse2"><h4 class="panel-title"> How much is the shipping? <i class="fa fa-angle-right" aria-hidden="true"></i></h4>
								</a>
							</div>
							<div id="collapse2" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed. Curabitur non augue enim. Sed efficitur semper elit, eget gravida est scelerisque ut. Curabitur non ex lobortis ligula auctor dignissim vel in est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vel rutrum tellus, vitae hendrerit libero. Morbi posuere augue at egestas cursus. Curabitur ut leo malesuada nibh facilisis semper vel non justo.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a data-toggle="collapse" href="#collapse3" role="button" aria-expanded="true" aria-controls="collapse3"><h4 class="panel-title">Can I change/cancel an order? <i class="fa fa-angle-right" aria-hidden="true"></i>
								</h4></a>
							</div>
							<div id="collapse3" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed. Curabitur non augue enim. Sed efficitur semper elit, eget gravida est scelerisque ut. Curabitur non ex lobortis ligula auctor dignissim vel in est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vel rutrum tellus, vitae hendrerit libero. Morbi posuere augue at egestas cursus. Curabitur ut leo malesuada nibh facilisis semper vel non justo.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a data-toggle="collapse" href="#collapse4" role="button" aria-expanded="true" aria-controls="collapse4"><h4 class="panel-title"> I have not received an order confirmation? <i class="fa fa-angle-right" aria-hidden="true"></i></h4></a>
							</div>
							<div id="collapse4" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed. Curabitur non augue enim. Sed efficitur semper elit, eget gravida est scelerisque ut. Curabitur non ex lobortis ligula auctor dignissim vel in est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vel rutrum tellus, vitae hendrerit libero. Morbi posuere augue at egestas cursus. Curabitur ut leo malesuada nibh facilisis semper vel non justo.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a data-toggle="collapse" href="#collapse5" role="button" aria-expanded="true" aria-controls="collapse5"><h4 class="panel-title">How do I apply for a job? <i class="fa fa-angle-right" aria-hidden="true"></i></h4></a>
							</div>
							<div id="collapse5" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed. Curabitur non augue enim. Sed efficitur semper elit, eget gravida est scelerisque ut. Curabitur non ex lobortis ligula auctor dignissim vel in est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vel rutrum tellus, vitae hendrerit libero. Morbi posuere augue at egestas cursus. Curabitur ut leo malesuada nibh facilisis semper vel non justo.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<a data-toggle="collapse" href="#collapse6" role="button" aria-expanded="true" aria-controls="collapse6"><h4 class="panel-title">Can I have a coupon code please? <i class="fa fa-angle-right" aria-hidden="true"></i>
								</h4></a>
							</div>
							<div id="collapse6" class="panel-collapse collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed. Curabitur non augue enim. Sed efficitur semper elit, eget gravida est scelerisque ut. Curabitur non ex lobortis ligula auctor dignissim vel in est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vel rutrum tellus, vitae hendrerit libero. Morbi posuere augue at egestas cursus. Curabitur ut leo malesuada nibh facilisis semper vel non justo.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('assets.footer')
