<div class="col-sm-10">
				
				<!--cat1-->
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-5">
								<div class="app-header-line-left"></div>
							</div>
							<div class="col-sm-2"><h5 class="text-center">Category 1</h5></div>
							<div class="col-sm-5">
								<div class="app-header-line-right"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div id="cat-1" class="carousel slide app-carousel">
							<div class="carousel-inner center-block app-brand-inner">
								@for($a = 1; $a <= 10; $a++)
								<div class="item{{$a == 1 ? ' active': ''}}">
									<div class="row">
										@for($b = 1; $b <= 3; $b++)
										<div class="col-sm-4">
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
							<a class="carousel-control left app-carousel-control" href="#cat-1" data-slide="prev">
								&lsaquo;
							</a>
							<a class="carousel-control right app-carousel-control" href="#cat-1" data-slide="next">
								&rsaquo;
							</a>
						</div>
					</div>
				</div>
				<!--cat2-->
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-5">
								<div class="app-header-line-left"></div>
							</div>
							<div class="col-sm-2"><h5 class="text-center">Category 2</h5></div>
							<div class="col-sm-5">
								<div class="app-header-line-right"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div id="cat-2" class="carousel slide app-carousel">
							<div class="carousel-inner center-block app-brand-inner">
								@for($a = 1; $a <= 10; $a++)
								<div class="item{{$a == 1 ? ' active': ''}}">
									<div class="row">
										@for($b = 1; $b <= 3; $b++)
										<div class="col-sm-4">
											<div class="panel panel-default product-panel">									
												<div class="panel-body text-center">
													<img src="{{asset('photos/fashonista.png')}}" width=100% height="200">
													<h5>FASHONISTA</h5>
												</div>
											</div>
										</div>
										@endfor	
									</div>
								</div>
								@endfor	
							</div>
							<!-- Carousel nav -->
							<a class="carousel-control left app-carousel-control" href="#cat-2" data-slide="prev">
								&lsaquo;
							</a>
							<a class="carousel-control right app-carousel-control" href="#cat-2" data-slide="next">
								&rsaquo;
							</a>
						</div>
					</div>
				</div>
				<!--cat3-->
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-5">
								<div class="app-header-line-left"></div>
							</div>
							<div class="col-sm-2"><h5 class="text-center">Category 3</h5></div>
							<div class="col-sm-5">
								<div class="app-header-line-right"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div id="cat-3" class="carousel slide app-carousel">
							<div class="carousel-inner center-block app-brand-inner">
								@for($a = 1; $a <= 10; $a++)
								<div class="item{{$a == 1 ? ' active': ''}}">
									<div class="row">
										@for($b = 1; $b <= 3; $b++)
										<div class="col-sm-4">
											<div class="panel panel-default product-panel">									
												<div class="panel-body text-center">
													<img src="{{asset('photos/link.png')}}" width=100% height="200">
													<h5>LINK</h5>
												</div>
											</div>
										</div>
										@endfor	
									</div>
								</div>
								@endfor	
							</div>
							<!-- Carousel nav -->
							<a class="carousel-control left app-carousel-control" href="#cat-3" data-slide="prev">
								&lsaquo;
							</a>
							<a class="carousel-control right app-carousel-control" href="#cat-3" data-slide="next">
								&rsaquo;
							</a>
						</div>
					</div>
				</div>
			</div>