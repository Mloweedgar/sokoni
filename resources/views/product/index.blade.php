@extends('layouts.app')
@section('content')

	<!---content area-->
	<div class="container">
		<div class="row">
		  <div class="col-sm-6 col-sm-offset-3">
		  	<div id="message"></div>
		  </div>
		</div>
		<div class="row">
		  @include('product.product-image-slider')
			@include('product.product-tabs')
			@include('product.product-shop')
		</div>

		<div class="row">
			<div class="col-sm-12">
				@include('product.recommended-products')
			</div>
		</div>
	</div>
	@endsection
