<div class="col-sm-9">
	<div class="tab-content">
		@for($i = 1; $i <= 3; $i++)
			<div class="tab-pane{{$i == 1 ? ' active': ''}}" id="{{$i}}">
				@for($j = 1; $j <= 3; $j++)
				<div class="row">
					{{titleCentered($i)}}
					<div class="col-sm-12">
						<div id="cat-2" class="carousel slide app-carousel">
							<div class="carousel-inner center-block app-product-inner">
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
							{{carouselNav('cat-2')}}
						</div>
					</div>
				</div>
				@endfor
			</div>
		@endfor
	</div>
</div>
