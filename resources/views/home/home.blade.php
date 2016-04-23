@extends('layouts.app')

@section('content')

<!-- featured shop-->
<div class="container" style="margin-top: 20px;">
	<div class="row app-shop-header">
		<div class="col-sm-5 app-header-line-left"></div>
		<div class="col-sm-2"><h4 class="text-center">Featured Shops</h4></div>
		<div class="col-sm-5 app-header-line-right"></div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div id="myCarousel" class="carousel slide app-carousel">
				<div class="carousel-inner app-shop-inner">
					<div class="item active">
						@include('shop')
					</div>
					<div class="item">
						@include('shop')
					</div>
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
	<div class="row app-featured">
			<div class="col-sm-8">
				<h4 style="color: #252525; font-weight: 20px;">FEATURED PRODUCTS</h4>
				<div id="myCarousel" class="carousel slide">
					<!--indicator-->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<div class="thumbnail">
								<img src="photos/index.jpeg"  width=100%>
							</div>
						</div>
						<div class="item">
							<div class="thumbnail">
								<img src="photos/index.jpeg " height=300px width=100%>
							</div>
						</div>
						<div class="item">
							<div class="thumbnail">
								<img src="photos/index.jpeg " height=300px width=100%>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default">
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
							<a href="{{url('/register')}}" class="btn btn-primary btn-lg app-btn">SIGN UP</a>
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
					<div class="col-sm-5 app-header-line-left"></div>
					<div class="col-sm-2"><h4 class="text-center">Brands</h4></div>
					<div class="col-sm-5 app-header-line-right"></div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide app-carousel">
					<div class="carousel-inner text-center app-brand-inner">
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/reebook.png" width=100%>
										<h4>REEBOOK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/fashonista.png" width=100%>
										<h4>FASHONISTA</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/link.png" width=100%>
										<h4>LINK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/vans.png" width=100%>
										<h4>VANS</h4>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row">
								<div class="col-sm-4">
									<div class="jumbotron">									
										<div class="photos/logo">shop</div>										
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="jumbotron">										
										<div class="logo">shop</div>										
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="jumbotron">
										<h1>SHOP</h1> 
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Carousel nav -->
					<a class="carousel-control left app-carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right app-carousel-control" href="#myCarousel"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
</div>

<!--electronics-->
<div class="container" style="margin-top: 20px;">
		<div class="row app-brand-header">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5 app-header-line-left"></div>
					<div class="col-sm-2"><h4 class="text-center">Electronics</h4></div>
					<div class="col-sm-5 app-header-line-right"></div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide app-carousel">
					<div class="carousel-inner text-center app-brand-inner">
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/reebook.png" width=100%>
										<h4>REEBOOK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/fashonista.png" width=100%>
										<h4>FASHONISTA</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/link.png" width=100%>
										<h4>LINK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/vans.png" width=100%>
										<h4>VANS</h4>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row">
								<div class="col-sm-4">
									<div class="jumbotron">									
										<div class="photos/logo">shop</div>										
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="jumbotron">										
										<div class="logo">shop</div>										
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="jumbotron">
										<h1>SHOP</h1> 
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Carousel nav -->
					<a class="carousel-control left app-carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right app-carousel-control" href="#myCarousel"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
</div>

<!--Jewerelly-->
<div class="container" style="margin-top: 20px;">
		<div class="row app-brand-header">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5 app-header-line-left"></div>
					<div class="col-sm-2"><h4 class="text-center">Jewerelly</h4></div>
					<div class="col-sm-5 app-header-line-right"></div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide app-carousel">
					<div class="carousel-inner text-center app-brand-inner">
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/reebook.png" width=100%>
										<h4>REEBOOK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/fashonista.png" width=100%>
										<h4>FASHONISTA</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/link.png" width=100%>
										<h4>LINK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron app-brand">									
										<img src="photos/vans.png" width=100%>
										<h4>VANS</h4>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row">
								<div class="col-sm-4">
									<div class="jumbotron">									
										<div class="photos/logo">shop</div>										
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="jumbotron">										
										<div class="logo">shop</div>										
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="jumbotron">
										<h1>SHOP</h1> 
										<button class="btn btn-primary">SHOP</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Carousel nav -->
					<a class="carousel-control left app-carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right app-carousel-control" href="#myCarousel"	data-slide="next">&rsaquo;</a>
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
