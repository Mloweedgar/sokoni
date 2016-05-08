@extends('layouts.app')

@section('content')
@include('includes.layouts.search')

<!-- featured shop-->
<div class="container" style="margin-top: 40px;">
	<div class="row">
		<div class="col-sm-12">
			<div id="myCarousel" class="carousel slide app-carousel">
				<div class="carousel-inner app-shop-inner">
					@for($a = 1; $a <= 4; $a++)
						<div class="item{{$a == 1 ? ' active': ''}}">
							<div class="row">
								@for($b = 1; $b <= 4; $b++)
								<div class="col-sm-3">
									<div class="panel panel-default shop-panel">	
										<div class="panel-body text-center">
											<div class="shop-name-upper">
												<h4>{{strtoupper($shop_list[$a][$b]['shop_name'])}}</h4>
											</div>
											<div class="shop-img">
												<i class="fa fa-desktop fa-5x" aria-hidden="true"></i>
											</div>
											<div class="shop-name-lower">
												<h4>{{strtoupper($shop_list[$a][$b]['shop_name'])}}</h4>
											</div>	
											<div class="shop-slider-link">
												<a  href="{{url('shop/'.$shop_list[$a][$b]['id'])}}" class="btn btn-primary shop-link-btn">VISIT SHOP</a>
											</div>
										</div>								
									</div>
								</div>
								@endfor
							</div>
						</div>
					@endfor
					<!-- Carousel nav -->
					<a class="carousel-control left app-carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right app-carousel-control" href="#myCarousel"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 20px;">
	<!--featured-->
	<div class="row ">
			<div class="col-sm-8 app-featured">
				<h4 style="color: #252525; font-weight: 20px;">FEATURED PRODUCTS</h4>
				<div id="featured" class="carousel slide">
					<!--<div class="">-->
						<!--indicator-->
						<ol class="carousel-indicators">
							@for($i = 1; $i <= 4; $i++)
								<li data-target="#featured" data-slide-to="{{$i-1}}" class="{{$i == 1 ? ' active': ''}}"></li>
							@endfor
						</ol>
						<div class="carousel-inner">
								@for($i = 1; $i <= 4; $i++)
								<div class="item{{$i == 1 ? ' active': ''}}">
									<div style="height: 550px;">
										<img src="{{asset('photos/index.jpeg')}}" width="100%" height="100%">
									</div>
									<h4 class="text-center">
										<strong>
											Samsung Notebook&nbsp;
											<span class="featured-price">Tsh 750000</span>
										</strong>
									</h4>
								</div>
								@endfor
						</div>
					<!--</div>-->
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default app-bonus">
							<div class="panel-body">
								<h3 style="color: #252525; font-weight: 20px;">EARN BONUS SHOPPING POINTS</h3>
								<p style="color: #00B996;">
								<img src="photos/bonus.png"class="pull-right">
								You can't afford what you are dying for? <br/>
								Dont give up on yourself!<br/>
								Earn shopping points for unlimited shopping discount.<br/>
								All you need is to tell a friend to tell a friend
								</p>
								
							</div>
							<div class="panel-footer app-bonus-footer">
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="jumbotron app-signup">
							<h2>LOREM IPSUM</h2>
							<p style="text-align: left">You can't afford what you are dying for? Dont give up on yourself!
								Earn shopping points for unlimited shopping discount.
								All you need is to tell a friend to tell a friend 
							</p>
							<a href="{{url('/register')}}" class="btn btn-primary btn-lg app-btn signup-btn">SIGN UP</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<!---brands-->
<div class="container" style="margin-top: 20px;">
		<div class="row app-brand-header">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5">
						<div class="app-header-line-left"></div>
					</div>
					<div class="col-sm-2">
						<h4 class="text-center">Brand</h4>
					</div>
					<div class="col-sm-5">
						<div class="app-header-line-right"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="brand" class="carousel slide app-carousel">
					<div class="carousel-inner text-center app-brand-inner">
						@for($a = 1; $a <= 10; $a++)
								<div class="item{{$a == 1 ? ' active': ''}}">
									<div class="row">
										@for($b = 1; $b <= 4; $b++)
										<div class="col-sm-3">
											<div class="panel panel-default product-panel">									
												<div class="panel-body text-center">
												<a  href="{{url('/product')}}">
													<img src="{{asset('photos/reebook.png')}}" width=100% height="200">
												</a>
													<h5>REEBOOK</h5>
												</div>
											</div>
										</div>
										@endfor	
									</div>
								</div>
						@endfor
					</div>
				<!-- Carousel nav -->
					<a class="carousel-control left app-carousel-control" href="#brand" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right app-carousel-control" href="#brand"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
