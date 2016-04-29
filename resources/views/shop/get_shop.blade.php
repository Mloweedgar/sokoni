@extends('layouts.app')
@section('content')
	<div class="container" style="margin-top: 20px;">
		@include('shop.shop_header')

		<div class="row" style="margin-top: 40px;">
			<div class="col-sm-9">
				<h4>All Categories</h4>
			</div>
			<div class="col-sm-3">
				<input type="text" name="item" placeholder="FILTER PRODUCT" class="form-control" />				
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div style="border-bottom: solid 1px #ddd;"></div>
			</div>
		</div>
		
		<div class="row" style="margin-top: 10px;">
			@include('shop.shop_sidebar')
			@include('shop.shop_content')
		</div>
	</div>
@endsection