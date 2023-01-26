@include('assets.header')
<div class="commontop">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="add">
					<div class="addtop">
						<h3>Submit a Free Ad</h3>
					</div>
					<form method="post" enctype="multipart/form-data" class="form-horizontal addform">
						<div class="form-group">
							<div class="col-sm-12 col-xs-12">
								<label>Add Title*</label>
								<span class="pull-right">70 char Left</span>
								<input name="title" value="" id="input-title" class="form-control"  type="text">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 col-xs-12">
								<label>Select Category*</label>
								<ul class="nav nav-tabs list-inline">
									<li class="active">
										<a href="#vehicle" data-toggle="tab" aria-expanded="true"><img src="images/vehicle/icons8-motorcycle.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#mobile" data-toggle="tab" aria-expanded="false"><img src="images/mobile/smartphone-tablet.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#electonic" data-toggle="tab" aria-expanded="false"><img src="images/electronics/globe-bulb.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#real" data-toggle="tab" aria-expanded="false"><img src="images/real-estate/building.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#fashion" data-toggle="tab" aria-expanded="false"><img src="images/fashion/trainers.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#furniture" data-toggle="tab" aria-expanded="false"><img src="images/furniture/icon-chair.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#jobs" data-toggle="tab" aria-expanded="false"><img src="images/jobs/icon-briefcase.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#service" data-toggle="tab" aria-expanded="false"><img src="images/services/maintenance.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#pet" data-toggle="tab" aria-expanded="false"><img src="images/pets/dog.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#education" data-toggle="tab" aria-expanded="false"><img src="images/education/icon-book.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#matrimony" data-toggle="tab" aria-expanded="false"><img src="images/matrimony/man-woman.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
									<li class="">
										<a href="#notes" data-toggle="tab" aria-expanded="false"><img src="images/notes/icon-noney.png" alt="icon" title="icon" class="img-fluid"></a>
									</li>
								</ul>
							</div>
						</div>
						<div  class="tab-content">
							<div class="tab-pane active" id="vehicle">
								<div class="form-group">
									<div class="col-sm-5 col-xs-12">
										<label>Price*</label>
										<input name="price" value="" id="input-price" class="form-control"  type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7 col-xs-12">
										<label>Model*</label>
										<input name="model" value="" id="input-model" class="form-control"  type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7 col-xs-12">
										<label>Year*</label>
										<input name="year" value="" id="input-year" class="form-control"  type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7 col-xs-12">
										<label>KM Driven*</label>
										<input name="driven" value="" id="input-driven" class="form-control"  type="text">
									</div>
								</div>
							</div>
							<div class="tab-pane" id="mobile">
								<div class="form-group">
									<div class="col-sm-5 col-xs-12">
										<label>Price*</label>
										<input name="price1" value="" id="input-price1" class="form-control"  type="text">
									</div>
								</div>
							</div>
							<div class="tab-pane" id="electonic">

							</div>
							<div class="tab-pane" id="real">
								<div class="form-group">
									<div class="col-sm-12 col-xs-12">
										<label>Options*</label>
										<div class="checked">
											<div class="check">
												<input type="checkbox" name="credit" class="checkclass"/>For Sale
											</div>
											<div class="check">
												<input type="checkbox" name="credit" class="checkclass"/>For Rent
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5 col-xs-12">
										<label>Price*</label>
										<input name="price2" value="" id="input-price2" class="form-control"  type="text">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5 col-xs-12">
										<label>Furnished*</label>
										<select class="selectpicker form-control bs-select-hidden" name="location">
											<option value="1">Choose</option>
											<option value="0">Chair</option>
											<option value="0">Table</option>
											<option value="0">Bed</option>
											<option value="0">Almirah</option>
											<option value="0">Dinning Table</option>
											<option value="0">Sofa</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-5 col-xs-12">
										<label>BHK*</label>
										<select class="selectpicker form-control bs-select-hidden" name="location">
											<option value="1">Choose</option>
											<option value="0">Chair</option>
											<option value="0">Table</option>
											<option value="0">Bed</option>
											<option value="0">Almirah</option>
											<option value="0">Dinning Table</option>
											<option value="0">Sofa</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7 col-xs-12 square">
										<label>Square feet*</label>
										<input name="feet" value="" id="input-feet" class="form-control"  type="text">
										<span>ft2</span>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="fashion">

							</div>
							<div class="tab-pane" id="furniture">

							</div>
							<div class="tab-pane" id="jobs">
								<div class="form-group">
									<div class="col-sm-12 col-xs-12">
										<label>Type of Job*</label>
										<div class="checked">
											<div class="check">
												<input type="checkbox" name="credit" class="checkclass"/>Offering Job
											</div>
											<div class="check">
												<input type="checkbox" name="credit" class="checkclass"/>Seeking Job
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="service">

							</div>
							<div class="tab-pane" id="pet">

							</div>
							<div class="tab-pane" id="education">

							</div>
							<div class="tab-pane" id="matrimony">

							</div>
							<div class="tab-pane" id="notes">

							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 col-xs-12">
								<label>Description*</label>
								<span class="pull-right">5000 char Left</span>
								<textarea name="enquiry" id="input-enquiry" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 col-xs-12">
								<label>Add Photos*</label>
								<div class="photo">
									<ul class="list-inline">
										<li><a href="#"><i class="la la-plus"></i></a></li>
										<li><a href="#"><i class="la la-plus"></i></a></li>
										<li><a href="#"><i class="la la-plus"></i></a></li>
										<li><a href="#"><i class="la la-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-7 col-xs-12">
								<label>Name*</label>
								<input name="name" value="" id="input-name" class="form-control"  type="text">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-7 col-xs-12">
								<label>Phone Number*</label>
								<input name="phone" value="" id="input-phone" class="form-control"  type="text">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-7 col-xs-12">
								<label>Enter City*</label>
								<input name="city" value="" id="input-city" class="form-control"  type="text">
							</div>
						</div>
						<div class="buttons">
							<input class="btn btn-primary" value="Submit" type="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@include('assets.footer')