</div>

<!--electronics-->
<div class="container" style="margin-top: 20px;">
		<div class="row app-brand-header">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5">
						<div class="app-header-line-left"></div>
					</div>
					<div class="col-sm-2">
						<h4 class="text-center">Electronics</h4>
					</div>
					<div class="col-sm-5">
						<div class="app-header-line-right"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="electronics" class="carousel slide app-carousel">
					<div class="carousel-inner text-center app-brand-inner">
						@for($a = 1; $a <= 10; $a++)
								<div class="item{{$a == 1 ? ' active': ''}}">
									<div class="row">
										@for($b = 1; $b <= 4; $b++)
										<div class="col-sm-3">
											<div class="panel panel-default product-panel">									
												<div class="panel-body text-center">
													<img src="{{asset('photos/reebook.png')}}" width=100% height="200">
													<h5>REEBOOK</h5>
												</div>
											</div>
										</div>
										@endfor	
									</div>
								</div>
						@endfor
					</div>
				<!-- Carousel nav -->
					<a class="carousel-control left app-carousel-control" href="#electronics" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right app-carousel-control" href="#electronics"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
</div>

<!--Jewerelly-->
<div class="container" style="margin-top: 20px;">
		<div class="row app-brand-header">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5">
						<div class="app-header-line-left"></div>
					</div>
					<div class="col-sm-2">
						<h4 class="text-center">Jewerelly</h4>
					</div>
					<div class="col-sm-5">
						<div class="app-header-line-right"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="jewerelly" class="carousel slide app-carousel">
					<div class="carousel-inner text-center app-brand-inner">
						@for($a = 1; $a <= 10; $a++)
								<div class="item{{$a == 1 ? ' active': ''}}">
									<div class="row">
										@for($b = 1; $b <= 4; $b++)
										<div class="col-sm-3">
											<div class="panel panel-default product-panel">									
												<div class="panel-body text-center">
													<img src="{{asset('photos/reebook.png')}}" width=100% height="200">
													<h5>REEBOOK</h5>
												</div>
											</div>
										</div>
										@endfor	
									</div>
								</div>
						@endfor
					</div>
				<!-- Carousel nav -->
					<a class="carousel-control left app-carousel-control" href="#jewerelly" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right app-carousel-control" href="#jewerelly"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
</div>

<!---get social-->
<div class="container" style="margin-top: 20px;">
		<div class="row app-social">
			<div class="col-sm-12">
				<h4 class="text-center">GET SOCIAL ABOUT YOU</h4>
			</div>
			<div class="col-sm-12" style="margin-top: 30px; margin-bottom: 20px; ">
				<div class="row">
					<div class="col-sm-3 text-center">
						<a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
						<i class="fa fa-facebook-square fa-3x"></i>
						</a>
					</div>
					<div class="col-sm-3 text-center">
						<a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
							<i class="fa fa-twitter-square fa-3x"></i>	
						</a>
					</div>
					<div class="col-sm-3 text-center">
						<a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
							<i class="fa fa-instagram fa-3x"></i>
						</a>
					</div>
					<div class="col-sm-3 text-center">
						<a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
							<i class="fa fa-whatsapp fa-3x"></i>	
						</a>
					</div>
				</div>
			</div>
		</div>
</div>

<!--register to sell-->
<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-sm-12 app-sell">
			<h4 class="text-center">REGISTER TO SELL THROUGH US</h4>
			<p class="text-justify">
				You can't afford what you are dying for? Dont give up on yourself! Earn shopping points for unlimited shopping discount. All you need is to tell a friend to tell a friend You can't afford what you are dying for? Dont give up on yourself! Earn shopping points for unlimited shopping discount. All you need is to tell a friend to tell a friend You can't afford what you are dying for? Dont give up on yourself! Earn shopping points for unlimited shopping discount. All you need is to tell a friend to tell a friend You can't afford what you are dying for? Dont give up on yourself! Earn shopping points for unlimited shopping discount. All you need is to tell a friend to tell a friend
			</p>
		</div>
	</div>
</div>
@endsection
