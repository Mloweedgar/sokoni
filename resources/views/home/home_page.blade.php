@extends('layouts.app')

@section('content')
	<div class="container wrapper">
		<nav class="navbar" role="navigation">
			<div class="nav-custom">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="example">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="home.html" class="navbar-brand">Sokoni</a>
				</div>

				<div class="collapse navbar-collapse" id="example">
					<ul class="nav navbar-nav navbar-right nav-top">
						<li class="active"><a href="home.html">Home</a></li>
						<li><a href="#">Wishlist</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">My Account</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<!---content area-->
	

		<div class="row" style="margin-bottom: 10px;">
			<div class="col-sm-3">
				<div class="dropdown">
					<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" style="width: 100%;">CATEGORIES</button>
					<ul class="dropdown-menu">
						<li><a href="">Category 1</a></li>
						<li><a href="">Category 2</a></li>
						<li><a href="">Category 3</a></li>
						<li><a href="">Category 4</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="dropdown">
					<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" style="width: 100%;">SELECT SHOP</button>
					<ul class="dropdown-menu">
						<li><a href="">Category 1</a></li>
						<li><a href="">Category 2</a></li>
						<li><a href="">Category 3</a></li>
						<li><a href="">Category 4</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
					<form class="form-inline pull-right" role="form">
						<div class="input-group" style="">
							<input type="text" name="item" placeholder="SEARCH PRODUCT" class="form-control input-lg" />
							<div class="input-group-btn">
								<button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search fa-lg"></i></button>
							</div>
						</div>	
					</form>
			</div>
		</div>
	
		<!--shop-->
		<div class="row cust-shop-header">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5 cust-header-line-left"></div>
					<div class="col-sm-2"><h4 class="center-block">FEATURED SHOPS</h4></div>
					<div class="col-sm-5 cust-header-line-right"></div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide cust-carousel">
					<div class="carousel-inner shop-inner center-block">
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron cust-jumbotron">									
										<div class="logo">shop</div>										
										<a  href="shop.html" class="btn btn-primary">SHOP</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-jumbotron">										
										<div class="logo">shop</div> 										
										<a  href="shop.html" class="btn btn-primary">SHOP</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-jumbotron">
										<div class="logo">shop</div>
										<a  href="shop.html" class="btn btn-primary">SHOP</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-jumbotron">
										<div class="logo">shop</div>
										<a  href="shop.html" class="btn btn-primary">SHOP</a>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron cust-jumbotron">									
										<div class="logo">shop</div>										
										<a  href="shop.html" class="btn btn-primary">SHOP</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-jumbotron">										
										<div class="logo">shop</div> 										
										<a  href="shop.html" class="btn btn-primary">SHOP</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-jumbotron">
										<div class="logo">shop</div>
										<a  href="shop.html" class="btn btn-primary">SHOP</a>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-jumbotron">
										<div class="logo">shop</div>
										<a  href="shop.html" class="btn btn-primary">SHOP</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Carousel nav -->
					<a class="carousel-control left cust-carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right cust-carousel-control" href="#myCarousel"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>

		<!--featured-->
		<div class="row cust-featured">
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
							<div class="thumbnail cust-thumbnail">
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
							<div class="panel-footer cust-bonus-footer">
								<a href="#">LEARN MORE</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="jumbotron cust-signup">
							<h2>LOREM IPSUM</h2>
							<p style="text-align: left">You can't afford what you are dying for? Dont give up on yourself!
								Earn shopping points for unlimited shopping discount.
								All you need is to tell a friend to tell a friend 
							</p>
							<button class="btn btn-primary btn-lg cust-btn">SIGN UP</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!---brands-->
		<div class="row cust-brand-header">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5 cust-header-line-left"></div>
					<div class="col-sm-2"><h4 class="center-block">BRANDS</h4></div>
					<div class="col-sm-5 cust-header-line-right"></div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide cust-carousel">
					<div class="carousel-inner center-block cust-brand-inner">
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/reebook.png" width=100%>
										<h4>REEBOOK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/fashonista.png" width=100%>
										<h4>FASHONISTA</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/link.png" width=100%>
										<h4>LINK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
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
					<a class="carousel-control left cust-carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right cust-carousel-control" href="#myCarousel"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
		<!--electronics-->
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5 cust-header-line-left"></div>
					<div class="col-sm-2"><h4 class="center-block">ELECTRONICS</h4></div>
					<div class="col-sm-5 cust-header-line-right"></div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide cust-carousel">
					<div class="carousel-inner center-block cust-brand-inner">
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/reebook.png" width=100%>
										<h4><a href="product.html">REEBOOK</a></h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/fashonista.png" width=100%>
										<h4>FASHONISTA</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/link.png" width=100%>
										<h4>LINK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
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
										<div class="logo">shop</div>										
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
					<a class="carousel-control left cust-carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right cust-carousel-control" href="#myCarousel"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
		<!--Jewerelly-->
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-5 cust-header-line-left"></div>
					<div class="col-sm-2"><h4 class="center-block">JEWERELLY</h4></div>
					<div class="col-sm-5 cust-header-line-right"></div>
				</div>
			</div>
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel slide cust-carousel">
					<div class="carousel-inner center-block cust-brand-inner">
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/reebook.png" width=100%>
										<h4>REEBOOK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/fashonista.png" width=100%>
										<h4>FASHONISTA</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
										<img src="photos/link.png" width=100%>
										<h4>LINK</h4>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="jumbotron cust-brand">									
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
										<div class="logo">shop</div>										
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
					<a class="carousel-control left cust-carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right cust-carousel-control" href="#myCarousel"	data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>

		<!---get social-->
		<div class="row cust-social">
			<div class="col-sm-12">
				<h4 class="center-block">GET SOCIAL ABOUT YOU</h4>
			</div>
			<div class="col-sm-12" style="margin-top: 30px; margin-bottom: 20px; ">
				<div class="row">
					<div class="col-sm-3 center-block">
						<a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
						<i class="fa fa-facebook-square fa-3x"></i>
						</a>
					</div>
					<div class="col-sm-3 center-block">
						<a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
							<i class="fa fa-twitter-square fa-3x"></i>	
						</a>
					</div>
					<div class="col-sm-3 center-block">
						<a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
							<i class="fa fa-instagram fa-3x"></i>
						</a>
					</div>
					<div class="col-sm-3 center-block">
						<a href="#" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.">
							<i class="fa fa-whatsapp fa-3x"></i>	
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--register to sell-->
		<div class="row">
			<div class="col-sm-12 cust-sell">
				<h4 class="center-block">REGISTER TO SELL THROUGH US</h4>
				<p class="justify-block">You can't afford what you are dying for? Dont give up on yourself! Earn shopping points for unlimited shopping discount. All you need is to tell a friend to tell a friend You can't afford what you are dying for? Dont give up on yourself! Earn shopping points for unlimited shopping discount. All you need is to tell a friend to tell a friend You can't afford what you are dying for? Dont give up on yourself! Earn shopping points for unlimited shopping discount. All you need is to tell a friend to tell a friend You can't afford what you are dying for? Dont give up on yourself! Earn shopping points for unlimited shopping discount. All you need is to tell a friend to tell a friend  </p>
			</div>
		</div>
	
	</div>

@endsection
