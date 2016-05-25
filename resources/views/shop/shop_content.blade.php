<div class="col-sm-9">
	<div class="row">
	  <div class="col-sm-12">
	  	<div class="panel panel-default">
	  	  <div class="panel-body">
	  	    Search and sorting
	  	  </div>
	  	</div>
	  </div>
	</div>
	@for($a = 1; $a <= 4; $a++)
		<div class="row">
			@for($b = 1; $b <= 3; $b++)
			<div class="col-sm-4">
				<div class="panel panel-default product-panel">
					<div class="panel-body text-center">
						<img src="{{asset('photos/fashonista.png')}}" width=100% height="200">
						<h5>FASHONISTA</h5>
						<span>{{rating(4)}}</span>
					</div>
					<div class="product-hover text-center">
						  <div class="product-hover-wishlist">
						  	<a href="#" title="add to wishlist">
						  		<i class="fa fa-heart fa-2x"></i>
						  	</a>
						  </div>
							<div class="product-hover-btn">
								<a href="{{url('/product')}}" class="btn btn-default">View</a>
							</div>
					</div>
				</div>
			</div>
			@endfor
		</div>
	@endfor
</div>
