<div class="container app-search" >
	<div class="row">
		<!--CATEGORIES-->
		<div class="col-sm-2">
			<div class="dropdown">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-list" aria-hidden="true"></i>&nbsp;
					CATEGORIES
				</button>
				<ul class="dropdown-menu category-menu">
					@for($j =1; $j <= 3; $j++)
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" role="button">
							Category {{$j}}
						</a>
					</li>
					@endfor
				</ul>
			</div>
		</div>
		<!--SHOP SEARCH-->
		<div class="col-sm-5">
			<input type="text" name="item" placeholder="SEARCH SHOP" class="form-control" />
		</div>
		<!--PRODUCT SEARCH-->
		<div class="col-sm-5">
			<input type="text" name="item" placeholder="SEARCH PRODUCT" class="form-control " />
		</div>
	</div>
</div>