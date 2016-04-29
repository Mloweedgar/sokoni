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

						<ul class="dropdown-menu subcategory-menu" role="menu">
                            
                            <div class="row">
                            	@for($a = 1; $a <= 4; $a++)
                            	<div class="col-sm-3">
                            		<h4>subCategory</h4>
                            		<ul class="nav nav-stacked">
                            			<li><a href="#">brand1</a></li>
                            			<li><a href="#">brand1</a></li>
                            			<li><a href="#">brand1</a></li>
                            			<li><a href="#">brand1</a></li>
                            		</ul>
                            	</div>
                            	@endfor
                            </div>
                            
                        </ul>
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