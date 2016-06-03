<div class="col-sm-3">
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
					<?php $i = 1; ?>
						@foreach($shop->category as $sub)
			      <div class="checkbox">
							<label>
								<input type="checkbox" class="{{$i ==1? 'cat-active': ''}}" id="cat-{{$sub->id}}" value="" {{$i ==1? 'checked': ''}}>&nbsp;
								{{$sub->sub_category_name}}
							</label>
						</div>
						<?php $i++; ?>
						@endforeach
			  </div>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Brand</h3>
			  </div>
			  <div class="panel-body shop-brands">

			  </div>
			</div>
		</div>
	</div>
</div>
