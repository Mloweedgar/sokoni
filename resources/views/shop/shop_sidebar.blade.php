<div class="col-sm-3" id="scroller">
	<div class="row">

		<div class="col-sm-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Price range</h3>
			  </div>
			  <div class="panel-body text-center">
					<input id="ex2"
								 type="text"
								 value=""
								 data-slider-min="10000"
								 data-slider-max="1000000"
								 data-slider-step="5"
								 data-slider-value="[250,450]"
						/>
				</div>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Categories</h3>
			  </div>
			  <div class="panel-body shop-categories">
						@for($i = 1; $i <= 5; $i++)
			      <div class="checkbox">
							<label>
								<input type="checkbox" name="name" value="" {{$i ==1? 'checked': ''}}>&nbsp;
								Category {{$i}}
							</label>
						</div>
						@endfor
			  </div>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Brand</h3>
			  </div>
			  <div class="panel-body shop-brands">
						@for($i = 1; $i <= 5; $i++)
			      <div class="checkbox">
							<label>
								<input type="checkbox" name="name" value="" {{$i ==1? 'checked': ''}}>&nbsp;
								Brand {{$i}}
							</label>
						</div>
						@endfor
			  </div>
			</div>
		</div>
	</div>
</div>
