@include('assets.header')
@include('assets.dash_top')
					<div class="inner-setting">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default active">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h4 class="panel-title">Contact Details  <i class="fa fa-angle-right" aria-hidden="true"></i></h4>
									</a>
								</div>
								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body">
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-4">
											<form class="form-horizontal" method="post">
												<div class="form-group">
													<div class="col-sm-12">
														<input name="name" value="" id="input-name" class="form-control" placeholder="Name" type="text">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<select class="selectpicker form-control bs-select-hidden" name="location">
															<option value="1">Country</option>
															<option value="0">India</option>
															<option value="0">Pakistan</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<select class="selectpicker form-control bs-select-hidden" name="location">
															<option value="1">State</option>
															<option value="0">Punjab</option>
															<option value="0">Haryana</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<input name="city" value="" id="input-city" class="form-control" placeholder="City" type="text">
													</div>
												</div>
												<div class="buttons">
													<input class="btn btn-primary" value="Save" type="submit">
												</div>
											</form>
										</div>
										<div class="col-sm-4"></div>
									</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h4 class="panel-title"> Phone Number <i class="fa fa-angle-right" aria-hidden="true"></i></h4>
									</a>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-4">
											<form class="form-horizontal" method="post">
												<div class="form-group">
													<div class="col-sm-12">
														<input name="phone" value="" id="input-phone" class="form-control" placeholder="Enter Phone Number" type="text">
													</div>
												</div>
												<div class="buttons">
													<input class="btn btn-primary" value="Save" type="submit">
												</div>
											</form>
										</div>
										<div class="col-sm-4"></div>
									</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h4 class="panel-title">Change Password <i class="fa fa-angle-right" aria-hidden="true"></i>
									</h4></a>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-4">
											<form class="form-horizontal" method="post">
												<div class="form-group">
													<div class="col-sm-12">
														<input name="password" value="" id="input-password" class="form-control" placeholder="Enter old password" type="text">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<input name="password1" value="" id="input-password1" class="form-control" placeholder="Enter new password" type="text">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<input name="password2" value="" id="input-password2" class="form-control" placeholder="Repeat password" type="text">
													</div>
												</div>
												<div class="buttons">
													<input class="btn btn-primary" value="Save" type="submit">
												</div>
											</form>
										</div>
										<div class="col-sm-4"></div>
									</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><h4 class="panel-title"> Change Email <i class="fa fa-angle-right" aria-hidden="true"></i></h4></a>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
									<div class="row">
										<div class="col-sm-4"></div>
										<div class="col-sm-4">
											<form class="form-horizontal" method="post">
												<div class="form-group">
													<div class="col-sm-12">
														<input name="mail" value="" id="input-mail" class="form-control" placeholder="Enter new email" type="text">
													</div>
												</div>
												<div class="buttons">
													<input class="btn btn-primary" value="Save" type="submit">
												</div>
											</form>
										</div>
										<div class="col-sm-4"></div>
									</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><h4 class="panel-title">Email Notification <i class="fa fa-angle-right" aria-hidden="true"></i></h4></a>
								</div>
								<div id="collapse5" class="panel-collapse collapse">
									<div class="panel-body">
										<form class="form-horizontal" method="post">
											<div class="form-group">
												<div class="col-sm-12">
													<div class="checked">
														<div class="check">
															<input type="checkbox" name="credit" class="checkclass"/>Yes, I want to receive newsletter.
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium dictum diam vel laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dictum justo nec lacus porta congue. Phasellus convallis ut urna a lobortis. Vestibulum bibendum quam ligula, ac fringilla mi efficitur sed.</p>
														</div>
														<div class="check">
															<input type="checkbox" name="credit" class="checkclass"/>Yes, I want to receive email notification of messages.
														</div>
														<div class="check">
															<input type="checkbox" name="credit" class="checkclass"/>Yes, I want to receive email alerts about new listing.
														</div>
													</div>
												</div>
												<div class="buttons">
													<input class="btn btn-primary" value="Save" type="submit">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><h4 class="panel-title">Delete Account <i class="fa fa-angle-right" aria-hidden="true"></i>
									</h4></a>
								</div>
								<div id="collapse6" class="panel-collapse collapse">
									<div class="panel-body">
										<form class="form-horizontal" method="post">
											<div class="buttons text-center">
												<input class="btn btn-primary" value="Delete Account" type="submit">
											</div>
										</form>
									</div>
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
