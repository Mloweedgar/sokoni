@extends('layouts.app')
@section('content')

	<!---content area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h4><strong>Product</strong></h4>
			</div>
			<div class="col-sm-6">
				<ul class="nav nav-pills pull-right">
					<li><a href="">Advertise</a></li>
					<li><a href="">report product</a></li>
					<li><a href="">share</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div style="border-bottom: solid 1px #ddd; margin-top: 3px; margin-bottom: 10px;"></div>
			</div>
		</div>
		<div class="row">
						<div class="col-sm-1">
							<ul class="img-indicator">
								<li data-target="#product" data-slide-to="0" class="active"><img src="photos/reebook.png" class="img-responsive"></li>
								<li data-target="#product" data-slide-to="1"><img src="photos/reebook.png" class="img-responsive"></li>
								<li data-target="#product" data-slide-to="2"><img src="photos/reebook.png" class="img-responsive"></li>
								<li data-target="#product" data-slide-to="3"><img src="photos/reebook.png" class="img-responsive"></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<div id="product" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner pic">
									<div class="item active">
											<img src="photos/reebook.png" class="img-thumbnail img-rounded" height="600px" width="100%">
									</div>
									<div class="item">
										<img src="photos/reebook.png" class="img-thumbnail img-rounded" height="600px" width="100%">
									</div>
									<div class="item">
										<img src="photos/reebook.png" class="img-thumbnail img-rounded" height="600px" width="100%">
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<ul class="list-unstyled">
								<li>
									<p>
										Price<br/>
										<strong style="font-size: 15px; text-decoration: line-through;">TSH&nbsp;3000000/= </strong>
										<strong style="font-size: 17px;">TSH&nbsp;2500000/=</strong>
									</p>
								</li>
								<li>
									<p>
										Quantity:&nbsp;
										<input type="number" min="1" max="20" name="quantity" class="form-control" style="width: 60px;">&nbsp;<small>20 item left</small>
									</p>
								</li>
								<li><p>{{rating(4)}}</p></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<div class="app-product-shop center-block">
								<p>Product from</p>
								<h4>Shop Name</h4>
								<i class="fa fa-eye fa-3x"></i>
								<p>Reviews <span class="badge">123</span></p>
								<p>{{rating(4)}}</p>
								<p><a href="shop.html" class="btn btn-primary btn-lg app-btn">Visit Shop</a></p>
							</div>
						</div>

		</div>
		<div class="row">
			<div class="col-sm-12">
				<ul class="nav nav-tabs app-tabs">
					<li class="active"><a href="#product-details" data-toggle="tab">Product details</a></li>
					<li><a href="#feedback" data-toggle="tab">Feedback <span class="badge">123</span></a></li>
					<li><a href="#delivery" data-toggle="tab">Delivery</a></li>
				</ul>
				<div class="tab-content app-tab-content">
					<div id="product-details" class="tab-pane fade in active">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit animid est laborum.</p>
					</div>
					<div id="feedback" class="tab-pane fade">

					</div>
					<div id="delivery" class="tab-pane fade">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit animid est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
